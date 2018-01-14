<?php

use Illuminate\Database\Seeder;
use App\Admin;
use App\Firm;
use App\Member;
use App\User;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $faker = Faker::create('zh_TW');

        //管理員資料
        Admin::truncate();

        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@mail.com';
        $user->password = 'admin123';
        Admin::create()->user()->save($user);

        //商家資料
        Firm::truncate();
        foreach (range(1, 5) as $number) {
            $user = new User();
            $user->name = $faker->name;
            $user->email = $faker->email;
            $user->password = 'firm123';

            Firm::create([
                'firm' => $faker->company,
                'address' => $faker->address,
                'tel' => $faker->phoneNumber,
            ])->user()->save($user);
        }

        //會員資料
        Member::truncate();
        foreach (range(1, 5) as $number) {
            $user = new User();
            $user->name = $faker->name;
            $user->email = $faker->email;
            $user->password = 'member123';

            Member::create([
                'gender' => rand(0, 1),
            ])->user()->save($user);
        }


    }
}
