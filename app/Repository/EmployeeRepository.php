<?php

declare(strict_types=1);

namespace App\Repository;
use Illuminate\Database\Eloquent\Collection;

interface EmployeeRepository
{
    public function all();
    public function get(int $id);
    public function update(array $data, int $id);
    public function store(array $data);
}
