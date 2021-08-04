@extends('shared')
@section('content')
    <div class="edit">
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
        <div class="card text-center mb-3">
            <div class="card-header">
                Edytuj pracownika
            </div>
            <form action="{{ route('destroy.employee', ['id' => $employee->id]) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger d-block my-4 mx-auto"
                        onclick="return confirm('Czy aby na pewno chcesz usunąć?');">Usuń Pracownika</button>
            </form>
            <div class="card-body">
                <form action="{{ route('update.employee', ['id' => $employee->id]) }}" method="post" class="row"
                      enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="employee_photo col-6 my-auto">
                        <img src='{{ asset("storage/$employee->image") }}' alt="" class="employeeImg">
                        <label class="mt-2" for="employee_photo">Zdjęcie:  </label>
                        <input type="file" id="employee_photo" class="mb-4 form-control-file w-75 mx-auto" name="image">
                    </div>
                    <div class="col-6 my-auto">
                    <div>
                        <label for="employee_name">Imię: </label>
                        <input type="text" id="employee_name" class="mb-4 form-control w-75 mx-auto"
                               value="{{ old('imie') ?? $employee->name }}" name="name">
                    </div>
                    <div>
                        <label for="employee_lastname">Nazwisko: </label>
                        <input type="text" id="employee_lastname" class="mb-4 form-control w-75 mx-auto"
                               value="{{ old('surname') ?? $employee->surname  }}" name="surname">
                    </div>
                    <div>
                        <label for="employee_specialization">Specjalizacja: </label>
                        <input type="text" id="employee_specialization" class="mb-4 form-control w-75 mx-auto"
                               value="{{ old('specialization') ?? $employee->specialization  }}" name="specialization">
                    </div>
                    <div>
                        <label for="employee_phone">Numer telefonu:  </label>
                        <input type="text" id="employee_phone" class="mb-4 form-control w-75 mx-auto"
                               value="{{ old('phone_num') ?? $employee->phone_num  }}" name="phone_num">
                    </div>
                    <div>
                        <label for="employee_email">Email:  </label>
                        <input type="text" id="employee_email" class="mb-4 form-control w-75 mx-auto"
                               value="{{ old('email') ?? $employee->email  }}" name="email">
                    </div>
                    </div>
                    <div class="col-12">
                        <h3> <label for="employee_description">Opis  </label></h3>
                        <textarea id="employee_description" name="description"
                                  class="mb-4 pt-4 form-control form-control-lg">
                            {{ old('description') ?? $employee->description }}
                        </textarea>
                    </div>
                    <button class="btn btn-secondary mx-auto" type="submit">Zatwierdź</button>
                </form>
            </div>
            <div class="card-footer text-muted">
                Edytuj pracownika
            </div>
        </div>
    </div>
@endsection
@section('custom js')
    <script src="{{ asset('js/removeFooter.js') }}">
    </script>
@endsection
