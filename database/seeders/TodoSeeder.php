<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //若報錯 composer dump-autoload
        //會在 Factor 上產生 10 筆 Model 資料,透過函式 create()產生資料到資料庫上
        \App\Models\Todo::factory(10)->create();

    }
}
