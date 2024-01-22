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

        //\Illuminate\Support\Facades\DB::table('rooms')->truncate();
        for($i=0;$i<30;$i++) {

            if($i < 10) {
                \App\Models\Room::create([
                    "room_type" => "single_bed",
                    //if($i == 4){"single_bed"}elseif($i == 9){"twin_bed"}else{"third_bed"},
                    "status"    =>  0]);
            }elseif($i < 20) {
                \App\Models\Room::create([
                    "room_type" => "twin_bed",
                    //if($i == 4){"single_bed"}elseif($i == 9){"twin_bed"}else{"third_bed"},
                    "status"    =>  0]);
            }else{
                \App\Models\Room::create([
                    "room_type" => "third_bed",
                    //if($i == 4){"single_bed"}elseif($i == 9){"twin_bed"}else{"third_bed"},
                    "status"    =>  0]);
            }
        }   
    }
}
