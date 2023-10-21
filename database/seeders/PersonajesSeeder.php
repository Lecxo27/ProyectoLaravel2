<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PersonajesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            array(
                'nombre'=>'Isaac',
                'apariencia'=>'Personaje principal sin ninguna modificacion',
                'daño'=>3.50,
                'velocidad'=>1.00,
                'vida'=>3,
                'ItemDeInicio'=>1,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ),

            array(
                'nombre'=>'Cain',
                'apariencia'=>'Isaac con un parche en el ojo izquierdo y tiene lucky foot en su pie izquierdo',
                'daño'=>3.59,
                'velocidad'=>1.30,
                'vida'=>2,
                'ItemDeInicio'=>2,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ),

            array(
                'nombre'=>'Azazel',
                'apariencia'=>'Version oscura de isaac la cual posee alas cuerno y ojos rojos',
                'daño'=>5.72,
                'velocidad'=>1.25,
                'vida'=>3,
                'ItemDeInicio'=>3,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ),

            array(
                'nombre'=>'The lost',
                'apariencia'=>'Version fantasma de isaac la cual no posee vida de ningun tipo',
                'daño'=>4.20,
                'velocidad'=>1.00,
                'vida'=>3,
                'ItemDeInicio'=>4,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ),

        ];

        DB::table('personajes')->insert($data);
    }
}
