<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Todolist;

class TodolistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'content' => 'Todo1',
        ];
        Todolist::create($param);
        $param = [
            'content' => 'Todo2',
        ];
        Todolist::create($param);
        $param = [
            'content' => 'Todo3',
        ];
        Todolist::create($param);
    }
}
