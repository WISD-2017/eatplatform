<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditUserableInUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(' userable_type');
            $table->dropColumn(' userable_id');
            $table->integer('userable_id')->after('password');
            $table->string('userable_type')->after('userable_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer(' userable_type')->after('password');
            $table->integer(' userable_id')->after('password');
            $table->dropColumn('userable_id');
            $table->dropColumn('userable_type');
        });
    }
}
