<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User', 
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Hanif',
            'username' => 'hanifajip',
            'email' => 'hanif@gmail.com',
            'password' => bcrypt('password')
        ]);
        // User::create([
        //     'name' => 'Mugiwara',
        //     'email' => 'mugiwara@gmail.com',
        //     'password' => bcrypt('321')
        // ]);
        User::factory(5)->create();
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'Mobile Programming',
            'slug' => 'mobile-programming'
        ]);
        Post::factory(20)->create();
        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'title' => 'Post 1',
        //     'slug' => 'post-1',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium, ipsa officia alias reiciendis repellendus voluptate repellat beatae omnis aspernatur,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium, ipsa officia alias reiciendis repellendus voluptate repellat beatae omnis aspernatur,<p>adipisci quae blanditiis, cum explicabo! Soluta veritatis quia delectus, optio nihil a, iure iusto, cum minus sed mollitia? Ipsum harum, sunt numquam est ab hic, eos id dignissimos expedita repellendus sit cupiditate, eligendi odit asperiores ducimus. Perspiciatis, dolorum. Magni amet obcaecati quaerat ex ipsa at adipisci, est animi repudiandae. Maxime sit, obcaecati vel debitis asperiores culpa laborum explicabo quos earum placeat maiores odit quam qui illum alias praesentium minima quis error magni possimus. Quam dolor, temporibus fuga possimus facere officia adipisci.</p>
        //     '
        // ]);
        // Post::create([
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'title' => 'Post 2',
        //     'slug' => 'post-2',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium, ipsa officia alias reiciendis repellendus voluptate repellat beatae omnis aspernatur,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium, ipsa officia alias reiciendis repellendus voluptate repellat beatae omnis aspernatur,<p>adipisci quae blanditiis, cum explicabo! Soluta veritatis quia delectus, optio nihil a, iure iusto, cum minus sed mollitia? Ipsum harum, sunt numquam est ab hic, eos id dignissimos expedita repellendus sit cupiditate, eligendi odit asperiores ducimus. Perspiciatis, dolorum. Magni amet obcaecati quaerat ex ipsa at adipisci, est animi repudiandae. Maxime sit, obcaecati vel debitis asperiores culpa laborum explicabo quos earum placeat maiores odit quam qui illum alias praesentium minima quis error magni possimus. Quam dolor, temporibus fuga possimus facere officia adipisci.</p>
        //     '
        // ]);
        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Post 3',
        //     'slug' => 'post-3',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium, ipsa officia alias reiciendis repellendus voluptate repellat beatae omnis aspernatur,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium, ipsa officia alias reiciendis repellendus voluptate repellat beatae omnis aspernatur,<p>adipisci quae blanditiis, cum explicabo! Soluta veritatis quia delectus, optio nihil a, iure iusto, cum minus sed mollitia? Ipsum harum, sunt numquam est ab hic, eos id dignissimos expedita repellendus sit cupiditate, eligendi odit asperiores ducimus. Perspiciatis, dolorum. Magni amet obcaecati quaerat ex ipsa at adipisci, est animi repudiandae. Maxime sit, obcaecati vel debitis asperiores culpa laborum explicabo quos earum placeat maiores odit quam qui illum alias praesentium minima quis error magni possimus. Quam dolor, temporibus fuga possimus facere officia adipisci.</p>
        //     '
        // ]);

    }
}
