
@extends('layouts.app')

@section('content')
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center my-5">
        <div class="col-lg-8">
            <h1 class="text-center mb-4 display-4">Skontaktuj się z nami!</h1>
            <p class="lead text-center mb-5">
                Jesteśmy tu, aby pomóc! Masz pytania dotyczące adopcji, wolontariatu, czy wsparcia? Nie wahaj się skontaktować!
            </p>

            <div class="card text-center mb-5">
                <div class="card-header bg-dark text-white">
                    <h3>Dane kontaktowe</h3>
                </div>
                <div class="card-body contact-info">
                    <p><strong>Adres:</strong> ul. Nadbystrzycka 38A, 20-618, Lublin</p>
                    <p><strong>Telefon:</strong> <a href="tel:+48123456789">+48 123 456 789</a></p>
                    <p><strong>E-mail:</strong> <a href="mailto:kontakt@twojpupil.pl">kontakt@twojpupil.pl</a></p>
                    <p><strong>Właściciel:</strong> Jan Kowalski</p>
                </div>
            </div>

            <h2 class="text-center mb-4">Znajdź nas na mapie</h2>
            <div class="map-container mb-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2498.041551645208!2d22.546104476866095!3d51.236729630440294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47225770b9a31aad%3A0xc922847d25769e8d!2sNadbystrzycka%2038A%2C%2020-618%20Lublin!5e0!3m2!1spl!2spl!4v1749929413209!5m2!1spl!2spl" width="600" height="450" style="border:0;" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>
@endsection