<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Objetos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            array(
                'ItemID'=>42,
                'nombre'=>'God Head',
                'descripcion'=>'Te proporciona lagrimas tele-dirigidas, aumento de daño de x1.2, y las lagrimas tienen una area alrededor que hace daño',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ),

            array(
                'ItemID'=>12,
                'nombre'=>'Soy milk',
                'descripcion'=>'Reduce en gran parte el daño, pero aumenta al maximo el numero de lagrimas',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ),

            array(
                'ItemID'=>27,
                'nombre'=>'Abel',
                'descripcion'=>'Hace aparecer a una cabeza de familiar la cual dispara en la diireccion del personaje',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ),

        ];

        DB::table('Objetos')->insert($data);
    }
}
