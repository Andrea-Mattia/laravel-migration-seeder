<?php

use Illuminate\Database\Seeder;
use App\Package;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 20; $i++) { 
            // Record creation
            $new_package = new Package();

            // Columns population
            $new_package->state = 'U.S.A';
            $new_package->city = 'Happy City';
            $new_package->address = 'Sunset Boulevard ' . rand(1, 100);
            $new_package->structure_name = 'Hola Hotel N° ' . rand(1, 100);
            $new_package->type_of_structure = 'Hotel';
            $new_package->square_meters = rand(50, 300);
            $new_package->rooms = rand(1, 10);
            $new_package->description = 'This is the description of the package';
            $new_package->activities = 'This is the list of all activities included in the package';
            $new_package->price_for_night = rand(40, 500);
            
            // Saving record to db
            $new_package->save();
        }
    }
}
