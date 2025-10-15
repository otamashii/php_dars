# Copilot Instructions for AI Agents

## Project Overview
- This is a Laravel-based web application (see `README.md`).
- Major directories:
  - `app/`: Application logic (Controllers, Models, Providers)
  - `routes/`: Route definitions (main: `web.php`)
  - `resources/views/`: Blade templates for UI
  - `database/`: Migrations, seeders, factories
  - `public/`: Entry point (`index.php`), static assets
  - `config/`: Application configuration

## Key Workflows
- **Development server:**
  - Start: `php artisan serve` (from project root)
- **Database migrations:**
  - Run: `php artisan migrate`
- **Testing:**
  - Run: `vendor\bin\pest` or `vendor\bin\phpunit`
- **Asset build:**
  - Use Vite: `npm run dev` (see `vite.config.js`)

## Project Conventions
- Controllers in `app/Http/Controllers/`, Models in `app/Models/`
- Blade views in `resources/views/` (e.g., `home.blade.php`, `jobs.blade.php`)
- Route definitions in `routes/web.php`
- Use Eloquent ORM for database access (see `User.php` model)
- Use factories for test data (`database/factories/`)
- Use Pest for tests (`tests/Pest.php`)

## Integration & Patterns
- Service providers in `app/Providers/` for app bootstrapping
- Configuration via `config/` files
- Static assets built to `public/build/` by Vite
- Environment variables in `.env` (not committed)

## Examples
- Add a new route: Edit `routes/web.php`
- Add a controller: Place in `app/Http/Controllers/`, register route
- Add a migration: `php artisan make:migration ...`, then migrate
- Add a Blade view: Place in `resources/views/`, reference in controller

## References
- See `README.md` for Laravel links and community resources
- For advanced usage, consult Laravel docs: https://laravel.com/docs

---
If you are unsure about a workflow or convention, check the relevant directory or the official Laravel documentation.