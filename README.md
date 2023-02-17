```
docker-compose exec app bash
composer install
php artisan key:generate
php artisan storage:link
php artisan migrate:fresh --seed
php artisan ide-helper:model -M
```
