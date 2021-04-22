<?php

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
        $param = [
            'name' => 'taro',
            'mail' => 'taro@yamada.jp',
            'age' => 12,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'hanako',
            'mail' => 'hanako@yamada.jp',
            'age' => 45,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'satiko',
            'mail' => 'satiko@yamada.jp',
            'age' => 53,
        ];
        DB::table('people')->insert($param);
    }
}