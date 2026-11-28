#!/bin/bash
# Deploy one website folder to its Hostinger temporary domain (Mac / Linux).
# Usage:  ./deploy.sh website-1
#         ./deploy.sh tamilnadunrilegalservices-landing
# Uploads/overwrites files only. It NEVER deletes anything on Hostinger.
# Uses the SSH password from .env (via the built-in `expect` tool).
set -euo pipefail

SITE="${1:-}"
case "$SITE" in
  website-1) DOMAIN="aerial-darkgreen-llama-59.hostingersite.com"
             REMOTE_DIR="domains/$DOMAIN/public_html" ;;
  # NRI landing page (LIVE, used by Google Ads): subdomain folder inside the
  # tamilnadunrilegalservices.com site (main domain + www stay on Wix; only the
  # "landing" A record points here)
  tamilnadunrilegalservices-landing)
             DOMAIN="landing.tamilnadunrilegalservices.com"
             REMOTE_DIR="domains/tamilnadunrilegalservices.com/public_html/landing" ;;
  *) echo "Usage: ./deploy.sh website-1|tamilnadunrilegalservices-landing"; exit 1 ;;
esac

ROOT="$(cd "$(dirname "$0")" && pwd)"
set -a; source "$ROOT/.env"; set +a

TAR="$(mktemp -t "$SITE-deploy").tar"
COPYFILE_DISABLE=1 tar -cf "$TAR" --no-xattrs --no-mac-metadata --exclude='.DS_Store' --exclude='*.md' -C "$ROOT/$SITE" .

EXP="$(mktemp -t deploy-expect)"
trap 'rm -f "$EXP" "$TAR"' EXIT
cat > "$EXP" <<'EOF'
set timeout 120
spawn {*}$argv
expect {
  -re {(?i)password:} { send "$env(SSH_PASSWORD)\r"; exp_continue }
  eof
}
catch wait result
exit [lindex $result 3]
EOF

run_expect() {  # run a command that may prompt for the SSH password
  expect -f "$EXP" "$@"
}

echo "Uploading $SITE -> https://$DOMAIN"
run_expect scp -q -P "$SSH_PORT" -o StrictHostKeyChecking=accept-new "$TAR" "$SSH_USERNAME@$SSH_HOST:$SITE-deploy.tar"
run_expect ssh -p "$SSH_PORT" "$SSH_USERNAME@$SSH_HOST" \
  "tar -xf ~/$SITE-deploy.tar -C ~/$REMOTE_DIR && rm -f ~/$SITE-deploy.tar && echo DEPLOYED"

echo "Done: https://$DOMAIN"
