## Things you need to do to run the project
1. Clone the repository first in your localhost
```
git clone github.com/koykoy027/s-guide.git
```
2. Go to your directory and download dependencies
```
composer install
```
3. Generate .env file
```
cp .env.example .env
```
4. Generate APP_KEY
```
php artisan key:generate
```
5. Open your .env file and configure your database
6. Migrate your database using
```
php artisan migrate --seed
```
7. refresh your server
```
php artisan optimize
```
8. Run your Laravel project
```
php artisan serve
```
