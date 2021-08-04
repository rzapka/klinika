<?php

declare(strict_types=1);

namespace App\Repository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

interface OvertureRepository
{
    public function paginateByPhrase(): LengthAwarePaginator;
    public function get(int $id);
    public function update(array $data, int $id);
    public function store(array $data);
}
