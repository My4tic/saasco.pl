# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

**Saasco** is a professional software house landing page built with Laravel 12. This is a bilingual (Polish/English) marketing website showcasing SaaS development services, portfolio projects, and client testimonials.

**Key Information:**
- Domain: saasco.pl
- Tagline (PL): "Tworzymy aplikacje, które napędzają Twój biznes"
- Tagline (EN): "Building applications that drive your business"
- Target: Professional software house positioning for SaaS and business applications

## Technology Stack

**Backend:**
- Laravel 12 (PHP 8.2+)
- MySQL/PostgreSQL for database
- Redis for caching and queues

**Frontend:**
- Livewire for interactivity
- Alpine.js for lightweight JavaScript
- Tailwind CSS 4 for styling
- Vite for asset bundling

**Testing:**
- Pest PHP (preferred over PHPUnit)
- Feature and Unit tests

## Development Commands

### Initial Setup
```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed
npm run build
```

### Development Server
```bash
# Start all services (server, queue worker, Vite)
composer run dev
# This runs: php artisan serve + php artisan queue:listen + npm run dev concurrently
```

### Testing
```bash
# Run all tests
composer run test
# This clears config cache and runs: php artisan test

# Run specific test file
php artisan test tests/Feature/ExampleTest.php

# Run tests in parallel
php artisan test --parallel
```

### Code Quality
```bash
# Format code (Laravel Pint)
./vendor/bin/pint

# Static analysis
php artisan test --coverage
```

### Asset Building
```bash
# Development (watch mode)
npm run dev

# Production build
npm run build
```

### Production Optimization
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize
```

## Project Architecture

### Bilingual Support
The application supports Polish (pl) and English (en) locales. Language handling is implemented through:
- Middleware: `App\Http\Middleware\SetLocale` - handles locale switching
- Routes: `/{locale}` pattern with `pl|en` constraint
- Translations: `resources/lang/{locale}/` directory structure
- Session-based locale persistence

### Route Structure
```php
// From routes/web.php
Route::get('/', function () {
    return view('welcome');
});

// Expected bilingual routes (from prompt.md):
Route::get('/{locale}', [HomeController::class, 'index'])->where('locale', 'pl|en');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/portfolio/{slug}', [PortfolioController::class, 'show'])->name('portfolio.show');
```

### Service Offerings (from prompt.md)
The landing page showcases 6 main service categories:
1. **SaaS Applications** - Multi-tenant systems with subscription billing
2. **Business Applications** - Custom CRM/ERP systems
3. **MVP for Startups** - Rapid prototyping (4-8 weeks)
4. **AI Solutions** - Chatbots, recommendation systems, predictive analytics
5. **Integrations & Automations** - API integrations, data migrations
6. **Support & Development** - Maintenance packages with SLA

### Portfolio Projects
The site features 4 case studies (from prompt.md):
- CloudInvoice - SaaS invoicing platform
- MediCRM - Clinic management system
- SmartSupport - AI customer service chatbot
- B2B Portal - Wholesale ordering platform

Each case includes: challenge, solution, results, timeline, and tech stack.

### Landing Page Structure
Expected sections (from prompt.md):
1. Hero Section - Value proposition, CTA, stats counters
2. Services - 6 service cards with icons
3. Portfolio - 4 featured projects with hover effects
4. Process - 5-step timeline (Discovery, Design, Development, Testing, Deployment)
5. Technologies - Logo grid by category
6. Pricing - 3 tiers (Essential, Professional, Enterprise)
7. FAQ - Accordion with 8-10 questions
8. Testimonials - Client references
9. Contact - Form with email/Slack notifications

### Contact Form Integration
Expected implementation (from prompt.md):
- Validation with reCAPTCHA
- Email notifications via Laravel Mail
- Slack webhook notifications
- Database storage in `contact_submissions` table
- Fields: name, email, company, phone, budget, message

### SEO & Meta Tags
The application includes:
- Multi-language meta tags (Open Graph, Twitter Cards)
- Schema.org structured data for Organization
- Canonical URLs and hreflang alternates
- Google Analytics 4 integration
- Cookie consent handling

## Development Guidelines

### File Organization
```
app/
├── Http/
│   ├── Controllers/     # Web controllers
│   └── Middleware/      # SetLocale for language switching
├── Mail/               # Email classes (ContactFormMail)
├── Models/             # Eloquent models
└── Services/           # Business logic (PortfolioService)

resources/
├── views/
│   ├── layouts/        # Base layouts (app.blade.php)
│   ├── sections/       # Homepage sections
│   ├── components/     # Reusable Blade components
│   └── partials/       # Shared partials
├── lang/
│   ├── pl/            # Polish translations
│   └── en/            # English translations
└── css/               # Styles with Tailwind

database/
├── migrations/         # Database schema
└── seeders/           # Data seeding (PortfolioSeeder)
```

### Component Patterns
- Use Blade components for reusable UI elements (service-card, portfolio-card)
- Props pattern: `@props(['service'])` for component parameters
- Utility-first CSS with Tailwind classes
- Alpine.js for simple interactions (accordions, modals)

### Testing Approach
- Feature tests for HTTP endpoints and forms
- Unit tests for services and utilities
- Use Pest syntax (preferred): `it()`, `test()`, `expect()`
- Database: SQLite in-memory for tests (configured in phpunit.xml)

### Deployment Checklist (from prompt.md)
Before production:
- All translations complete (pl/en)
- Tests passing
- Contact form working with reCAPTCHA
- Email and Slack notifications configured
- SSL certificate active
- Caching enabled (config, route, view, optimize)
- Debug mode disabled
- Performance: Lighthouse score > 90, TTFB < 200ms

## Important Notes

### Design Implementation
The project uses a purchased HTML/CSS template (mentioned in prompt.md). When implementing:
- Maintain responsive design for all devices
- Follow the existing visual style
- Ensure accessibility standards
- Optimize images (WebP format preferred)

### Security Considerations
- CSRF protection on all forms
- Rate limiting on contact form
- Input validation and sanitization
- reCAPTCHA for spam prevention
- Environment variables for sensitive data

### Performance Optimization
- Lazy loading for images and components
- Critical CSS inline
- Redis caching for frequently accessed data
- Queue jobs for email sending
- CDN for static assets (recommended)

## Current Implementation Status

### Completed Components
✅ Main layout with SEO meta tags (`layouts/app.blade.php`)
✅ Navigation with dark mode & language switcher (`components/navigation.blade.php`)
✅ Hero section with gradient animations (`components/hero.blade.php`)
✅ Services section - 6 cards (`components/services.blade.php`)
✅ Portfolio showcase - 4 case studies (`components/portfolio.blade.php`)
✅ Process timeline (`components/process.blade.php`)
✅ Footer (`components/footer.blade.php`)
✅ Contact form in main page (`home.blade.php`)
✅ Complete PL/EN translations
✅ Middleware: SetLocale
✅ Controllers: HomeController, ContactController
✅ Routes with locale support
✅ Alpine.js integration
✅ Tailwind custom theme with NextSaaS-inspired gradients

### Tech Implementation
- **Dark Mode**: Alpine.js with localStorage persistence
- **Language Switching**: Session-based, PL/EN support
- **Gradients**: Custom utilities (bg-gradient-hero, text-gradient, animate-gradient)
- **Animations**: Blob animations, gradient shifts, hover effects
- **Responsive**: Mobile-first with breakpoints

### Color System
- Primary: Blue-purple gradient (oklch format)
- Accent: Purple-pink gradient
- Custom utilities: `.bg-gradient-hero`, `.bg-gradient-card`, `.text-gradient`, `.glass`

## Quick Reference

### Development Commands
```bash
# Start development
composer run dev              # Runs server + queue + vite

# Build assets
npm run build                 # Production build
npm run dev                   # Development watch

# Testing
composer run test             # Run all tests
php artisan test --parallel   # Parallel testing
```

### Update Translations
```bash
# Edit resources/lang/{locale}/*.php
php artisan cache:clear
php artisan view:clear
```

### Common Artisan Commands
```bash
php artisan serve              # Start dev server
php artisan queue:listen       # Start queue worker
php artisan migrate:fresh      # Fresh database
php artisan db:seed           # Seed data
```

### Vite Asset Management
- Development: `npm run dev` (hot reload)
- Production: `npm run build` (minified)
- Entry points: `resources/css/app.css`, `resources/js/app.js`

### Next Steps / TODOs
- [ ] Implement email sending in ContactController (configure Mail)
- [ ] Add Slack notification integration
- [ ] Create database migration for contact_submissions table
- [ ] Add reCAPTCHA to contact form
- [ ] Optimize images (add WebP format)
- [ ] Set up Google Analytics
- [ ] Configure error monitoring (Sentry)
- [ ] Add FAQ accordion component (if needed)
- [ ] Add testimonials section (if needed)
