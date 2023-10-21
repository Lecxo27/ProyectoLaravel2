<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class TrinketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            array(
                'nombre'=>'Cancer',
                'descripcion'=>'Proporciona dos puntos mas a las lagrimas por segundo',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ),

            array(
                'nombre'=>'Soy milk',
                'descripcion'=>'Reduce en gran parte el daño, pero aumenta al maximo el numero de lagrimas',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ),

            array(
                'nombre'=>'',
                'descripcion'=>'Te proporciona lagrimas tele-dirigidas, aumento de daño de x1.2, y las lagrimas tienen una area alrededor que hace daño',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ),

        ];

        DB::table('trinkets')->insert($data);
    }
}
