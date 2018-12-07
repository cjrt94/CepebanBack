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
        App\Career::truncate();

        $career1= new   App\Career();
        $career1->name="-   Administración de Negocios Bancarios y Financieros – 3 años";
        $career1->description="Gestiona, identifica y aporta soluciones con visión global a los distintos procesos del mundo de la banca.
            Sedes Lima, sede Huancayo, sede Pucallpa, sede Tarapoto";
        $career1->icon="ico-administracion-bancaria.png";
        $career1->save();

        $career1= new   App\Career();
        $career1->name="-   Administración de Empresas - 3 años";
        $career1->description="Plantea propuestas innovadoras con visión de liderazgo a empresas y emprendimientos. 
            Sedes Lima, sede Huancayo";
        $career1->icon="ico-administracion-empresas.png";
        $career1->save();


         $career1= new   App\Career();
        $career1->name="-   Contabilidad, Finanzas y Auditoría – 3 años";
        $career1->description="Gestiona operaciones contables y brinda soluciones acertadas en temas financieros y tributarios.
            Sedes Lima, sede Huancayo, sede Tarapoto";
        $career1->icon="ico-contabilidad-finanzas-auditoria.png";
        $career1->save();

 
    }
}
