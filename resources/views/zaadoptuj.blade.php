@extends('layouts.app')

@section('content')
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 align-items-center my-5">
        <div class="col-lg-12">
            <h1 class="text-center">Formularz Adopcyjny</h1>

            @if(session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
            @endif

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <p class="mt-4 text-center">Wypełnij poniższy formularz...</p>

            <form class="mt-5" id="formularzAdopcyjny" method="POST" action="{{ url('/zaadoptuj') }}">

                @csrf

                <div class="mb-3">
                    <label for="imieZwierzecia" class="form-label">Wybierz imię zwierzaka:</label>
                    <select class="form-select" id="imieZwierzecia" name="imieZwierzecia" required>
                        <option selected disabled value="">Wybierz...</option>
                        <option value="Dasza" {{ old('imieZwierzecia') == 'Dasza' ? 'selected' : '' }}>Dasza</option>
                        <option value="Simba" {{ old('imieZwierzecia') == 'Simba' ? 'selected' : '' }}>Simba</option>
                        <option value="Ruduś" {{ old('imieZwierzecia') == 'Rudus' ? 'selected' : '' }}>Ruduś</option>
                        <option value="Dobromir" {{ old('imieZwierzecia') == 'Dobromir' ? 'selected' : '' }}>Dobromir</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Czy posiadasz inne zwierzęta?</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="posiadaszInneZwierzeta" id="posiadaszInneZwierzetaTak" value="tak" required {{ old('posiadaszInneZwierzeta') == 'tak' ? 'checked' : '' }}>
                            <label class="form-check-label" for="posiadaszInneZwierzetaTak">Tak</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="posiadaszInneZwierzeta" id="posiadaszInneZwierzetaNie" value="nie" required {{ old('posiadaszInneZwierzeta') == 'nie' ? 'checked' : '' }}>
                            <label class="form-check-label" for="posiadaszInneZwierzetaNie">Nie</label>
                        </div>
                    </div>
                </div>

                <div id="rodzajInnychZwierzatSection" class="mb-3 collapse">
                    <label class="form-label">Jakie zwierzęta posiadasz?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="rodzajInnychZwierzat[]" id="zwierzeKot" value="kot">
                        <label class="form-check-label" for="zwierzeKot">Kota</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="rodzajInnychZwierzat[]" id="zwierzePies" value="pies">
                        <label class="form-check-label" for="zwierzePies">Psa</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="rodzajInnychZwierzat[]" id="zwierzeInne" value="inne">
                        <label class="form-check-label" for="zwierzeInne">Inne</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="emailAdres" class="form-label">Twój adres e-mail:</label>
                    <input type="email" class="form-control" id="emailAdres" name="emailAdres" value="{{ old('emailAdres') }}" required>
                </div>

                <div class="mb-3">
                    <label for="telefonNumer" class="form-label">Twój numer telefonu:</label>
                    <input type="tel" class="form-control" id="telefonNumer" name="telefonNumer" value="{{ old('telefonNumer') }}" required>
                </div>

                <div class="mb-3">
                    <label for="oSobie" class="form-label">Opowiedz nam o sobie:</label>
                    <textarea class="form-control" id="oSobie" name="oSobie" rows="6" required>{{ old('oSobie') }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Wyślij zgłoszenie</button>
            </form>

            <div class="mt-4" id="tabelaZgloszen">
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/adopcja.js') }}"></script>

@endsection
