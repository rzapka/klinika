<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryValidation;
use App\Repository\CategoryRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Gate;

class CategoryController extends Controller
{
    private CategoryRepository $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function create(): view
    {
        if (Gate::denies('admin-level')) {
            abort(403, 'Nie masz uprawnień.');
        }

        return view('admin.create_category');
    }


    public function store(CategoryValidation $request): RedirectResponse
    {
        $data = $request->validated();

        $this->categoryRepository->store($data);

        return redirect()->back()->with('success', 'Kategorie dodano pomyślnie');
    }

    public function edit(int $id): View
    {
        if (Gate::denies('admin-level')) {
            abort(403, 'Nie masz uprawnień.');
        }
        return view('admin.edit_category', ['category' => $this->categoryRepository->get($id)]);
    }

    public function update(CategoryValidation $request, int $id): RedirectResponse
    {
        $data = $request->validated();

        $this->categoryRepository->update($data, $id);

        return redirect()->back()->with('success', 'Pomyślnie zaktualizowano dane');
    }

    public function destroy(int $id): RedirectResponse
    {
        $this->categoryRepository->get($id)->delete();
        return redirect()->route('overtures')->with('success', 'Usunięcie przebiegło pomyślnie.');
    }
}
