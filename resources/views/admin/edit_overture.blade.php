
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
                Edytuj zabieg
            </div>
            <form action="{{ route('destroy.overture', ['id' => $overture->id]) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger d-block mt-4 mx-auto"
                        onclick="return confirm('Czy aby na pewno chcesz usunąć?');">Usuń Zabieg</button>
            </form>
            <div class="card-body">
                <form action="{{ route('update.overture', ['id' => $overture->id]) }}" method="post" class="row">
                    @csrf
                    @method('patch')
                    <div class="col-12">
                        <label for="overture_name">Nazwa: </label>
                        <input type="text" id="overture_name" name="name"
                               value="{{ old('name') ?? $overture->name }}" class="mb-4 form-control w-50 mx-auto">
                    </div>
                    <div class="col-3"></div>
                    <div class="col-3">
                        <label for="overture_price_from">Cena od: (PLN) </label>
                        <input type="text" id="overture_price_from" name="price_from"
                               value="{{ old('price_from') ?? $overture->price_from }}" class="mb-4">
                    </div>
                    <div class="col-3">
                        <label for="overture_price_to">Cena do: (PLN) </label>
                        <input type="text" id="overture_price_to" name="price_to" class="mb-4"
                               value="{{ old('price_to') ?? $overture->price_to }}" >
                    </div>
                    <div class="col-3"></div>
                    <div class="col-12 mx-auto">
                        <label for="overture_category_id">
                            Wybierz kategorie:</label>
{{--                        <input type="text" id="overture_category_id" name="category_id" class="mb-4"--}}
{{--                        value="{{ old('kategoria_id') ?? $overture->kategoria_id }}">--}}
{{--                        {{ dump(old('kategoria_id')) }}--}}
                        <select name="category_id" id="overture_category_id">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"
                                @if($overture->category_id == $category->id) selected @endif>
                                   {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-secondary mx-auto mt-3" type="submit">Zatwierdź</button>
                </form>
            </div>
            <div class="card-footer text-muted">
                Edytuj Zabieg
            </div>
        </div>
    </div>
@endsection
@section('custom js')
<script src="{{ asset('js/removeFooter.js') }}">
</script>
@endsection
