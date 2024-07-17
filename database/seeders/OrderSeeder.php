<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user_id=DB::table('user') -> pluck('id') -> toArray();
        $od=[];
        for($i=0;$i<10;$i++){
            $od[]=[
                'user_id' =>  fake() -> randomElement($user_id),
                'order_date' => fake() -> dateTimeThisYear(),
                'total_amount' => fake() -> randomNumber(),
            ];
        }
        DB::table('order') -> insert($od);
    }
}
