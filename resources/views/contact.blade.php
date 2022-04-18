@extends('shared')
@section('content')
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
    <div class="siteImage siteImageContact mb-4">
        <div class="siteImageBg">
            <h1 class="display-4 contact-h1">Kontakt</h1>
        </div>
    </div>
    <div>
        <h2>Skontaktuj się z nami</h2>
        <h4>W celu uzyskania większej ilości informacji lub odpowiedzi na Twoje pytania, wypełnij poniższy formularz, a
            wkrótce się z Tobą skontaktujemy.</h4>
        <form class="mt-5" method="post" action="{{ route('send.message') }}">
            @csrf
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="contactName">Imię</label>
                    <input type="text" class="form-control" id="contactName" name="firstname" placeholder="np. Jan" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="contactLastname">Nazwisko</label>
                    <input type="text"
                           name="lastname" class="form-control" id="contactLastname" placeholder="np. Kowalski"  required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="contactEmail">E-mail</label>
                    <input type="email" class="form-control"  id="contactEmail"
                          name="email" placeholder="np. jkowalski@wp.pl"  required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="contactSubject">Temat</label>
                    <input type="text" name="topic" class="form-control" id="contactSubject"
                              aria-describedby="validationServer03Feedback" required>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        Wprowadź treść.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="contactDescription">Treść</label>
                    <textarea type="text" name="description" class="form-control form-description" id="contactDescription"
                              aria-describedby="validationServer03Feedback" required>
                    </textarea>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        Wprowadź treść.
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input is" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                    <label class="form-check-label" for="invalidCheck3">
                        Zapoznałem/am się z Polityką Prywatności oraz Klauzulą RODO.
                    </label>
                    <div  id="invalidCheck3Feedback" class="invalid-feedback">
                        Musisz zaakceptować warunki.
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Wyślij Formularz</button>
        </form>
    </div>
@endsection
