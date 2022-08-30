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
            ,'username'=>'ebrahem-mando'
        ]);
        $user_2=User::factory()->create([
            'name'=>'Mohamad Mando'
            ,'username'=>'Mohamad-Mando'
        ]);
        $category=category::factory()->create([
            'name'=>'Html',
            'slug'=>'html'
        ]);
        $category_2=category::factory()->create([
            'name'=>'JS',
            'slug'=>'java-script'
        ]);
//New Add Posts Used Factory
        Post::factory(5)->create([
            'user_id'=>$user->id,
            'category_id'=>$category->id
        ]);
        Post::factory(5)->create([
            'user_id'=>$user_2->id,
            'category_id'=>$category_2->id
        ]);
    }
}
