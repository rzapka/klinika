<?php

namespace App\Http\Controllers;

use App\Http\Requests\OvertureValidation;
use App\Repository\CategoryRepository;
use App\Repository\OvertureRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class OvertureController extends Controller
{
    private OvertureRepository $overtureRepository;
    private CategoryRepository $categoryRepository;

    public function __construct(OvertureRepository $overtureRepository, CategoryRepository $categoryRepository)
    {
        $this->overtureRepository = $overtureRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index(Request $request, ?int $id = null): View
    {

        $phrase = $request->get('search','');

        return view('overtures', [
            'categories' => $this->categoryRepository->all(),
            'overtures' => $this->overtureRepository->paginateByPhrase($phrase, $id),
        ]);
    }

    public function create(): view
    {
        if (Gate::denies('admin-level')) {
            abort(403, 'Nie masz uprawnień.');
        }

        return view('admin.create_overture',['categories' => $this->categoryRepository->all()]);
    }



    public function store(OvertureValidation $request): RedirectResponse
    {
        $data = $request->validated();

        $this->overtureRepository->store($data);

        return redirect()->back()->with('success', 'Zabieg dodano pomyślnie');
    }

    public function edit(int $id): View
    {
        return view('admin.edit_overture', [
            'overture' => $this->overtureRepository->get($id),
            'categories' => $this->categoryRepository->all(),
        ]);
    }

    public function update(OvertureValidation $request, int $id): RedirectResponse
    {
        $data = $request->validated();

        $this->overtureRepository->update($data, $id);

        return redirect()->back()->with('success', 'Pomyślnie zaktualizowano dane');
    }

    public function destroy(int $id): RedirectResponse
    {
        $this->overtureRepository->get($id)->delete();
        return redirect()->route('overtures')->with('success', 'Usunięcie przebiegło pomyślnie.');
    }
}
