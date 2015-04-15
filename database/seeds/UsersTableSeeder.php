<?php

use App\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        $faker = Faker::create();

        for ($i=0; $i < 10; $i++) {
            User::create([
                "username" => $faker->unique()->word,
                "password" => Hash::make("12345"),
                "email" => $faker->unique()->email,
                "avatar" => $faker->imageUrl($width = 64, $height = 64),
                "created_at" => $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now'),

            ]);
        }

        User::create([
            "username" => "admin",
            "password" => Hash::make("admin"),
            "email" => "admin@admin.org",
            "created_at" => $faker->date()
        ]);
    }
}
