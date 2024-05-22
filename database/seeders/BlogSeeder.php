<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for($i=1; $i<=50; $i++){
            DB::table('blogs')->insert([
                'title' => 'This is a title for blog post number one',
                'description' => Str::random(200),
                'creator' =>'John Doe',
                // 'created_at'=> now(),
                // 'Published-At' => date('Y-m-d'),
                // 'id' => 1,
            ]);
        }
    }
}
