<?php

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('blogs')->insert([
            'user_id' => 1,
            'title' => 'First Blog'
        ]);
        DB::table('posts')->update([
            'blog_id' => 1
        ]);
    }
}
