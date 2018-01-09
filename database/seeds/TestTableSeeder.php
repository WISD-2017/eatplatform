<?php

use Illuminate\Database\Seeder;

use App\User as UserEloquent;
use App\Admin as AdminEloquent;
use App\Firm as FirmEloquent;
use App\Store as StoreEloquent;
use App\Member as MemberEloquent;
use App\Comment as CommentEloquent;

class TestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
    	//$users = factory(UserEloquent::class, 20)->create();
		
		$firms = factory(FirmEloquent::class,10)->create()->each(function($firms) use ($users,$postTypes){
    		$post->type=$postTypes[mt_rand(0, (count($postTypes)-1))]->id;
    		$post->user_id=$users[mt_rand(0, (count($users)-1))]->id;
    		$post->save();
    	});
        $stores = factory(StoreEloquent::class,500)->create()->each(function($comment) use ($stores,$members){
            $comment->post_id=$posts[mt_rand(0, (count($posts)-1))]->id;
            $comment->member_id=$users[mt_rand(0, (count($members)-1))]->id;
            $comment->save();
        });
    
    	$members = factory(MemberEloquent::class,10)->create()->each(function($post) use ($users,$postTypes){
    		$post->type=$postTypes[mt_rand(0, (count($postTypes)-1))]->id;
    		$post->user_id=$users[mt_rand(0, (count($users)-1))]->id;
    		$post->save();
    	});
        $comments = factory(CommentEloquent::class,500)->create()->each(function($comment) use ($stores,$members){
            $comment->post_id=$posts[mt_rand(0, (count($posts)-1))]->id;
            $comment->member_id=$users[mt_rand(0, (count($members)-1))]->id;
            $comment->save();
        });
		
    }
}
