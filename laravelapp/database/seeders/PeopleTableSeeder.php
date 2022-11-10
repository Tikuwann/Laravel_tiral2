<?php


namespace Database;
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->insert([
            'name'=> 'taro',
            'mail'=> 'taro@yamada.jp',
            'age' => 12,

        ]);

        DB::table('people')->insert([
            'name'=> 'sato',
            'mail'=> 'sato@yamada.jp',
            'age' => 33,

        ]);

        DB::table('people')->insert([
            'name'=> 'jiro',
            'mail'=> 'jiro@yamada.jp',
            'age' => 55,

        ]);
        //
    }
}
