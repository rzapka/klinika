@extends('shared')
@section('content')
    <div class="siteImage siteImageOvertures mb-4">
        <div class="siteImageBg">
            <h1 class="display-3 overtures-h1">Zabiegi</h1>
        </div>
    </div>
    @if(Auth::check())
            <a class="btn btn-success mb-3" href="{{ route('create.category') }}">Dodaj nową kategorię</a>
    @endif
    @if (session()->has('success'))
        <div class="alert alert-success mx-auto mt-4 alert-dismissible d-block fade show" role="alert">
            <strong>{{ session()->get('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <section class="overturesWrapper row">
            <ul class="categories col-3">
                @foreach($categories as $category)
                    <li class="category">
                        <a href="{{ route('overtures', ['id' => $category->id])  }}">
                            {{ $category->name }}</a>
                    </li>
                    @if(Auth::check())
                        <a class="btn btn-primary mb-2 mt-1"
                           href="{{ route('edit.category', ['id' => $category->id]) }}">Edytuj</a>
                    @endif
                @endforeach
            </ul>
        <div class="overtures mx-auto col-9">
            <form class="form-inline search-overtures float-right"
                  method="get" action="{{ route('overtures') }}">
                <input class="form-control" name="search" type="search" placeholder="Szukaj zabiegu..."
                   value="{{ request('search') }}"    aria-label="Search">
                <button class="btn fas fa-search" type="submit"></button>
            </form>
            <table class="table mt-5">
                @if(Auth::check())
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-success" href="{{ route('create.overture') }}">Dodaj nowy zabieg</a>
                    </div>
                @endif
                <thead class="thead-light">
                <tr>
                    <th scope="col">Lp</th>
                    <th scope="col">Zabieg</th>
                    <th scope="col">Cena od</th>
                    <th scope="col">Cena do</th>
                    @if(Auth::check()) <th scope="col">Admin</th> @endif
                </tr>
                </thead>
                <tbody>
                @foreach($overtures as $overture)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $overture->name }}</td>
                    <td>{{ $overture->price_from }} PLN</td>
                    <td>{{ $overture->price_to }} PLN</td>
                    @if(Auth::check())
                        <td>
                            <a class="btn btn-primary"
                               href="{{ route('edit.overture', ['id' => $overture->id]) }}">
                                Edytuj
                            </a>
                        </td>
                    @endif
                </tr>
                @endforeach
                </tbody>
            </table>
            <div class="pagination w-50 mx-auto mt-5">
                {{$overtures->links("pagination::bootstrap-4")}}
            </div>


        </div>

    </section>
@endsection
