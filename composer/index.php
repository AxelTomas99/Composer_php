<?php
require_once 'vendor/autoload.php';
use Carbon\Carbon;

$faker = Faker\Factory::create();

echo $faker->name;
printf("Now %s", Carbon::now());