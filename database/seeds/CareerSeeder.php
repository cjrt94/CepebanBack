<?php

use Illuminate\Database\Seeder;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $career1= new   App\Career();
        $career1->name="ADMINISTRACIÓN DE NEGOCIOS BANCARIOS Y FINANCIEROS";
        $career1->description="Gestiona, identifica y brinda soluciones con visión global a los distintos procesos que se presentan en el mundo de la banca.";
        $career1->icon="ico-administracion-bancaria.png";
        $career1->save();

        $career1= new   App\Career();
        $career1->name="ADMINISTRACIÓN DE EMPRESAS";
        $career1->description="Gestiona, identifica y brinda soluciones con visión global a los distintos procesos que se presentan en el mundo de la banca.";
        $career1->icon="ico-administracion-empresas.png";
        $career1->save();


         $career1= new   App\Career();
        $career1->name="CONTABILIDAD FINANZAS Y AUDITORÍA";
        $career1->description="Gestiona operaciones contables, analiza y brinda soluciones acertadas buscando un impacto positivo en temas financieros y tributarios.";
        $career1->icon="ico-contabilidad-finanzas-auditoria.png";
        $career1->save();


    }
}
