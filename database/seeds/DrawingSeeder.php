<?php

use Illuminate\Database\Seeder;

class DrawingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//use the model factory to create 50 instances and persist them to the db
       factory(App\Drawing::class, 50)->create();
    }
}
