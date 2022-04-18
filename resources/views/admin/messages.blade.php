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
    @forelse($messages as $message)
        <div class="card text-center mb-4 messageBox">
            <form action="{{ route('delete.message', ['message' => $message]) }}" method="post">
                @csrf
                @method('delete')
                <button class="fas fa-trash-alt deleteMessage"
                        onclick="return confirm('Czy na pewno chcesz usunąć tą wiadomość?');"></button>
            </form>
            <div class="card-header">
                Wiadomość z dnia:  <span class="ml-2 font-weight-bold">
                    {{ $message->post_date }}
                </span>
                <span class="ml-1">od
                <span class="ml-1 font-weight-bold">
                    {{ ucfirst($message->firstname) }} {{ ucfirst($message->lastname) }} ({{ $message->email }})
                </span>
            </div>
            <div class="card-body">
                <h5 class="mb-4 font-italic">Temat:
                    <span class="ml-2 subject">{{ $message->topic }}</span>
                </h5>
                <h5 class="font-weight-light font-italic">Treść wiadomości: </h5>
                <p class="card-text">{{ $message->description }}</p>
            </div>
            <div class="card-footer text-muted">
            </div>
        </div>
        @empty
        <h1 class="text-center">Brak wiadomości w skrzynce.</h1>
    @endforelse
    @endsection
@section('custom js')
    <script src="{{ asset('js/removeFooter.js') }}">
    </script>
@endsection
