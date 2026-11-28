# ABI Law Firm Websites

Two websites in one repo, both hosted on Hostinger.

| Folder | Hostinger temporary domain | Real domain |
|---|---|---|
| `website-1/` | https://aerial-darkgreen-llama-59.hostingersite.com | **abilawfirm.in** (new main website; still on Wix until launch) |
| `tamilnadunrilegalservices-landing/` | _(temporary domain replaced)_ | **https://landing.tamilnadunrilegalservices.com**: Tamil Nadu NRI Legal Services landing page. The main domain and www stay on **Wix**; only the `landing` A record (93.127.208.106) points to Hostinger. Server folder: `domains/tamilnadunrilegalservices.com/public_html/landing` |

**website-1 = the new abilawfirm.in.** See [website-1/README.md](website-1/README.md) for how it is built and the launch checklist.

`tamilnadunrilegalservices-landing/` is the **Tamil Nadu NRI Legal Services landing page**
(https://landing.tamilnadunrilegalservices.com). Live on Hostinger at
`domains/tamilnadunrilegalservices.com/public_html/landing`. Settings (phone, Google Ads
conversion codes, etc.) are in `inc/config.php`.
**This page is LIVE and used by Google Ads.** Test changes carefully before deploying.

`tamilnadunrilegalservices-landing1/` is a **copy** of that page for
https://landing1.tamilnadunrilegalservices.com, with optional free-text Country and Service
fields. Server folder: `domains/tamilnadunrilegalservices.com/public_html/landing1`.
Deploy with `./deploy.sh tamilnadunrilegalservices-landing1`. Its canonical URL points to the
original page so search engines don't treat it as duplicate content.

The files at the repo root (`index.html`, `thank-you.html`, `ajax/contact-enquiry.php`)
are the temporary **civil lawyers landing page** (civil.abilawfirm.in).

## Setup (for collaborators)

1. Clone the repo:
   ```
   git clone https://github.com/nripropertyinvestmenttamilnadu-ui/abilawfirm_websites.git
   ```
2. Get the `.env` file privately from the team and put it in the repo root.
   `.env` is in `.gitignore` - **never commit it**. See `.env.example` for the keys.
3. Edit files inside `website-1/` or `tamilnadunrilegalservices-landing/`, then commit and push.

## Deploy

Each folder is uploaded to its own Hostinger site's `public_html` over SSH
(details in `.env`). Deploy only the folder you changed:

```
powershell -ExecutionPolicy Bypass -File .\deploy.ps1 website-1
powershell -ExecutionPolicy Bypass -File .\deploy.ps1 tamilnadunrilegalservices-landing
```

On Mac / Linux:

```
./deploy.sh website-1
./deploy.sh tamilnadunrilegalservices-landing
```

The script only uploads/overwrites files - it never deletes anything on Hostinger.
If you don't have the deploy SSH key, it asks for the SSH password from `.env`.

**Rule: never delete anything on Hostinger** - the account hosts other live sites.
