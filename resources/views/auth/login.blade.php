<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Klinika chirurgii plastycznej</title>
    <link rel="icon" type="image/png" href="{{ asset('storage/clinic.svg') }}"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin_login.css') }}">
</head>
<body>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card mt-5">
                @if (session()->has('error'))
                    <div class="alert alert-danger mx-auto mt-4 w-100" role="alert" >
                        <strong>{{ session()->get('error') }}</strong>
                    </div>
                @endif
                <div class="card-header text-center"><h4 class="font-weight-bold">Zaloguj się jako Admin</h4>
                (login: admin, hasło: admin)</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">Nazwa użytkownika:</label>

                            <div class="col-md-6">
                                <input id="username"  class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Hasło: </label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-5">
                                <button type="submit" class="btn btn-secondary">
                                    Zaloguj się
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

