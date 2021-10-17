<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        \App\Models\User::get()->each(function ($user){
            Post::factory()->count(10)->create([
                'user_id'=>$user->id
            ]);
        });

    }
}
