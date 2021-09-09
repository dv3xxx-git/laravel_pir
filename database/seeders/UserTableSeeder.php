<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Автор неизвестен',
                'email' => 'unknown@email.ru',
                'password' => bcrypt(Str::random(15)),
            ],
            [
                'name' => 'Автор',
                'email' => 'fraer@email.ru',
                'password' => bcrypt(123123),
            ],
        ];

        DB::table('users')->insert($data);
    }
}
