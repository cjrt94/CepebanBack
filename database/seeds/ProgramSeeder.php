<?php

use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         App\Program::truncate();

         $program= new  App\Program();
         $program->name="CAJERO PROMOTOR DE SERVICIOS FINANCIEROS Y COMERCIALES";
         $program->description="Obtén todo lo necesario para realizar las funciones de cajero en todo tipo de negocios, comercios, empresas y entidades bancarias.";
         $program->icon="ico-cajero-promotor.png";
         $program->save();

         $program= new  App\Program();
         $program->name="ASISTENTE CONTABLE";
         $program->description="Prepárate para ser parte de las soluciones del proceso contable, realiza análisis financieros y promueve soluciones eficientes.";
         $program->icon="ico-asistente-contable.png";
         $program->save();

         $program= new  App\Program();
         $program->name="CAJERO COMERCIALES";
         $program->description="Adquiere todos los conocimientos necesarios para realizar las labores de caja en centros comerciales y del sector retail.";
         $program->icon="ico-cajero-comercial.png";
         $program->save();

         $program= new  App\Program();
         $program->name="GESTOR DE VENTAS";
         $program->description="Desarrolla habilidades para realizar labores propias del área comercia y ventas. 
			 Procedimientos, técnicas y más para ventas efectivas.";
         $program->icon="ico-gestor-ventas.png";
         $program->save();

         $program= new  App\Program();
         $program->name="ASISTENTE DE GERENCIA";
         $program->description="Maneja técnicas y herramientas necesarias en banca, gestión y finanzas para realizar funciones de apoyo a la gerencia.";
         $program->icon="ico-asistente-gerencia.png";
         $program->save();

          $program= new  App\Program();
         $program->name="GESTOR DE CRÉDITO Y COBRANZAS";
         $program->description="Adquiere los conocimientos necesarios para gestionar de manera efectiva créditos y cobranzas en el entorno competitivo actual.";
         $program->icon="ico-gestor-credito.png";
         $program->save();



    }
}
