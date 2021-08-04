
@extends('shared')
@section('content')
    <div class="edit">
        @if (session()->has('success'))
            <div class="alert alert-success mx-auto mt-4 alert-dismissible d-block fade show" role="alert" >
                <strong>{{ session()->get('success') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
            @if ($errors->any())
                <div class="alert alert-danger d-block">
                    <ul class="navbar-nav">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <div class="card text-center">
            <div class="card-header">
                Dodaj nowy zabieg
            </div>
            <div class="card-body">
                <form action="{{ route('store.overture') }}" method="post" class="row">
                    @csrf
                    <div class="col-12">
                        <label for="overture_name">Nazwa: </label>
                        <input type="text" id="overture_name" name="name"
                               class="mb-4 form-control w-50 mx-auto">
                    </div>
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="overture_price_from">Cena od: (PLN) </label>
                        <input type="text" id="overture_price_from" name="price_from" class="mb-4">
                    </div>
                    <div class="col-3">
                        <label for="overture_price_to">Cena do: (PLN) </label>
                        <input type="text" id="overture_price_to" name="price_to" class="mb-4">
                    </div>
                    <div class="col-3"></div>
                    <div class="col-12 mx-auto">
                        <label for="overture_category_id">
                            Wybierz kategorie:</label>
                        <input type="text" id="overture_category_id" name="category_id" class="mb-4">
                        <div class="col-11 mx-auto">
                            @foreach($categories as $category)
                                <span class="font-weight-bold">{{ $category->id  }}</span> - {{$category->name}},
                            @endforeach

                        </div>
                    </div>
                    <button class="btn btn-secondary mx-auto mt-3" type="submit">Zatwierdź</button>
                </form>
            </div>
            <div class="card-footer text-muted">
                Dodaj nowy zabieg
            </div>
        </div>
    </div>
@endsection
@section('custom js')
    <script src="{{ asset('js/removeFooter.js') }}">
    </script>
@endsection
