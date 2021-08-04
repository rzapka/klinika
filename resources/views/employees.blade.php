@extends('shared')
@section('content')
    <div class="wrapper">
        @if(Auth::check())
           <div class="d-flex justify-content-center">
               <a class="btn btn-success" href="{{ route('create.employee') }}">Dodaj nowego pracownika</a>
           </div>
        @endif
            @if (session()->has('success'))
                <div class="alert alert-success mx-auto mt-4 alert-dismissible d-block fade show" role="alert">
                    <strong>{{ session()->get('success') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
    <div class="row">
        @foreach($employees as $employee)
                <div class="col-md-4 employee mt-4">
                    @if(Auth::check())<a href="{{ route('edit.employee', ['id' => $employee->id]) }}"
                                   class="btn btn-primary mt-5">Edytuj</a>@endif
                    <img src='{{ asset("storage/$employee->image") }}' class="employeesImg" alt="">
                    <h4 class="em__name text-center">dr {{ $employee->name }} {{ $employee->surname }}</h4>
                    <h5 class="em__specialization text-center">{{ $employee->specialization }}</h5>
                    <button class="btn details" index="{{ $employee->id }}">Więcej</button>
                </div>
        @endforeach
    </div>
    </div>
    <div class="showEmployee py-3">
        <img class="employeeImg px-4" alt="">
        <div class="employeeDescription">
            <h4 class="text-center name h4"></h4>
            <h5 class="text-center phone h5"></h5>
            <h5 class="text-center email h5"></h5>
            <p class="my-4 mx-3 text-center description"></p>
            <button class="btn details mx-auto w-25">Zamknij</button>
        </div>
    </div>
    <script src="{{ asset('js/employee.js') }}"></script>
@endsection
