<?php

use Illuminate\Database\Seeder;
use App\Store;
use Faker\Factory as Faker;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Store::truncate();

        $faker = Faker::create('zh_TW');
        foreach (range(1, 10) as $number) {
            Store::create([
                'store' => '美食'.$number,
                'address' => $faker->address,
                'telephone' => $faker->phoneNumber,
                'type' => rand(0,1),
                'avg_score' => null,
                'introduction' => $faker->paragraph,
                'is_report' => rand(0,1),
                'firm_id'=>rand(1,5),
            ]);
        }
    }
}
