<?php

namespace App\Repository\Category;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use \App\Repository\CategoryRepository as CategoryRepositoryInterface;


class CategoryRepository implements CategoryRepositoryInterface
{
    private Category $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function all()
    {
        return $this->category->all();
    }

    public function get(int $id)
    {
        return $this->category->find($id);
    }

    public function update(array $data, int $id)
    {
        $name = trim($data['name']);
        $category = $this->category->find($id);

        $category->name = $name;
        $category->updated_at = Carbon::now();
        $category->save();
    }

    public function store(array $data)
    {
        $category = new Category([
            'name' => trim($data['name']),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        $category->save();
    }
}
