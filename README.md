# ABI Law Firm Websites

Two websites in one repo, both hosted on Hostinger.

| Folder | Hostinger temporary domain | Real domain |
|---|---|---|
| `website-1/` | _TBD_ | _TBD (connect later)_ |
| `website-2/` | _TBD_ | _TBD (connect later)_ |

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
(details in `.env`). Deploy only the folder you changed.
