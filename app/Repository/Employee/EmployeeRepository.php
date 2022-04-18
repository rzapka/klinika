<?php


namespace App\Repository\Employee;
use \App\Repository\EmployeeRepository as EmployeeRepositoryInterface;
use App\Models\Employee;
use Carbon\Carbon;

class EmployeeRepository implements EmployeeRepositoryInterface
{
    private Employee $employee;

    public function __construct(Employee $employee)
    {
        $this->employee = $employee;
    }

    public function get($id)
    {
        return $this->employee->find($id);
    }

    public function all()
    {
        return $this->employee->query()->orderBy('id')->get();
    }

    public function store(array $data)
    {
        $employee = new Employee();
        $employee->firstname = trim($data['firstname']);
        $employee->lastname = trim($data['lastname']);
        $employee->specialization = trim($data['specialization']);
        $employee->phone_num = trim($data['phone_num']);
        $employee->email = trim($data['email']);
        $employee->description = trim($data['description']);
        $employee->created_at = Carbon::now();
        $employee->updated_at = Carbon::now();

        $path = null;
        if (!empty($data['image'])) {
            $path = $data['image']->store('doctors', 'public');
        }
        if ($path) {
            $employee->image = $path;
        }
        $employee->save();
    }

    public function update(array $data, int $id)
    {
        $employee = $this->employee->find($id);
        $employee->firstname = trim($data['firstname']) ?? $employee->imie;
        $employee->lastname = trim($data['lastname']) ?? $employee->nazwisko;
        $employee->specialization = trim($data['specialization']) ?? $employee->specjalizacja;
        $employee->phone_num = trim($data['phone_num']) ?? $employee->nr_telefonu;
        $employee->email = trim($data['email']) ?? $employee->email;
        $employee->description = trim($data['description']) ?? $employee->opis;
        $employee->updated_at = Carbon::now();

        $path = null;
        if (!empty($data['image'])) {
            $path = $data['image']->store('doctors', 'public');
            $employee->image = $path ?? $employee->zdjecie;
        }

        $employee->save();
    }

}
