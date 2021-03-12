<?php

use App\City;
use App\School;
use App\faculty;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacultyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $villes = ['Douala', 'Yaoundé', 'Bamenda', 'Bafousam'];
        $filiéres = ['Informatique', 'Médecine', 'ESF', 'Geni civil'];
      faculty::create([
          'name' => 'Informatique'
      ]);
      foreach($villes as $ville){
        City::create([
            'name' => $ville
        ]);
    }
      foreach($filiéres as $filiére){
        faculty::create([
            'name' => $filiére
        ]);
    }
    School::create([
        'name' => 'Enset',
        'city_id' => 1
    ]);
      $schools = School::all();
      $faculties = faculty::all();
      foreach($schools as $school){
          foreach($faculties as $faculty){
              DB::table('faculty_school')->insert([
                  'faculty_id' => $faculty->id,
                  'school_id'  => $school->id
              ]);
          }
      }
    }
}