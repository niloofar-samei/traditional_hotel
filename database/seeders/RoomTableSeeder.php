<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0;$i<15;$i++) {

            \App\Models\Room::create([
                "room_type" =>
                    if($i == 4){"single_bed"}elseif($i == 9){"twin_bed"}else{"third_bed"},
                }
                "status"    =>  0]);
        }   
    }
}
