@extends('layouts.app')

@section('content')
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 align-items-center my-5">
        <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('zdjecia/okladka.jpg') }}" alt="..." ></div>
        <div class="col-lg-5">
            <h1>Daj zwierzakom drugą szanse!</h1>
            <p>Twój Pupil! to miejsce, gdzie każdy czworonożny przyjaciel czeka na swoją drugą szansę. Daj dom, daj serce – zyskaj wiernego towarzysza na całe życie. Razem możemy zmieniać losy zwierząt!</p>
            <a class="btn btn-primary" href="{{ url('/zaadoptuj') }}">Zaadoptuj!</a>
        </div>
    </div>
    </div>
@endsection
