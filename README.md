## Random numbers generator

Test laravel rest api project with 2 endpoints to generate random number and to show generated numbers.

#### Development environment:
- Ubuntu 22.04
- docker 24.0.6
- docker-compose 1.29.2
- composer 2.2.6
- php 8.1.2

#### Project installation on local machine:
- git clone https://github.com/tony-starikov/numbers.git
- cd numbers
- composer install
- rename .env.example to .env
- php artisan key:generate
- ./vendor/bin/sail up
- ./vendor/bin/sail artisan migrate

#### If you have some problems with the last installation command run this commands and then try to run the last installation command again:
- docker stop $(docker ps -a -q)
- docker rm $(docker ps -a -q)

#### Endpoints:
- http://localhost/api/numbers - post request without body to generate random number
- http://localhost/api/numbers/{id} - get request with id parameter to get random number by id
