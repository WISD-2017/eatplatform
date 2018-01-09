<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Admin;
use App\Firm ;
use App\Member;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(User::class, 20)
    ->create()
    ->each(function (User $user) {
        collect(range(1, 20))->each(function () use ($user) {
            $user->members()->save(factory(Member::class)->make());
			$user->firms()->save(factory(Firm::class)->make());
			$user->admins()->save(factory(Admin::class)->make());
        });
    });
	
	

	
    }
}
