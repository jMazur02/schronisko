# 🐾 Schronisko – Aplikacja webowa do zarządzania schroniskiem dla zwierząt

Aplikacja webowa stworzona w **Laravel 12** (PHP 8.2+), umożliwiająca przeglądanie zwierząt dostępnych do adopcji, składanie wniosków adopcyjnych oraz zarządzanie zgłoszeniami przez panel administracyjny.

## Funkcjonalności

- **Strona główna** – prezentacja schroniska
- **Lista zwierząt** – przeglądanie podopiecznych schroniska (imię, opis, zdjęcie)
- **Formularz adopcyjny** – składanie wniosków z walidacją danych (e-mail, telefon, opis)
- **Panel administracyjny** – logowanie, przeglądanie zgłoszeń, zmiana statusu adopcji, usuwanie wniosków
- **Strony informacyjne** – „O nas" i „Kontakt"

## Stos technologiczny

| Warstwa       | Technologia              |
|---------------|--------------------------|
| Backend       | PHP 8.2, Laravel 12      |
| Frontend      | Blade, Vite              |
| Baza danych   | MySQL                    |
| Testy         | PHPUnit                  |

## Wymagania

- PHP >= 8.2
- Composer
- Node.js + npm
- MySQL

## Instalacja

```bash
# Klonowanie repozytorium
git clone https://github.com/TWOJ-USERNAME/schronisko.git
cd schronisko

# Instalacja zależności
composer install
npm install

# Konfiguracja środowiska
cp .env.example .env
php artisan key:generate

# Konfiguracja bazy danych – edytuj .env i ustaw dane połączenia MySQL:
# DB_DATABASE=projekt
# DB_USERNAME=root
# DB_PASSWORD=

# Migracja bazy danych
php artisan migrate

# Budowanie assetów frontendowych
npm run build

# Uruchomienie serwera deweloperskiego
php artisan serve
```

Aplikacja będzie dostępna pod adresem `http://localhost:8000`.

## Struktura projektu

```
app/
├── Http/Controllers/
│   ├── AdoptionController.php   # Obsługa formularza adopcyjnego
│   ├── DashboardController.php  # Panel administracyjny
│   ├── LoginController.php      # Logowanie / wylogowanie
│   └── PetController.php        # Lista zwierząt
├── Models/
│   ├── Adoption.php             # Model wniosku adopcyjnego
│   ├── Pet.php                  # Model zwierzęcia
│   └── User.php                 # Model użytkownika (admin)
resources/views/
├── layouts/app.blade.php        # Główny layout
├── index.blade.php              # Strona główna
├── zwierzaki.blade.php          # Lista zwierząt
├── zaadoptuj.blade.php          # Formularz adopcyjny
├── panel.blade.php              # Panel admina
├── onas.blade.php               # O nas
└── kontakt.blade.php            # Kontakt
```

## Autor

**Jakub Mazur**

## Licencja

Projekt udostępniony na licencji MIT.
