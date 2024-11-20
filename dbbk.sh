#!/bin/bash

# Database credentials from settings.php
DB_HOST="localhost"
DB_USER="smcs"
DB_PASS="dontpanic43!"
DB_NAME="SMCS"

# Backup file location
BACKUP_DIR="/srv/xibo-cms/backups"
BACKUP_FILE="$BACKUP_DIR/xibo_db_backup.sql"

# Ensure the backup directory exists
mkdir -p "$BACKUP_DIR"

# Dump the database
mysqldump -h "$DB_HOST" -u "$DB_USER" -p"$DB_PASS" "$DB_NAME" > "$BACKUP_FILE"

if [ $? -eq 0 ]; then
    echo "Database backup successful: $BACKUP_FILE"
else
    echo "Database backup failed!" >&2
    exit 1
fi
