# ABI Law Firm Websites

Two websites in one repo, both hosted on Hostinger.

| Folder | Hostinger temporary domain | Real domain |
|---|---|---|
| `website-1/` | https://aerial-darkgreen-llama-59.hostingersite.com | _TBD (connect later)_ |
| `website-2/` | https://active-darkgray-beaver-99.hostingersite.com | _TBD (connect later)_ |

The files at the repo root (`index.html`, `thank-you.html`, `ajax/contact-enquiry.php`)
are the temporary **civil lawyers landing page** (civil.abilawfirm.in).

- **Campaign:** this page is the landing page for the Google Ads campaign **General – Chennai**.
  All ads in that campaign point to https://civil.abilawfirm.in
- Leads are sent to the CRM with source `Google Ads` and ad name `General`.
- Live on Hostinger at `domains/abilawfirm.in/public_html/civil` (Google Tag Manager `GTM-TW32B6JJ` installed).

## Setup (for collaborators)

1. Clone the repo:
   ```
   git clone https://github.com/nripropertyinvestmenttamilnadu-ui/abilawfirm_websites.git
   ```
2. Get the `.env` file privately from the team and put it in the repo root.
   `.env` is in `.gitignore` - **never commit it**. See `.env.example` for the keys.
3. Edit files inside `website-1/` or `website-2/`, then commit and push.

## Deploy

Each folder is uploaded to its own Hostinger site's `public_html` over SSH
(details in `.env`). Deploy only the folder you changed:

```
powershell -ExecutionPolicy Bypass -File .\deploy.ps1 website-1
powershell -ExecutionPolicy Bypass -File .\deploy.ps1 website-2
```

The script only uploads/overwrites files - it never deletes anything on Hostinger.
If you don't have the deploy SSH key, it asks for the SSH password from `.env`.

**Rule: never delete anything on Hostinger** - the account hosts other live sites.
