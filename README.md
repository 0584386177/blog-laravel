# 1. Clone the repository
git clone https://github.com/your-username/init-vuexy-laravel.git
cd init-vuexy-laravel

# 2. Install PHP dependencies
composer install

# 3. Copy .env file and set environment variables
cp .env.example .env

# 4. Generate app key
php artisan key:generate

# 5. Set up your database in the .env file

# 6. Run migrations
php artisan migrate

# 7. (Optional) Run seeders
php artisan db:seed

# 8. Install Node dependencies and compile assets
npm install
npm run dev

# 9. Serve the app
php artisan serve
