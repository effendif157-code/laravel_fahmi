<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->delete();

        $post = [
            ['title' => 'Belajar Laravel', 'Content' => 'Lorem Ipsum'],
            ['title' => 'Tips Belajar Laravel', 'Content' => 'Lorem Ipsum'],
            ['title' => 'JAdwal Latihan Workout Bulanan', 'Content' => 'Lorem Ipsum']
        ];

        DB:: table('posts')->insert($post);
    }
}
