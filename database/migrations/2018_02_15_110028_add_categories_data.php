<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategoriesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('categories')->insert(array('title' => 'Economics'));
        DB::table('categories')->insert(array('title' => 'Parenting'));
        DB::table('categories')->insert(array('title' => 'Career'));
        DB::table('categories')->insert(array('title' => 'Political'));
        DB::table('categories')->insert(array('title' => 'Finance'));
        DB::table('categories')->insert(array('title' => 'Music'));
        DB::table('categories')->insert(array('title' => 'Fashion'));
        DB::table('categories')->insert(array('title' => 'Car'));
        DB::table('categories')->insert(array('title' => 'Beauty'));
        DB::table('categories')->insert(array('title' => 'Travel'));
        DB::table('categories')->insert(array('title' => 'Design'));
        DB::table('categories')->insert(array('title' => 'Food'));
        DB::table('categories')->insert(array('title' => 'Wedding'));
        DB::table('categories')->insert(array('title' => 'Movie'));
        DB::table('categories')->insert(array('title' => 'Photography'));
        DB::table('categories')->insert(array('title' => 'Law'));
        DB::table('categories')->insert(array('title' => 'Health'));
        DB::table('categories')->insert(array('title' => 'Green'));
        DB::table('categories')->insert(array('title' => 'Technology'));
        DB::table('categories')->insert(array('title' => 'SEO'));
        DB::table('categories')->insert(array('title' => 'History'));
        DB::table('categories')->insert(array('title' => 'Marketing'));
        DB::table('categories')->insert(array('title' => 'Lifestyle'));
        DB::table('categories')->insert(array('title' => 'University'));
        DB::table('categories')->insert(array('title' => 'Dog'));
        DB::table('categories')->insert(array('title' => 'Money'));
        DB::table('categories')->insert(array('title' => 'Business'));
        DB::table('categories')->insert(array('title' => 'Fitness'));
        DB::table('categories')->insert(array('title' => 'Education'));
        DB::table('categories')->insert(array('title' => 'Science'));
        DB::table('categories')->insert(array('title' => 'Shopping'));
        DB::table('categories')->insert(array('title' => 'Entertainment'));
        DB::table('categories')->insert(array('title' => 'Sports'));
        DB::table('categories')->insert(array('title' => 'Cat'));
        DB::table('categories')->insert(array('title' => 'Social'));
        DB::table('categories')->insert(array('title' => 'Medical'));
        DB::table('categories')->insert(array('title' => 'Wine'));
        DB::table('categories')->insert(array('title' => 'Celebrity'));
        DB::table('categories')->insert(array('title' => 'DIY'));
        DB::table('categories')->insert(array('title' => 'Nature'));
        DB::table('categories')->insert(array('title' => 'Gaming'));
        DB::table('categories')->insert(array('title' => 'Pet'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
