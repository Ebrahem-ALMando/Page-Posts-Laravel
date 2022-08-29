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
//New Add Posts Used Factory
        Post::factory(10)->create();

//        User::truncate();
//        category::truncate();
//        Post::truncate();
////         \App\Models\User::factory(10)->create();
//             $user1= User::factory()->create([]);
//             $user= User::factory()->create([]);
//          $html=category::create([
//                'name'=>'Html',
//                'slug'=>'html'
//             ]);
//          $css=category::create([
//            'name'=>'Css',
//            'slug'=>'css'
//                        ]);
//          $JS=category::create([
//                  'name'=>'JS',
//                  'slug'=>'js'
//              ]);
//            Post::create([
//               'title'=>'Elment and Tags',
//               'slug'=>'Elment and Tags' ,
//                'excerpt'=>'If the application is in maintenance  demo',
//                'body'=>'If the application is in maintenance  demo mode via the "down" command
//               | we will load this file so that any pre-rendered content can be shown
//               | instead of starting the framework, which could cause an exception.',
//                'category_id'=>$html->id,
//                'user_id'=>$user->id
//            ]);
//        Post::create([
//            'title'=>'Css Background',
//            'slug'=>'Css-Background' ,
//            'excerpt'=>'If the application is in maintenance  demo',
//            'body'=>'If the application is in maintenance  demo mode via the "down" command
//               | we will load this file so that any pre-rendered content can be shown
//               | instead of starting the framework, which could cause an exception.',
//            'category_id'=>$css->id,
//            'user_id'=>$user->id
//        ]);
//        Post::create([
//            'title'=>'Alert Statument',
//            'slug'=>'Alert-Statument' ,
//            'excerpt'=>'If the application is in maintenance  demo',
//            'body'=>'If the application is in maintenance  demo mode via the "down" command
//               | we will load this file so that any pre-rendered content can be shown
//               | instead of starting the framework, which could cause an exception.',
//            'category_id'=>$JS->id,
//            'user_id'=>$user1->id
//        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
