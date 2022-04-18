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
            <div class="card text-center mb-5">
                <div class="card-header">
                    Dodaj nowego pracownika
                </div>
                <div class="card-body">
                    <form action="{{ route('store.employee') }}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="my-auto">
                            <div>
                                <label for="employee_name">Imię: </label>
                                <input type="text" id="employee_name" class="mb-4 form-control w-50 mx-auto"
                                        name="firstname">
                            </div>
                            <div>
                                <label for="employee_lastname">Nazwisko: </label>
                                <input type="text" id="employee_lastname" class="mb-4 form-control w-50 mx-auto"
                                        name="lastname">
                            </div>
                            <div>
                                <label for="employee_specialization">Specjalizacja: </label>
                                <input type="text" id="employee_specialization" class="mb-4 form-control w-50 mx-auto"
                                        name="specialization">
                            </div>
                            <div>
                                <label for="employee_phone">Numer telefonu:  </label>
                                <input type="text" id="employee_phone" class="mb-4 form-control w-50 mx-auto"
                                        name="phone_num">
                            </div>
                            <div>
                                <label for="employee_email">Email:  </label>
                                <input type="text" id="employee_email" class="mb-4 form-control w-50 mx-auto"
                                        name="email">
                            </div>
                        </div>
                        <div class="employee_photo my-auto">
                            <label class="mt-2" for="employee_photo">Zdjęcie:  </label>
                            <input type="file" id="employee_photo" class="mb-4 form-control-file w-25 mx-auto" name="image">
                        </div>
                        <div>
                            <h3> <label for="employee_description">Opis  </label></h3>
                            <textarea id="employee_description" name="description"
                                      class="mb-4 pt-4 form-control form-control-lg">
                        </textarea>
                        </div>
                        <button class="btn btn-secondary mx-auto" type="submit">Zatwierdź</button>
                    </form>
                </div>
                <div class="card-footer text-muted">
                    Dodaj nowego pracownika
                </div>
            </div>
        </div>
        @endsection
        @section('custom js')
            <script src="{{ asset('js/removeFooter.js') }}">
            </script>
@endsection
