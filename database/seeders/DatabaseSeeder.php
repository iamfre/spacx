<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use App\Models\Post;
use App\Models\Ship;
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
         User::factory(10)->create();

         User::factory()->create([
             'name' => 'zycs',
             'email' => 'zycs@test.ru',
             'phone' => 89040506030,
             'password' => 'pass',
         ]);

         AdminUser::factory()->create([
             'name' => 'admin',
             'email' => 'admin@spacx.ru',
             'password' => bcrypt('pass'),
         ]);

         for ($i = 1; $i < 17; $i++) {
             $price = rand(100000, 9999999);
             Ship::factory()->create([
                 'image' => "ship_$i.png",
                 'price' => $price,
                 'old_price' => rand(0, 3) > 2 ? $price + rand(10000, 100000) : null,
             ]);
         }

        Post::factory(10)->create();
    }
}
