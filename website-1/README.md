# website-1: new abilawfirm.in

The new main website for ABI Law Firm. It uses the same design as the Google Ads landing pages
(landing.abilawfirm.in / civil.abilawfirm.in), with content taken from the old Wix site and improved.

- **Staging (temporary domain):** https://aerial-darkgreen-llama-59.hostingersite.com
- **Live:** https://www.abilawfirm.in (still on Wix until launch; do not touch the Wix site)

## How it is built

Plain PHP (no build step, no database). Shared parts live in `inc/`, so a change there updates every page.

| Path | What it is |
|---|---|
| `inc/config.php` | Phone, email, address, Google Analytics / Ads IDs. **Change contact details here.** |
| `inc/data.php` | List of practice areas, articles, testimonials, team, form options. Menu, footer, sitemap and cards are generated from it. |
| `inc/header.php`, `inc/footer.php` | Top bar, menu, footer, popup form, mobile Call/WhatsApp bar |
| `inc/ui.php` | Reusable blocks (form, FAQ, steps, page templates) |
| `index.php`, `about.php`, `contact.php` | Main pages |
| `practice-areas/*.php` | 16 practice-area pages + `index.php` hub |
| `insights/*.php` | Legal Insights articles + `index.php` |
| `ajax/contact-enquiry.php` | Enquiry form handler |
| `.htaccess` | Clean URLs, HTTPS, caching, **301 redirects from every old Wix URL** |
| `robots.php`, `sitemap.php` | Served as `/robots.txt` and `/sitemap.xml` |

To add a practice area or article: add it to `inc/data.php`, then copy an existing page file and change the content.

## Staging vs live (automatic)

The site detects the domain it is running on (`IS_LIVE` in `inc/config.php`):

| | Temporary domain | abilawfirm.in |
|---|---|---|
| Google indexing | blocked (`noindex` + robots) | allowed, sitemap published |
| Google Analytics / Ads tags | off | on (GA4 `G-XH87TS7VQ3`, the existing Wix property) |
| Enquiries | saved to `~/website-leads/leads.csv` marked `TEST`, **not** sent to the CRM | saved to CSV **and** pushed to the CRM |

Nothing needs to be changed by hand at launch for these.

## Enquiries

Every enquiry is saved to `~/website-leads/leads.csv` on the server (outside `public_html`, not web-accessible),
then pushed to the CRM (`akngroups.in`) with source `Website` and the selected service.
Failed CRM pushes are logged in `~/website-leads/api-errors.log`.

## Launch checklist (when the site is approved)

1. **Review content**: practice-area pages and articles were rewritten; an advocate should review them for legal accuracy.
2. **Hostinger**: abilawfirm.in already has a folder on this Hostinger account (`domains/abilawfirm.in/public_html`)
   containing an unused WordPress install plus the `civil/`, `cases/` and `crm/` folders, and its own `.htaccess`.
   Copying this site there needs a careful merge (keep those folders; merge `.htaccess`). Plan this step together, never delete.
3. **DNS**: point the abilawfirm.in and www A/CNAME records from Wix to Hostinger. **Keep the MX (email) records unchanged.**
   Lower the DNS TTL a day before to make the switch quick.
4. In `.htaccess`, uncomment the two "LAUNCH" lines (redirect abilawfirm.in → www.abilawfirm.in).
5. After DNS switches: test pages, the form, and old Wix URLs (they 301 to the new pages). Submit `https://www.abilawfirm.in/sitemap.xml` in Google Search Console.
6. Google Ads: create a "Submit lead form" conversion and paste its ID in `thank-you.php`.
7. Only then cancel the Wix plan (keep the domain registration and email running).
