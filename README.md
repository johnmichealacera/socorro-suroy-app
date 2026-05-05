# E-SUROY Socorro

A **tourism and community** web experience for **Socorro, Surigao del Norte** (Bucas Grande)—showcasing **destinations, local food, barangay information, and travel context**. The project was built as a **capstone**; this repository keeps that purpose while bringing the **UI, structure, and deployment story** up to a **portfolio-ready** level.

**Live site:** [soroy-sa-socorro.vercel.app](https://soroy-sa-socorro.vercel.app/)

---

## Overview

**E-SUROY** (roughly “go walk around” in Visayan) presents Socorro as a place to explore: curated spot pages, delicacies, barangay directory-style content, and practical notes for visitors. The implementation is intentionally **lightweight**: server-rendered PHP includes, Bootstrap 4, SCSS-themed Bootstrap, and small JavaScript enhancements—no heavy SPA framework.

---

## Features

| Area | What visitors get |
|------|-------------------|
| **Home** | Hero carousel, map embed, and a grid of featured destinations. |
| **Tourist spots** | Many dedicated pages (resorts, falls, peaks, etc.) with imagery and narrative copy. |
| **Delicacies** | Local food culture and highlights. |
| **Barangays** | Community-oriented pages and references aligned with the capstone scope. |
| **Guide / About** | Travel framing and project context (original coursework scope preserved). |
| **Contact** | Client-side validation with a PHP mail endpoint (see **Deployment notes**). |

---

## Architecture

```
socorro-suroy-app/
├── index.php, about.php, guide.php, …   # Page shells (includes)
├── head.php, navbar.php, topbar.php       # Shared layout
├── footer.html                            # Shared footer fragment
├── inc/site-config.php                    # Site URL, meta defaults, mail recipient
├── mail/
│   ├── contact-us.php                     # POST handler for the contact form
│   └── contact.js                         # AJAX + validation wiring
├── css/style.css                          # Compiled Bootstrap + theme (from scss/)
├── css/portfolio-polish.css               # Incremental polish layer (non-invasive)
├── scss/style.scss                      # Source theme ($primary, imports Bootstrap SCSS)
├── js/main.js                           # Carousel, back-to-top, pickers, Owl
└── img/                                 # Photography and assets
```

**Design choice:** New styling and behavior are layered (`portfolio-polish.css`, tighter nav/footer) instead of regenerating the full Bootstrap build, so the **existing compiled `css/style.css` stays the source of truth** until you choose to recompile SCSS.

---

## Screenshots

Add your own captures here when you refresh the design.

| Area | Placeholder |
|------|-------------|
| Home hero | `docs/screenshots/home-hero.png` |
| Destinations grid | `docs/screenshots/destinations.png` |
| Mobile nav | `docs/screenshots/mobile-nav.png` |

*(Create a `docs/screenshots/` folder and drop PNGs in; linking them in the README is optional.)*

---

## Local setup

**Requirements:** PHP 7.4+ (for `mail()` and syntax used in the contact handler), a web server or PHP’s built-in server, and optionally Sass if you recompile `scss/style.scss`.

```bash
git clone <your-repo-url>
cd socorro-suroy-app
php -S localhost:8080
```

Open `http://localhost:8080`.

**Optional local overrides:** Copy `site-config.local.php.example` to `site-config.local.php` (gitignored) and adjust `site_url` or `contact_form_to`.

---

## Deployment

**Vercel (current live URL):** The project is configured for static-friendly hosting; `vercel.json` adds conservative security headers.

**Important:** Many static or edge hosts **do not execute PHP** or **do not support `mail()`**. If the contact form returns errors in production, either:

- Host on a stack that runs PHP and supports outbound mail (traditional shared hosting, VPS, etc.), or  
- Replace the POST target with a **form backend** (Formspree, Getform, etc.) and point `mail/contact.js` at that endpoint—without changing the rest of the site.

**After changing domain:** Set `SOCORRO_SITE_URL` and verify Open Graph tags in `head.php` (populated from `inc/site-config.php`).

---

## Environment variables

| Variable | Purpose |
|----------|---------|
| `SOCORRO_SITE_URL` | Canonical site URL (meta `og:url`, mail `From` host derivation). |
| `SOCORRO_CONTACT_EMAIL` | Inbox for contact form submissions via `mail/contact-us.php`. |

On platforms that inject env vars at runtime, define these in the project dashboard. Locally, prefer `site-config.local.php` if you do not use env vars.

---

## Tech stack

- **Markup & includes:** PHP  
- **UI:** Bootstrap 4, custom SCSS variables + compiled CSS  
- **Scripts:** jQuery, Bootstrap JS, Owl Carousel, Tempus Dominus (legacy booking widgets on some pages), easing  
- **Fonts / icons:** Google Fonts (Poppins), Font Awesome 5  
- **Deployment:** Vercel (`vercel.json` headers)

---

## Lessons learned

- **Template debt:** Starting from a quality HTML template accelerates delivery but leaves **placeholder SEO, duplicate footer columns, and empty social links**—budget time to **rebrand and simplify**.  
- **Contact forms:** End-to-end mail requires a **working server and mail transport**, not only front-end validation; failing silently in production is common without an explicit backend strategy.  
- **Incremental polish:** A **small CSS layer + config centralization** upgrades perceived quality without a risky full rewrite—aligned with solo-maintainer reality.

---

## Roadmap

Reasonable next steps (pick based on time):

1. Recompile `scss/style.scss` after theme tweaks and commit updated `css/style.css`.  
2. Replace placeholder **booking** widgets on About with real CTAs or remove unused scripts on pages that do not need pickers.  
3. Add **responsive images** (`srcset`) for large photography.  
4. Swap contact POST to a **hosted form API** if PHP mail is unavailable.  
5. Optional **dark mode**: scope to `prefers-color-scheme` on footer/nav only before touching every component.

---

## Acknowledgements

- **Socorro Tourism Office** and the community the site describes.  
- **HTML Codex** template lineage (credited in the footer; customized for this project).  
- **Original capstone author:** John Micheal Acera — [Portfolio](https://johnmichealacera.vercel.app) · [GitHub](https://github.com/johnmichealacera).

---

## License

This project is licensed under the [MIT License](LICENSE.txt).
