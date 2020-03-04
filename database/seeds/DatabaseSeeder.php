<?php

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
        DB::table('users')->insert([
            'name' => 'Rácz Péter',
            'email' =>'peter96710@gmail.com',
            'password' => Hash::make('12345678'),
            'zip' => '3860',
            'city' => 'Encs',
            'street' => 'Rozmaring út 44',
            'phone_number' => '06304561664'
        ]);

        DB::table('users')->insert([
            'name' => 'peter',
            'email' =>'peter@eclick.hu',
            'password' => Hash::make('12345678'),
            'zip' => '3860',
            'city' => 'Encs',
            'street' => 'Rozmaring út 44',
            'phone_number' => '06304561664',
        ]);

        DB::table('rooms')->insert([
            'name' => 'Exit The Room',
            'available' =>'1',
            'head' => '9',
            'price' => '3860',
        ]);

        DB::table('rooms')->insert([
            'name' => 'Escape From Tarkov',
            'available' =>'1',
            'head' => '13',
            'price' => '7500',
        ]);

        DB::table('rooms')->insert([
            'name' => 'Szabadulószoba',
            'available' =>'0',
            'head' => '3',
            'price' => '15000',
        ]);

    }
}
