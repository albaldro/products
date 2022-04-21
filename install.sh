echo "Building the app"
docker-compose build app
echo "WakeUp App"
docker-compose up -d
echo "Finishing configuration"
docker-compose exec app ls -l
echo "Update composer"
composer update
echo "Install composer"
docker-compose exec app composer install
echo "Generating unique key"
docker-compose exec app php artisan key:generate