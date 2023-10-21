<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class EnemigosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            array(
                'nombre'=>'Gaper',
                'descripcion'=>'Un Isaac que dispara lagrimas de sangre y se mueve lento',
                'piso'=>'Sotano 1 y 2',
                'vida'=>10,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ),

            array(
                'nombre'=>'Clot',
                'descripcion'=>'Pedazo de masa oscura la cual se arrastra por el suelo y dispara lagrimas negras de las cuatro diagonales',
                'piso'=>'Sotano, Cuevas, Catacumbas',
                'vida'=>15,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ),

            array(
                'nombre'=>'Evil Twin',
                'descripcion'=>'Una version demonica de isaac la cual imita como un espejo las acciones del jugador',
                'piso'=>'Sheol',
                'vida'=>20,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ),

            array(
                'nombre'=>'Holy Bony',
                'descripcion'=>'Version mejorada de los Bony el cual dispara lagrimas de hueso benditas tiene una cabeza mas grande que el bony',
                'piso'=>'Catedral',
                'vida'=>60,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ),

        ];

        DB::table('enemigos')->insert($data);

    }
}
