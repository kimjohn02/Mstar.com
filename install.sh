#!/usr/bin/env bash
set -e

script_dir="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
cd "$script_dir"

if [ ! -d "vendor" ]; then
    echo "Installing PHP dependencies..."
    composer install
fi

if [ ! -f ".env" ]; then
    echo "Setting up environment..."
    cp .env.example .env
fi

if [ -z "$APP_KEY" ]; then
    echo "Generating application key..."
    php artisan key:generate
fi

echo "Running migrations..."
php artisan migrate

echo "Seeding database..."
php artisan db:seed

echo "Creating storage link..."
php artisan storage:link

echo ""
echo "✅ Installation complete!"
echo ""
echo "🚀 Start the development server with:"
echo "   php artisan serve"
echo ""
echo "📱 Visit: http://localhost:8000"
echo ""
echo "🔐 Admin login:"
echo "   Email: admin@morningstar.com"
echo "   Password: password123"
