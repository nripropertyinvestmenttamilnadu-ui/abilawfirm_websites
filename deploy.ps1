# Deploy one website folder to its Hostinger temporary domain.
# Usage:  powershell -ExecutionPolicy Bypass -File .\deploy.ps1 website-1
#         powershell -ExecutionPolicy Bypass -File .\deploy.ps1 website-2
# Uploads/overwrites files only. It NEVER deletes anything on Hostinger.

param([Parameter(Mandatory = $true)][ValidateSet('website-1', 'website-2')][string]$Site)

$ErrorActionPreference = 'Stop'
$root = $PSScriptRoot

# Read SSH settings from .env (shared privately, never committed)
$envVars = @{}
Get-Content (Join-Path $root '.env') | ForEach-Object {
    if ($_ -match '^\s*([A-Za-z0-9_]+)\s*=\s*(.*?)\s*$') { $envVars[$Matches[1]] = $Matches[2] }
}

$domains = @{
    'website-1' = 'aerial-darkgreen-llama-59.hostingersite.com'
    'website-2' = 'active-darkgray-beaver-99.hostingersite.com'
}
$domain = $domains[$Site]
$remoteDir = "domains/$domain/public_html"
$target = "$($envVars['SSH_USERNAME'])@$($envVars['SSH_HOST'])"
$port = $envVars['SSH_PORT']

# Use the deploy key if this machine has it; otherwise ssh asks for the SSH password from .env
$sshArgs = @('-p', $port)
$key = Join-Path $env:USERPROFILE '.ssh\abilawfirm_hostinger'
if (Test-Path $key) { $sshArgs += @('-i', $key) }
$scpArgs = @('-P', $port)
if (Test-Path $key) { $scpArgs += @('-i', $key) }

$tar = Join-Path $env:TEMP "$Site-deploy.tar"
tar -cf $tar -C (Join-Path $root $Site) .
if ($LASTEXITCODE -ne 0) { throw 'tar failed' }

Write-Host "Uploading $Site -> https://$domain"
scp @scpArgs $tar "${target}:$Site-deploy.tar"
if ($LASTEXITCODE -ne 0) { throw 'upload failed' }
ssh @sshArgs $target "tar -xf ~/$Site-deploy.tar -C ~/$remoteDir && rm -f ~/$Site-deploy.tar && echo DEPLOYED"
if ($LASTEXITCODE -ne 0) { throw 'extract failed' }
Remove-Item $tar
Write-Host "Done: https://$domain"
