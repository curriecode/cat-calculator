COMMANDS

start php server: php artisan server

start vue server: yarn run watch

create model laravel: php artisan make:model Name

Debug logs for backend server:

1. Log::debug("message"); in controller
2. tail -f laravel.log <- in terminal storage/logs directory
3. curl -v http://127.0.0.1:8000/api/cats/create <- in other terminal
