<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
        $user=User::factory()->create([
            'name'=>'Ebrahem AL Mando'
        ]);
        $category=category::factory()->create([
            'name'=>'Html',
            'slug'=>'html'
        ]);
//New Add Posts Used Factory
        Post::factory(5)->create([
            'user_id'=>$user->id,
            'category_id'=>$category->id
        ]);
    }
}
