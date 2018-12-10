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


         $program= new  App\Program();
         $program->name="Cajero Comercial";
         $program->description="Conviértete en cajero de los principales centros comerciales del país.
         Duración: 3 meses.
         Solo en sedes Lima, Huancayo, Huánuco, Iquitos, Pucallpa y Tarapoto.";

         $program->icon="ico-cajero-promotor.png";
         $program->save();

         $program= new  App\Program();
         $program->name="Cajero Promotor de Servicios Financieros y Comerciales";

         $program->description="Podrás desempeñarte como cajero en negocios, comercios, empresas, entidades bancarias y más.
         Duración: 6 meses.
         Solo en sedes Lima, Huancayo, Huánuco, Iquitos, Pucallpa y Tarapoto.";
         $program->icon="ico-asistente-contable.png";
         $program->save();

         $program= new  App\Program();
         $program->name="Asistente Contable";
         $program->description="Realiza todo tipo de análisis financieros y contables de manera eficiente.
         Duración: 6 meses.
         Solo en sedes Lima, Huánuco, Iquitos, Pucallpa y Tarapoto.";
         $program->icon="ico-cajero-comercial.png";
         $program->save();

         $program= new  App\Program();
         $program->name="Gestor de créditos y cobranzas";
         $program->description="Gestiona de manera efectiva créditos y cobranzas para todo tipo de negocios.
         Duración: 6 meses.
         Solo en sedes Lima, Huancayo, Huánuco, Iquitos, Pucallpa y Tarapoto.";
         $program->icon="ico-gestor-ventas.png";
         $program->save();

         $program= new  App\Program();
         $program->name="Asistente de Gerencia";

         $program->description="Adquiere todas las herramientas para apoyar a la alta gerencia de manera eficiente.
         Duración: 6 meses.
         Solo en Lima";
         $program->icon="ico-asistente-gerencia.png";
         $program->save();

         $program= new  App\Program();
         $program->name="Gestor de Ventas";
         $program->description="Domina procedimientos y técnicas de venta efectivas
         Duración: 6 meses
         Solo en Lima y Pucallpa.";
         $program->icon="ico-gestor-credito.png";
         $program->save();



    }
}
