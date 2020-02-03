<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $dataArray = [];
        for ($i = 0; $i < 20; $i++) {
            array_push($dataArray, [
                'name' => Str::random(10),
                'dob' => date("Y-m-d", mt_rand(1, time())),
                'email' => Str::random(10).'@gmail.com',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
        DB::table('manager_customer')->insert($dataArray);
    }
}
