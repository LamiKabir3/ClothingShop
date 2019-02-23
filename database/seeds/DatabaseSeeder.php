<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $stuff = [
            'Shirts',
            'Pants',
            'Hats',
            'Shoes'
        ];
        $products = [
            [
                'category_id' => 1,
                'genderId' => 1,
                'name' => 'T-shirt',
                'price' => 5.29,
                'pic' => 'https://placehold.it/500x500'
            ]
        ];
        foreach($stuff as $item){
            $cat = new Category;
            $cat->name = $item;
            $cat->save();
            $id = $cat->id;
            $product = new Product;
            //////////////////////////////////////////////////
        }

        // make 50 users
        factory(App\User::class, 50)->create()
            ->each(function ($user) {
            $user->posts()->save(factory(App\Post::class)->make());
        });
    }
}
