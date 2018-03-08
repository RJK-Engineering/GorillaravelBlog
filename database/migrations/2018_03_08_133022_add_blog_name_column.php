<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBlogNameColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blogs', function($table) {
            $table->string('name')->after('title');
        });
        App\Blog::where('id','>',0)->update(
            ['name' => DB::raw("lower(replace(title, ' ', ''))")]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blogs', function($table) {
            $table->dropColumn('name');
        });
    }

}
