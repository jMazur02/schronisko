@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-12">
            {{-- Wyświetlamy imię zalogowanego --}}
            <div class="alert alert-success">
                Witaj, <strong>{{ Auth::user()->name }}</strong>! Jesteś zalogowany w panelu pracownika.
                <form action="{{ url('/logout') }}" method="POST" class="d-inline float-end">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-danger">Wyloguj</button>
                </form>
            </div>

            <h2 class="mt-4">Zgłoszenia Adopcyjne</h2>

            <table class="table table-striped table-hover mt-3">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Zwierzak</th>
                        <th>Osoba</th>
                        <th>Email / Telefon</th>
                        <th>Status</th>
                        <th>Akcja</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($zgloszenia as $zgloszenie)
                    <tr>
                        <td>{{ $zgloszenie->id }}</td>
                        <td><strong>{{ $zgloszenie->imie_zwierzecia }}</strong></td>
                        <td>{{ $zgloszenie->o_sobie }}</td>
                        <td>
                            {{ $zgloszenie->email }}<br>
                            {{ $zgloszenie->telefon }}
                        </td>
                        <td>
                            @if($zgloszenie->status == 'oczekuje')
                            <span class="badge bg-warning text-dark">Oczekuje</span>
                            @elseif($zgloszenie->status == 'zaakceptowany')
                            <span class="badge bg-success">Zaakceptowany</span>
                            @else
                            <span class="badge bg-danger">Odrzucony</span>
                            @endif
                        </td>
                        <td>
                            <div class="d-flex gap-2">

                                <form action="{{ url('/panel/status/'.$zgloszenie->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="status" value="zaakceptowany">
                                    <button class="btn btn-success btn-sm">Akceptuj</button>
                                </form>

                                <form action="{{ url('/panel/status/'.$zgloszenie->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="status" value="odrzucony">
                                    <button class="btn btn-danger btn-sm">Odrzuć</button>
                                </form>

                                <form action="{{ url('/panel/delete/'.$zgloszenie->id) }}" method="POST" onsubmit="return confirm('Czy na pewno chcesz usunąć to zgłoszenie?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-dark btn-sm">Usuń</button>
                                </form> 
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection 
