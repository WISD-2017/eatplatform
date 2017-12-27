<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFKInTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->integer('member_id')->after('is_report');
            $table->integer('store_id')->after('member_id');
        });
        Schema::table('stores', function (Blueprint $table) {
            $table->integer('firm_id')->after('is_report');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->dropColumn('member_id');
            $table->dropColumn('store_id');
        });
        Schema::table('stores', function (Blueprint $table) {
            $table->dropColumn('firm_id');
        });
    }
}
