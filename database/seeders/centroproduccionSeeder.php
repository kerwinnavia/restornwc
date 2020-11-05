<?php

namespace Database\Seeders;

use App\Models\centroproduccion;
use Illuminate\Database\Seeder;

class centroproduccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $centroproduccion = new centroproduccion();
        $centroproduccion->id_suc = 1;
        $centroproduccion->detalle = "Cocina";
        $centroproduccion->activo = 1;

        $centroproduccion->save();
    }
}
