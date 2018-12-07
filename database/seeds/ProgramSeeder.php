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
         $program->name="CAJERO COMERCIAL - 3 meses";
         $program->description="Trabaja como cajero en centros comerciales del sector retail.
         Sede Lima, sede Huancayo, sede Huánuco, sede Iquitos, sede Pucallpa, sede Tarapoto.";

         $program->icon="ico-cajero-promotor.png";
         $program->save();

         $program= new  App\Program();
         $program->name="-  CAJERO PROMOTOR DE SERVICIOS FINANCIEROS Y COMERCIALES - 6 meses";

         $program->description="Podrás desempeñarte como cajero en negocios, comercios, empresas, entidades bancarias y más.
                Sedes Lima, sede Huancayo, sede Huánuco, sede Iquitos, sede Pucallpa, sede  Tarapoto.";
         $program->icon="ico-asistente-contable.png";
         $program->save();

         $program= new  App\Program();
         $program->name="ASISTENTE CONTABLE - 6 meses";
         $program->description="Realiza todo tipo de análisis financieros y contables de manera eficiente.
            Sedes Lima, sede Huánuco, sede Iquitos, sede Pucallpa, sede Tarapoto.";
         $program->icon="ico-cajero-comercial.png";
         $program->save();

         $program= new  App\Program();
         $program->name="GESTOR DE CRÉDITOS Y COBRANZAS - 6 meses";
         $program->description="Gestiona de manera efectiva créditos y cobranzas para todo tipo de negocios.
            Sedes Lima, sede Huancayo, sede Huánuco, sede Iquitos, sede Pucallpa, sede Tarapoto.";
         $program->icon="ico-gestor-ventas.png";
         $program->save();

         $program= new  App\Program();
         $program->name="-  ASISTENTE DE GERENCIA - 6 meses";

         $program->description="Adquiere los conocimientos necesarios para apoyar a los gerentes.
            Sedes Lima";
         $program->icon="ico-asistente-gerencia.png";
         $program->save();

          $program= new  App\Program();
         $program->name="-  GESTOR DE VENTAS - 6 meses";
         $program->description="Aprende procedimientos y técnicas de venta efectivas.
            Sedes Lima, Pucallpa.";
         $program->icon="ico-gestor-credito.png";
         $program->save();



    }
}
