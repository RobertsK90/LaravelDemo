<?php

use App\Post;
use App\User;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->delete();
        $faker = Faker::create();

        $users = User::all()->lists('id');

        for ($i=0; $i < 10; $i++) {
            $title = $faker->sentence(5);
            Post::create([
                "user_id" => $faker->randomElement($users),
                "title" => $title,
                "slug" => Str::slug($title),
                "body" => $faker->text($maxNbChars = 500),
                "image" => $faker->imageUrl($width = 900, $height = 300),
                "created_at" => $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now'),
            ]);
        }
    }
}
