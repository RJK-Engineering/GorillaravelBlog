<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(['title' => 'Economics']);
        DB::table('categories')->insert(['title' => 'Parenting']);
        DB::table('categories')->insert(['title' => 'Career']);
        DB::table('categories')->insert(['title' => 'Political']);
        DB::table('categories')->insert(['title' => 'Finance']);
        DB::table('categories')->insert(['title' => 'Music']);
        DB::table('categories')->insert(['title' => 'Fashion']);
        DB::table('categories')->insert(['title' => 'Car']);
        DB::table('categories')->insert(['title' => 'Beauty']);
        DB::table('categories')->insert(['title' => 'Travel']);
        DB::table('categories')->insert(['title' => 'Design']);
        DB::table('categories')->insert(['title' => 'Food']);
        DB::table('categories')->insert(['title' => 'Wedding']);
        DB::table('categories')->insert(['title' => 'Movie']);
        DB::table('categories')->insert(['title' => 'Photography']);
        DB::table('categories')->insert(['title' => 'Law']);
        DB::table('categories')->insert(['title' => 'Health']);
        DB::table('categories')->insert(['title' => 'Green']);
        DB::table('categories')->insert(['title' => 'Technology']);
        DB::table('categories')->insert(['title' => 'SEO']);
        DB::table('categories')->insert(['title' => 'History']);
        DB::table('categories')->insert(['title' => 'Marketing']);
        DB::table('categories')->insert(['title' => 'Lifestyle']);
        DB::table('categories')->insert(['title' => 'University']);
        DB::table('categories')->insert(['title' => 'Dog']);
        DB::table('categories')->insert(['title' => 'Money']);
        DB::table('categories')->insert(['title' => 'Business']);
        DB::table('categories')->insert(['title' => 'Fitness']);
        DB::table('categories')->insert(['title' => 'Education']);
        DB::table('categories')->insert(['title' => 'Science']);
        DB::table('categories')->insert(['title' => 'Shopping']);
        DB::table('categories')->insert(['title' => 'Entertainment']);
        DB::table('categories')->insert(['title' => 'Sports']);
        DB::table('categories')->insert(['title' => 'Cat']);
        DB::table('categories')->insert(['title' => 'Social']);
        DB::table('categories')->insert(['title' => 'Medical']);
        DB::table('categories')->insert(['title' => 'Wine']);
        DB::table('categories')->insert(['title' => 'Celebrity']);
        DB::table('categories')->insert(['title' => 'DIY']);
        DB::table('categories')->insert(['title' => 'Nature']);
        DB::table('categories')->insert(['title' => 'Gaming']);
        DB::table('categories')->insert(['title' => 'Pet']);
    }
}
