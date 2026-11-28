# Project rules (read by Claude on every team member's computer)

Three sites live in this repo. All are hosted on one Hostinger account that also hosts OTHER live sites.

| Folder | Live address | Status |
|---|---|---|
| repo root (`index.html`, `thank-you.html`, `ajax/`) | civil.abilawfirm.in | Live, Google Ads |
| `tamilnadunrilegalservices-landing/` | https://landing.tamilnadunrilegalservices.com | **Live, Google Ads** |
| `tamilnadunrilegalservices-landing1/` | https://landing1.tamilnadunrilegalservices.com | Copy of the NRI page with optional free-text Country/Service. Leads: `~/nri-landing1-leads/` |
| `website-1/` | https://aerial-darkgreen-llama-59.hostingersite.com (staging for the new abilawfirm.in) | Not launched |

## Golden rules
**Auto-sync:** `.claude/settings.json` pulls the latest from GitHub automatically when a Claude session starts (fast-forward only: it never overwrites local work). Still commit and push when you finish.

1. **GitHub is the single source of truth.** Pull before you start; commit and push when you finish. Never edit files directly on the server: changes made only on Hostinger get overwritten by the next deploy.
2. **Before deploying a live site, compare it with the server** (the live copy may have changes not yet in GitHub). Deploy only the folder you changed.
3. **Never delete anything on Hostinger.** The deploy scripts only upload/overwrite.
4. **Keep the sites separate.** Working on one site must not change or redeploy another.
5. **Never change DNS nameservers.** abilawfirm.in and tamilnadunrilegalservices.com (main site + www) stay on **Wix**; only these A records point to Hostinger (93.127.208.106): `civil`, `crm`, `cases` (abilawfirm.in) and `landing` (tamilnadunrilegalservices.com).
6. **Never commit `.env`** (Hostinger SSH + DB passwords). Share it privately.
7. Don't send test enquiries through LIVE forms unless needed: they create real CRM leads. Label any test "TEST … (please delete)".

## Deploy
Mac/Linux: `./deploy.sh website-1` or `./deploy.sh tamilnadunrilegalservices-landing`
Windows: `powershell -ExecutionPolicy Bypass -File .\deploy.ps1 <same name>`
Hostinger blocks SSH for a few minutes after many logins in a row: wait and retry.
No local PHP: check syntax on the server with `php -l` over SSH.

## Enquiry forms
- Leads are always saved to a CSV outside the web root (`~/website-leads/`, `~/nri-leads/`), then pushed to the CRM API (`akngroups.in/api/add_lead_api.php`, live domains only).
- The CRM "Ad name" is a fixed dropdown: the value sent must match an option exactly, or it shows "Unknown". The NRI page sends `NRI`.
- Each site's settings (phone, Google Ads conversion codes, live domain) are in its `inc/config.php`.
