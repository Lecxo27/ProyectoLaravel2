<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class JefesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            array(
                'nombre'=>'Monstro',
                'descripcion'=>'Monstro es una gran masa, teniendo solamente un rostro. Los grandes ojos de Monstro son completamente negros y brillantes al igual que Personaje Isaac',
                'piso'=>'Sotano, Sotano en llamas',
                'vida'=>250,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ),

            array(
                'nombre'=>'Steven',
                'descripcion'=>'Steven es una referencia al juego llamado "Time Fcuk" creado por Edmund, en el que una versión cronológica desplazada del personaje jugador, encuentra una pequeña persona que crece fuera de un lado de su cabeza, y le pone el nombre de Steven. ',
                'piso'=>'Sotano, Sotano en llamas',
                'vida'=>280,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ),

            array(
                'nombre'=>'Chub/Clásico',
                'descripcion'=>'Chub es una jefe gusano gigante que genera Chargers para luchar junto a ella. Chub también carga hacia el jugador. ',
                'piso'=>'Cuevas',
                'vida'=>320,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ),

        ];

        DB::table('Jefes')->insert($data);
    }
}
