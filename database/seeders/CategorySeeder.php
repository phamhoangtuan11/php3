<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cate=[];
        for($i=0;$i<10;$i++){
            $cate[]=[
                'name' => fake() -> name(), 
            ];
        }
        DB::table('categories') -> insert($cate);
    }
}
