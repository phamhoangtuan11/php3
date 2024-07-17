<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cate_id=DB::table('categories') -> pluck('id') -> toArray();
        $pro=[];
        for($i=0;$i<10;$i++){
            $pro[]=[
                'name' => fake() -> name(),
                'image' => fake() -> image(),
                'description' => fake() -> text(),
                'price' => fake() -> randomNumber(),
                'quantity' => fake() -> randomNumber(),
                'category_id' =>  fake() -> randomElement($cate_id),
            ];
        }
        DB::table('products') -> insert($pro);
    }
}
