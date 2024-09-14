<?php
require_once __DIR__ . '/vendor/autoload.php';

use Faker\Factory;

class Random {
    public static function generatePersonData($count = 300) {
        $faker = Factory::create('en_PH');
        $people = [];

        for ($i = 0; $i < $count; $i++) {
            $people[] = [
                'UUID' => $faker->uuid,
                'Title' => $faker->title,
                'First Name' => $faker->firstName,
                'Last Name' => $faker->lastName,
                'Street Address' => $faker->streetAddress,
                'Barangay' => $faker->secondaryAddress,
                'Municipality' => $faker->city,
                'Province' => $faker->state,
                'Country' => 'Philippines',
                'Phone Number' => $faker->phoneNumber,
                'Mobile Number' => $faker->phoneNumber,
                'Company Name' => $faker->company,
                'Company Website' => $faker->domainName,
                'Job Title' => $faker->jobTitle,
                'Favorite Color' => $faker->safeColorName,
                'Birthdate' => $faker->date('Y-m-d'),
                'Email Address' => $faker->email,
                'Password' => $faker->password
            ];
        }

        return $people;
    }
}
?>