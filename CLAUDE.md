# CLAUDE.md — blestradio

## What this is

Landing page and interest intake for **Blest Radio** — a 24/7 human-hosted radio station for indie artists, aspiring radio hosts, and citizen journalists. Launching Spring 2027, initially broadcasting live from Raleigh, NC.

**Live site:** https://www.blestradio.com  
**Contact:** hello@blestradio.com

## Stack

- `index.php` — single-page site with PHP mail form (POST/redirect/GET pattern)
- `assets/css/style.css` — all styles, versioned via `?v=<?php echo time(); ?>`
- `assets/img/` — artist/feature imagery (genniefaye, laufey, taylor, lovin_arms, hacker)
- Fonts: Montserrat (700) + Roboto (400/700) from Google Fonts

## Site structure

| Section | ID | Purpose |
|---|---|---|
| Hero | — | Brand statement + two CTAs |
| Features | `#features` | 6 feature cards (artists, hosts, streaming, journalism, community, human-first) |
| About | `#about` | Mission statement + live-date callout |
| Intake form | — | Name/email/role (Artist, Host, Both) → PHP `mail()` → `hello@blestradio.com` |
| Footer | — | Copyright |

## Form flow

POST → `htmlspecialchars` sanitize → `mail()` → session flash → redirect to self → display alert → unset session. Standard PRG pattern. No database.

## Workflow

After making any changes, always commit and push to the current branch.

## Philosophy / voice

- Human creativity over AI-generated content — this is a core brand value, not just a tagline
- Warm, community-focused tone ("yappers", "Kitchen Table Podcaster", "Our worries are few when our Blessings are Many")
- Keep that voice intact when editing copy
