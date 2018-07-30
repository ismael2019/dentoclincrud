<?php

use Illuminate\Database\Seeder;
use App\Treatment;
class TreatmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $treatment = new Treatment();
         $treatment->name = 'Ortodoncia';
      $treatment->save();
      $treatment = new Treatment();
         $treatment->name = 'Endodoncia';
      $treatment->save();
      $treatment = new Treatment();
         $treatment->name = 'Periodoncia';
      $treatment->save();
      $treatment = new Treatment();
         $treatment->name = 'Protesis';
      $treatment->save();
      $treatment = new Treatment();
         $treatment->name = 'Implantologia';
      $treatment->save();
      $treatment = new Treatment();
         $treatment->name = 'Estetica Dental';
      $treatment->save();
      $treatment = new Treatment();
         $treatment->name = 'Balnqueamiento Dental';
      $treatment->save();
      $treatment = new Treatment();
         $treatment->name = 'Rehabilitacion Oral';
      $treatment->save();
      $treatment = new Treatment();
         $treatment->name = 'Cirugia Bucal';
      $treatment->save();
    }
}
