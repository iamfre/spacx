<?php

namespace Database\Seeders;

use App\Models\AdminUser;
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
             'name' => 'Zycs',
             'email' => 'zycs@yandex.ru',
             'password' => bcrypt(3034),
         ]);

         AdminUser::factory()->create([
             'name' => 'admin',
             'email' => 'zycs@yandex.ru',
             'password' => bcrypt(3034),
         ]);

         for ($i = 1; $i < 17; $i++) {
             $price = rand(100000, 9999999);
             Ship::factory()->create([
                 'image' => "ship_$i.png",
                 'price' => $price,
                 'old_price' => rand(0, 3) > 2 ? $price + rand(10000, 100000) : null,
             ]);
         }
    }
}
