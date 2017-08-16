# epsa-cuestionarios
Sistema de cuestionarios de EPSA de la Universidad Adventista del Plata


run:
```
composer install
```
then rename `.env.example` to `.env`
and do:
`php artisan key:generate`

Inside `.env` set the settings for the database and run
`php artisan migrate`

to make an decoy admin user run:
`php artisan decoy:admin`

