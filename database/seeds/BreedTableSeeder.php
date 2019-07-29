<?php

use Illuminate\Database\Seeder;
// use App\Breed;

class BreedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//cách 1
        factory(App\Breed::class, 5)->create();

        // //cách 2
        // Breed::create([
        // 	'name' => 'breed1',
        // ]);

        // //cách 3 
        // Breed::insert([
        // 	[
        // 		'name'=> 'breed1'
        // 	],
        // 	[
        // 		'name' => 'breed2'
        // 	]

        // ]);
    }
}
