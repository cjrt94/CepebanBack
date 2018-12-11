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
        $career1->name="Adm. De negocios bancarios y financieros";
        $career1->description="Gestiona y desarrolla soluciones con visión global a todos los procesos de la banca y finanzas.
        4 certificaciones progresivas de Cepeban y el Ministerio de Educación.
        <strong>Solo en sedes Lima, Huancayo, Pucallpa y Tarapoto.<strong>";
        $career1->icon="ico-administracion-bancaria.png";
        $career1->save();

        $career1= new   App\Career();
        $career1->name="Administración de Empresas";
        $career1->description="Plantea propuestas innovadoras con visión de liderazgo a empresas y emprendimientos.
        3 certificaciones progresivas del Ministerio de Educación.
        <strong>Solo en sedes Lima y Huancayo.</strong>";
        $career1->icon="ico-administracion-empresas.png";
        $career1->save();


         $career1= new   App\Career();
        $career1->name="Contabilidad, Finanzas y Auditoría";
        $career1->description="Gestiona operaciones contables y brinda soluciones acertadas en temas financieros y tributarios.
        3 certificaciones progresivas del Ministerio de Educación.
        <strong>Solo en sedes Lima, Huancayo y Tarapoto.</strong>";
        $career1->icon="ico-contabilidad-finanzas-auditoria.png";
        $career1->save();


    }
}
