<?php

use App\Comment;
use App\Post;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class CommentsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('comments')->delete();
        $faker = Faker::create();

        $users = User::all()->lists('id');
        $posts = Post::all()->lists('id');

        for ($i=0; $i < 200; $i++) {
            Comment::create([
                "user_id" => $faker->randomElement($users),
                "post_id" => $faker->randomElement($posts),
                "body" => $faker->text($maxNbChars = 100),
                "created_at" => $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now'),
            ]);
        }
    }
}
