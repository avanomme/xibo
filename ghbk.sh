#!/bin/bash

# Prevent running as root
if [ "$(id -u)" -eq 0 ]; then
    echo "This script should not be run as root or with sudo."
    exit 1
fi

# Load environment variables from .env file
ENV_FILE="/srv/xibo-cms/.env"

if [ ! -f "$ENV_FILE" ]; then
    echo "Environment file not found: $ENV_FILE"
    exit 1
fi

export $(grep -v '^#' "$ENV_FILE" | xargs)

# Ensure required variables are set
REQUIRED_VARS=("GITHUB_TOKEN" "GITHUB_USERNAME" "DB_HOST" "DB_USER" "DB_PASS" "DB_NAME")
for var in "${REQUIRED_VARS[@]}"; do
    if [ -z "${!var}" ]; then
        echo "Error: Missing required environment variable: $var"
        exit 1
    fi
done

# Variables
CMS_DIR="/srv/xibo-cms"
BACKUP_DIR="$CMS_DIR/backups"
BACKUP_FILE="$BACKUP_DIR/xibo_db_backup.sql"
REPO_URL="https://${GITHUB_USERNAME}:${GITHUB_TOKEN}@github.com/${GITHUB_USERNAME}/xibo.git"

# Ensure the backup directory exists
mkdir -p "$BACKUP_DIR"

# Step 1: Backup the database
echo "Backing up the database..."
mysqldump -h "$DB_HOST" -u "$DB_USER" -p"$DB_PASS" "$DB_NAME" > "$BACKUP_FILE"

if [ $? -eq 0 ]; then
    echo "Database backup successful: $BACKUP_FILE"
else
    echo "Database backup failed!" >&2
    exit 1
fi

# Step 2: Git operations
echo "Preparing to push backup to GitHub..."

# Check if Git is installed
if ! command -v git &> /dev/null; then
    echo "Git is not installed. Please install it first." >&2
    exit 1
fi

# Initialize Git if not already initialized
if [ ! -d "$CMS_DIR/.git" ]; then
    echo "Initializing Git repository..."
    cd "$CMS_DIR" || exit
    git init
    git remote add origin "$REPO_URL"
fi

# Add all files and commit changes
cd "$CMS_DIR" || exit
git add -A
git -c user.name="UPEI SMCSS" -c user.email="upeismcss@gmail.com" commit -m "Automated backup: $(date)"
git push -u origin main

if [ $? -eq 0 ]; then
    echo "Backup pushed to GitHub successfully!"
else
    echo "Failed to push to GitHub." >&2
    exit 1
fi
