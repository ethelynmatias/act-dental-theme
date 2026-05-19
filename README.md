# ACT Dental Theme

A Laravel 11 project showcasing **4 homepage design samples** for a dental practice website. Each version clones the layout and CSS structure of a real-world template but uses ACT Dental content throughout.

---

## Requirements

| Tool | Version |
|------|---------|
| PHP | >= 8.2 (tested on 8.4) |
| Composer | >= 2.x |
| Node.js | >= 18.x |
| NPM | >= 9.x |

---

## Quick Start

### 1. Clone the repo

```bash
git clone <repository-url>
cd act-dental-theme
```

### 2. Install dependencies

```bash
composer install
npm install
```

### 3. Set up environment

```bash
cp .env.example .env
php artisan key:generate
```

> The project uses **SQLite** by default — no database server required.

### 4. Run migrations

```bash
php artisan migrate
```

### 5. Start the dev server

```bash
php artisan serve
```

The app will be available at **http://localhost:8000**

---

## Homepage Samples

Once the server is running, open each URL to compare the 4 design versions:

| URL | Template Style | Inspired By |
|-----|---------------|-------------|
| `http://localhost:8000/v1/home` | Clean, white SaaS / card grid | [clean.pro](https://www.clean.pro) |
| `http://localhost:8000/v2/home` | Bold hero, dark/light alternating sections | [sprocketrocket.co](https://www.sprocketrocket.co) |
| `http://localhost:8000/v3/home` | Dark hero, purple gradients, uppercase bold | [maka-agency.com/power-theme](https://www.maka-agency.com/power-theme) |
| `http://localhost:8000/v4/home` | Teal, clean modular, professional trust-focused | [demo.neambo.com/act3](https://demo.neambo.com/act3) |

---

## Project Structure

```
resources/
  views/
    layouts/
      layout.blade.php        # Master layout (nav + footer + shared CSS)
    components/
      nav.blade.php           # Shared sticky navigation with dropdowns
      footer.blade.php        # Shared dark footer
    v1/home.blade.php         # Version 1 homepage
    v2/home.blade.php         # Version 2 homepage
    v3/home.blade.php         # Version 3 homepage
    v4/home.blade.php         # Version 4 homepage

public/
  css/
    shared.css                # Global styles: nav, footer, buttons, utilities
    v1.css                    # V1 template-specific styles
    v2.css                    # V2 template-specific styles
    v3.css                    # V3 template-specific styles
    v4.css                    # V4 template-specific styles

routes/
  web.php                     # All page routes
```

---

## Architecture Notes

- **Shared layout** — All 4 versions extend `layouts/layout.blade.php` and include the same nav and footer components.
- **CSS overrides** — `shared.css` defines base CSS variables (colors, fonts, spacing). Each `v*.css` file overrides `:root` variables to apply that template's palette.
- **No build step needed** — All CSS is plain CSS served from `public/css/`. No Vite compilation is required to view the pages.
- **SQLite database** — No MySQL/Postgres setup needed. The `.sqlite` file is created automatically on migrate.

---

## Development Tips

```bash
# Tail Laravel logs
tail -f storage/logs/laravel.log

# Clear all caches if views aren't updating
php artisan cache:clear && php artisan view:clear

# List all registered routes
php artisan route:list
```

---

## Built With

- [Laravel 11](https://laravel.com) — PHP framework
- Plain CSS (no Tailwind, no preprocessors) — for easy template cloning
- [Font Awesome 6](https://fontawesome.com) — icons
- [Google Fonts](https://fonts.google.com) — Inter + Playfair Display
