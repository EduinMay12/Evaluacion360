<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompetenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('competencias')->insert([
            'nombre' => 'Liderazgo con Apertura',
            'descripcion' => 'Infunde confianza y seguridad a traves de lo que hace y lo que dice: trata a lo demas con dignidad, justicia y respeto',
            //nivel basico
            'basicocorto1' =>'Respeta plazos y cumple compromisos',
            'basicocorto2' =>'Gestiona efectivamente su tiempo',
            'basicocorto3' =>'Argumenta sus preocupaciones',
            'basicoaccion1' =>'Respeta los plazos, responde a tiempo, sigue hasta el final, los compromisos y los cumple',
            'basicoaccion2' =>'Utiliza herramientas y procesos para gestionar y organizar el tiempo',
            'basicoaccion3' =>'Expresa y argumenta sus preocupaciones sobre espectativas reales',
            //nivel calificado
            'calificadocorto1' =>'Delega tareas de personas adecuadas',
            'calificadocorto2' =>'Desarrolla profesionalmente a colaboradores',
            'calificadocorto3' =>'Asigna e intercambia funciones en le equipo',
            'calificadoaccion1' =>'Delega tareas y responsabilidades en las personas adecuadas',
            'calificadoaccion2' =>'Marca acciones concretas para el desarrollo profesional de sus colaboradores',
            'calificadoaccion3' =>'Asigna diferentes responsabilidades a los miembros de su equipo intercambiando',
            //nivel experimentado
            'experimentadocorto1' => 'Transmite objetivos con motivacion',
            'experimentadocorto2' => 'Transmite a su equipo la informacion necesaria',
            'experimentadocorto3' => 'Tranquiliza y motiva en momentos dificiles',
            'experimentadoaccion1' => 'Transmite objetivos y derectrices de manera motivante para el equipo',
            'experimentadoaccion2' => 'Transmite a su equipo la informacion necesaria para la gestion y la informacion',
            'experimentadoaccion3' => 'En momentos delicados transmite ilusion y tranquilidad para conseguir la motivacion'
        ]);
    }
}
