composer require consoletvs/charts:6.\*

## Register the service provider in thefile located at: config/app.php in the providers key.

ConsoleTVs\Charts\ChartsServiceProvider::class,

## console

php artisan vendor:publish --tag=charts_config

## create chart

php artisan make:chart {Name} {Library?}
php artisan make:chart ChartTest ChartJs

## docs

https://v6.charts.erik.cat/installation.html#service-provider
https://www.chartjs.org/
