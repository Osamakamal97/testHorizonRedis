web: vendor/bin/heroku-php-apache2 public/
worker: php artisan queue:work
release: php artisan cache:clear && php artisan config:cache
