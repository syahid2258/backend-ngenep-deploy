#!/usr/bin/env bash
# exit on error
set -o errexit

echo "Installing PHP dependencies..."
composer install --optimize-autoloader --no-dev

echo "Caching configurations..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "Running migrations..."
php artisan migrate --force

echo "Creating storage symlink..."
php artisan storage:link || true
