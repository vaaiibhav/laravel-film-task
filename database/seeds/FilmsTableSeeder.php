<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(App\Films::class,20)->create();
        //
    }
}
