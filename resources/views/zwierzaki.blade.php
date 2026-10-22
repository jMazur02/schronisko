@extends('layouts.app')

@section('content')
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 align-items-center my-5">
        <div class="col-lg-12">
            <h1 class="text-center">Poznaj nasze zwierzaki!</h1>
            <p class="mt-4 text-center">Przesuwaj, aby zobaczyć zwierzęta, które czekają na nowy dom.</p>

            @if($zwierzaki->count() > 0)
            <div id="petCarousel" class="carousel slide" data-bs-ride="false">

                <div class="carousel-indicators">
                    @foreach($zwierzaki as $index => $pet)
                    <button type="button" 
                            data-bs-target="#petCarousel" 
                            data-bs-slide-to="{{ $index }}" 
                            class="{{ $loop->first ? 'active' : '' }}" 
                            aria-current="{{ $loop->first ? 'true' : 'false' }}" 
                            aria-label="Slide {{ $index + 1 }}">
                    </button>
                    @endforeach
                </div>

                <div class="carousel-inner">
                    @foreach($zwierzaki as $pet)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <img src="{{ asset('zdjecia/' . $pet->zdjecie) }}" class="d-block w-100" alt="{{ $pet->imie }}">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="imieZwierzecia">{{ $pet->imie }}</h5>
                            <p class="opisZwierzecia">{{ $pet->opis }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#petCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#petCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            @else
            <div class="alert alert-info text-center">
                Obecnie nie mamy zwierzaków do adopcji. Sprawdź później!
            </div>
            @endif
        </div>
    </div>
</div>
@endsection