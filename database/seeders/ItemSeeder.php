<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'item_name' => 'Apple',
                'item_desc' => 'This is apple description',
                'price'     => '2500'
            ],

            [
                'item_name' => 'Blueberry',
                'item_desc' => 'This is blueberry description',
                'price'     => '3400'
            ],

            [
                'item_name' => 'Avocado',
                'item_desc' => 'This is avocado description',
                'price'     => '3500'
            ],

            [
                'item_name' => 'Apricot',
                'item_desc' => 'This is apricot description',
                'price'     => '3700'
            ],

            [
                'item_name' => 'Blackberry',
                'item_desc' => 'This is blackberry description',
                'price'     => '4000'
            ],

            [
                'item_name' => 'Blackcurrant',
                'item_desc' => 'This is blackcurrant description',
                'price'     => '4200'
            ],

            [
                'item_name' => 'Cherry',
                'item_desc' => 'This is cherry description',
                'price'     => '4400'
            ],

            [
                'item_name' => 'Coconut',
                'item_desc' => 'This is coconut description',
                'price'     => '4800'
            ],

            [
                'item_name' => 'Corn',
                'item_desc' => 'This is corn description',
                'price'     => '5100'
            ],

            [
                'item_name' => 'Chili pepper',
                'item_desc' => 'This is chili pepper description',
                'price'     => '5500'
            ],

            [
                'item_name' => 'Dates',
                'item_desc' => 'This is dates description',
                'price'     => '5750'
            ],

            [
                'item_name' => 'Durian',
                'item_desc' => 'This is durian description',
                'price'     => '5900'
            ],

            [
                'item_name' => 'Grape',
                'item_desc' => 'This is grape description',
                'price'     => '6000'
            ],

            [
                'item_name' => 'Guava',
                'item_desc' => 'This is guava description',
                'price'     => '6500'
            ],

            [
                'item_name' => 'Jackfruit',
                'item_desc' => 'This is jackfruit description',
                'price'     => '7000'
            ],

            [
                'item_name' => 'Kiwi',
                'item_desc' => 'This is kiwi description',
                'price'     => '7500'
            ],

            [
                'item_name' => 'Lychee',
                'item_desc' => 'This is lychee description',
                'price'     => '10000'
            ],

            [
                'item_name' => 'Mango',
                'item_desc' => 'This is mango description',
                'price'     => '13000'
            ],

            [
                'item_name' => 'Tomato',
                'item_desc' => 'This is tomato description',
                'price'     => '13500'
            ],

            [
                'item_name' => 'Orange',
                'item_desc' => 'This is orange description',
                'price'     => '15000'
            ],

            [
                'item_name' => 'Papaya',
                'item_desc' => 'This is papaya description',
                'price'     => '15300'
            ],

            [
                'item_name' => 'Peach',
                'item_desc' => 'This is peach description',
                'price'     => '15500'
            ],

            [
                'item_name' => 'Pineapple',
                'item_desc' => 'This is pineapple description',
                'price'     => '16000'
            ],

            [
                'item_name' => 'Pumpkin',
                'item_desc' => 'This is pumpkin description',
                'price'     => '20000'
            ],
        ]);
    }
}
