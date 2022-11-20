<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('shops')->insert([
            [
            'owner_id' => 1,
            'name' => 'Shop name',
            'information' => 'shop informaiton will be here aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
            'filename' => '',
            'is_selling' => true,
            ],

            [
                'owner_id' => 2,
                'name' => 'Shop name',
                'information' => 'shop informaiton will be here aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'filename' => '',
                'is_selling' => true,
                ],

        ]);
    }
}
