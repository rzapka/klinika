@extends('shared')
@section('content')
    <div class="edit">
        <div class="edit">
            @if (session()->has('success'))
                <div class="alert alert-success mx-auto mt-4 alert-dismissible d-block fade show" role="alert">
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
                    Edytuj kategorię
                </div>
                <form action="{{ route('destroy.category', ['id' => $category->id]) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger d-block mt-4 mx-auto"
                            onclick="return confirm('Czy aby na pewno chcesz usunąć?');">Usuń Kategorię</button>
                </form>
                <div class="card-body">
                    <form action="{{ route('update.category', ['id' => $category->id]) }}" method="post">
                        @csrf
                        @method('patch')
                        <div>
                            <label for="category_name">Nazwa: </label>
                            <input type="text" id="category_name" name="name" class="mb-4 form-control w-25 mx-auto"
                                   value="{{ old('name') ?? $category->name }}">
                        </div>

                        <button class="btn btn-secondary" type="submit">Zatwierdź</button>
                    </form>
                </div>
                <div class="card-footer text-muted">
                    Edytuj kategorię
                </div>
            </div>
        </div>
        @endsection
        @section('custom js')
            <script src="{{ asset('js/removeFooter.js') }}">
            </script>
        @endsection
