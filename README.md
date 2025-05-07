# EcommerceLite
FinalYearProject

#Laravel + Vue.js (Inertia.js) Setup
Ensure you have the following installed on your system:

PHP 8.x
Composer
Node.js & npm
Laravel CLI
PostgreSQL or MySQL (or SQLite)

1. Install PHP dependencies
composer install
2. Install JavaScript dependencies
npm install
3. Set up environment file
cp .env.example .env
Update your .env file with database credentials and other necessary configurations.

MySQL Setup in .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password

4. Generate application key
php artisan key:generate
5. Run migrations and seeders (if any)
php artisan migrate --seed
6. Build frontend assets and start the Laravel server
npm run dev  # For development
php artisan serve  # Start Laravel server

Now, visit http://localhost:8000 in your browser.
