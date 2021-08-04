<?php


namespace App\Repository\Overture;

use App\Models\Overture;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use \App\Repository\OvertureRepository as OvertureRepositoryInterface;

class OvertureRepository implements OvertureRepositoryInterface
{
    private Overture $overture;

    public function __construct(Overture $overture)
    {
        $this->overture = $overture;
    }

    public function get(int $id)
    {
        return $this->overture->find($id);
    }

    public function paginateByPhrase(string $phrase = null, ?int $id = null): LengthAwarePaginator
    {
        switch (true) {
            case $phrase:
                $overture = $this->overture->query()
                    ->where('name', 'like', "%$phrase%")->paginate(10);
                return $overture->withPath("?search=$phrase");
            case empty($phrase) && empty($id):
                return $this->overture->query()->paginate(10);
            default:
                return $this->overture->query()->where('category_id', $id)->paginate(10);
        }
    }

    public function store(array $data)
    {
        $overture = new Overture([
            'name' => trim($data['name']),
            'price_from' => trim($data['price_from']),
            'price_to' => trim($data['price_to']),
            'category_id' => $data['category_id'],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        $overture->save();
    }

    public function update(array $data, int $id)
    {
        $overture = $this->overture->find($id);
        $overture->name = trim($data['name']) ?? $overture->nazwa;
        $overture->price_from = trim($data['price_from']) ?? $overture->cena_od;
        $overture->price_to = trim($data['price_to']) ?? $overture->cena_do;
        $overture->category_id = $data['category_id'] ?? $overture->kategoria_id;
        $overture->data_edycji = Carbon::now();
        $overture->save();
    }

}
