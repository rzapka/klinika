<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeValidation;
use App\Repository\EmployeeRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Gate;

class EmployeeController extends Controller
{
    private EmployeeRepository $employeeRepository;

    public function __construct(EmployeeRepository $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }

    public function index(): View
    {
        return view('employees', ['employees' => $this->employeeRepository->all()]);
    }

    public function get($id)
    {
        return json_encode($this->employeeRepository->get($id));
    }

    public function create(): view
    {
        if (Gate::denies('admin-level')) {
            abort(403, 'Nie masz uprawnień.');
        }
        return view('admin.create_employee');
    }

    public function store(EmployeeValidation $request): RedirectResponse
    {
        $data = $request->validated();

       $this->employeeRepository->store($data);

        return redirect()->back()->with('success', 'Pomyślnie dodano nowego pracownika');
    }

    public function edit(int $id): View
    {
        if (Gate::denies('admin-level')) {
            abort(403, 'Nie masz uprawnień.');
        }
        return view('admin.edit_employee', ['employee' => $this->employeeRepository->get($id)]);
    }

    public function update(EmployeeValidation $request, int $id): RedirectResponse
    {
        $data = $request->validated();

        $this->employeeRepository->update($data, $id);

        return redirect()->back()->with('success', 'Pomyślnie zaktualizowano dane');
    }

    public function destroy(int $id): RedirectResponse
    {

        $this->employeeRepository->get($id)->delete();
        return redirect()->route('employees')->with('success', 'Usunięcie przebiegło pomyślnie.');
    }

}
