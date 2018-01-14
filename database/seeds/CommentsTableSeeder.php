<?php

use Illuminate\Database\Seeder;
use App\Comment;
use App\Store;
use Faker\Factory as Faker;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::truncate();

        $faker = Faker::create('zh_TW');
        foreach (range(1, 100) as $number) {
            Comment::create([
                'content' => $faker->paragraph,
                'score' => rand(1,5),
                'is_report' => rand(0,1),
                'member_id' => rand(1,5),
                'store_id' => rand(1,10),
            ]);
        }

    }
}
