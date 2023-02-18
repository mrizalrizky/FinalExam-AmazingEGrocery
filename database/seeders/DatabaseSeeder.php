<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(GenderSeeder::class);
        DB::table('accounts')->insert([
            'role_id'    => 1,
            'gender_id'  => 1,
            'first_name' => 'Web',
            'last_name'  => 'Administrator',
            'email'      => 'admin@amazingegrocery.com',
            'password'   => Hash::make('admin123'),
            'display_picture_link' => 'images/admin.png',
        ]);
        $this->call(ItemSeeder::class);
    }
}
