<?php

use Illuminate\Database\Seeder;
use App\Shop;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('shops')->insert(array(
             array(
               'ShopName' => 'Shop name 1',
               'photo' => 'https://placeimg.com/380/230/nature',
             ),
             array(
               'ShopName' => 'Shop name 2',
               'photo' => 'https://placeimg.com/380/230/animals',
             ),

            array(
                 'ShopName' => 'Shop name 3',
                 'photo' => 'https://placeimg.com/380/230/tech',
               ),
           ));
    }
}
