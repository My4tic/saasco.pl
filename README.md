# Saasco - Professional Software House

<p align="center">
  <strong>🚀 Tworzymy aplikacje, które napędzają Twój biznes</strong><br>
  <em>Building applications that drive your business</em>
</p>

<p align="center">
  <a href="#pl">🇵🇱 Polski</a> | <a href="#en">🇬🇧 English</a>
</p>

---

<div id="pl">

## 🇵🇱 O Projekcie

**Saasco** to profesjonalny software house specjalizujący się w tworzeniu aplikacji SaaS, systemów biznesowych oraz rozwiązań wykorzystujących AI. Nasza strona internetowa prezentuje kompleksową ofertę usług programistycznych skierowanych do firm i startupów.

### ✨ Kluczowe Funkcjonalności

- **Dwujęzyczność** - Pełne wsparcie dla języka polskiego i angielskiego
- **Portfolio projektów** - Prezentacja zrealizowanych wdrożeń z opisami technologii
- **Formularz kontaktowy** - Zintegrowany z powiadomieniami email i Slack
- **Responsywny design** - Optymalizacja dla wszystkich urządzeń
- **SEO Ready** - Pełna optymalizacja dla wyszukiwarek

### 🎯 Nasza Oferta

1. **Aplikacje SaaS** - Multi-tenant, systemy subskrypcji, panele administracyjne
2. **Aplikacje Biznesowe** - CRM, ERP-lite, platformy B2B dostosowane do branży
3. **MVP dla Startupów** - Szybkie prototypowanie w 4-8 tygodni
4. **Rozwiązania z AI** - Chatboty, systemy rekomendacji, analiza predykcyjna
5. **Integracje i Automatyzacje** - API, synchronizacja systemów, migracje danych
6. **Wsparcie i Rozwój** - Pakiety maintenance z gwarantowanym SLA

### 🛠️ Stack Technologiczny

- **Backend:** Laravel 12, PHP 8.2+
- **Frontend:** Livewire, Alpine.js, Tailwind CSS 4
- **Baza danych:** MySQL/PostgreSQL
- **Cache:** Redis
- **Bundler:** Vite
- **Testy:** Pest PHP

</div>

<div id="en">

## 🇬🇧 About Project

**Saasco** is a professional software house specializing in SaaS applications, business systems, and AI-powered solutions. Our website showcases comprehensive software development services for businesses and startups.

### ✨ Key Features

- **Bilingual Support** - Full support for Polish and English languages
- **Project Portfolio** - Showcase of completed implementations with tech stack descriptions
- **Contact Form** - Integrated with email and Slack notifications
- **Responsive Design** - Optimized for all devices
- **SEO Ready** - Fully optimized for search engines

### 🎯 Our Services

1. **SaaS Applications** - Multi-tenant, subscription systems, admin panels
2. **Business Applications** - CRM, ERP-lite, B2B platforms tailored to industry
3. **MVP for Startups** - Rapid prototyping in 4-8 weeks
4. **AI Solutions** - Chatbots, recommendation systems, predictive analytics
5. **Integrations & Automations** - APIs, system synchronization, data migrations
6. **Support & Development** - Maintenance packages with guaranteed SLA

### 🛠️ Technology Stack

- **Backend:** Laravel 12, PHP 8.2+
- **Frontend:** Livewire, Alpine.js, Tailwind CSS 4
- **Database:** MySQL/PostgreSQL
- **Cache:** Redis
- **Bundler:** Vite
- **Testing:** Pest PHP

</div>

---

## 🚀 Instalacja / Installation

### Wymagania / Requirements

- PHP >= 8.2
- Composer
- Node.js >= 18
- MySQL 8.0+ lub PostgreSQL 13+
- Redis (opcjonalnie / optional)

### Kroki instalacji / Installation Steps

```bash
# Klonowanie repozytorium / Clone repository
git clone https://github.com/saasco/saasco-website.git
cd saasco-website

# Instalacja zależności PHP / Install PHP dependencies
composer install

# Instalacja zależności Node / Install Node dependencies
npm install

# Konfiguracja środowiska / Environment setup
cp .env.example .env
php artisan key:generate

# Konfiguracja bazy danych / Database configuration
# Edytuj plik .env i ustaw dane dostępowe do bazy danych
# Edit .env file and set your database credentials

# Migracje bazy danych / Database migrations
php artisan migrate

# Seedowanie danych (opcjonalnie) / Seed data (optional)
php artisan db:seed

# Budowanie assetów / Build assets
npm run build

# Uruchomienie serwera deweloperskiego / Start development server
composer run dev
```

## 🧪 Testowanie / Testing

```bash
# Uruchomienie wszystkich testów / Run all tests
composer run test

# Uruchomienie konkretnego testu / Run specific test
php artisan test tests/Feature/ExampleTest.php

# Testy równoległe / Parallel testing
php artisan test --parallel
```

## 📦 Deployment

### Produkcja / Production

```bash
# Optymalizacja dla produkcji / Production optimization
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize

# Budowanie assetów produkcyjnych / Build production assets
npm run build
```

### Checklist przed wdrożeniem / Pre-deployment Checklist

- [ ] Wszystkie testy przechodzą / All tests pass
- [ ] Zmienne środowiskowe ustawione / Environment variables configured
- [ ] SSL certyfikat aktywny / SSL certificate active
- [ ] Email konfiguracja sprawdzona / Email configuration tested
- [ ] Google Analytics skonfigurowany / Google Analytics configured
- [ ] Backup bazy danych / Database backup
- [ ] Monitoring błędów (Sentry) / Error monitoring (Sentry)

## 📝 Struktura Projektu / Project Structure

```
saasco-website/
├── app/
│   ├── Http/
│   │   ├── Controllers/    # Kontrolery aplikacji / Application controllers
│   │   └── Middleware/      # Middleware (np. SetLocale)
│   ├── Mail/               # Klasy mailowe / Mail classes
│   ├── Models/             # Modele Eloquent / Eloquent models
│   └── Services/           # Serwisy biznesowe / Business services
├── resources/
│   ├── views/              # Widoki Blade / Blade views
│   │   ├── components/     # Komponenty wielokrotnego użytku / Reusable components
│   │   ├── layouts/        # Layouty aplikacji / Application layouts
│   │   └── sections/       # Sekcje strony głównej / Homepage sections
│   ├── lang/               # Pliki tłumaczeń / Translation files
│   │   ├── pl/            # Tłumaczenia polskie / Polish translations
│   │   └── en/            # Tłumaczenia angielskie / English translations
│   └── css/               # Pliki stylów / Style files
├── database/
│   ├── migrations/         # Migracje bazy danych / Database migrations
│   └── seeders/           # Seedery danych / Data seeders
├── tests/                  # Testy aplikacji / Application tests
└── public/                # Publiczne zasoby / Public assets
```

## 🤝 Współpraca / Contributing

Jesteśmy otwarci na sugestie i ulepszenia! / We're open to suggestions and improvements!

1. Fork repozytorium / Fork the repository
2. Stwórz branch (`git checkout -b feature/AmazingFeature`)
3. Commit zmiany (`git commit -m 'Add some AmazingFeature'`)
4. Push na branch (`git push origin feature/AmazingFeature`)
5. Otwórz Pull Request / Open a Pull Request

## 📄 Licencja / License

Ten projekt jest licencjonowany na warunkach licencji MIT. / This project is licensed under the MIT License.

## 📞 Kontakt / Contact

**Saasco Software House**
🌐 [saasco.pl](https://saasco.pl)
📧 kontakt@saasco.pl
💼 [LinkedIn](https://linkedin.com/company/saasco)
🐙 [GitHub](https://github.com/saasco)

---

<p align="center">
  <strong>Od koncepcji do wdrożenia w 4-8 tygodni</strong><br>
  <em>From concept to deployment in 4-8 weeks</em>
</p>
