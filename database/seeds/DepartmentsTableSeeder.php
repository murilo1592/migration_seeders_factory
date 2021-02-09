<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    public function run()
    {
        factory(\LaraDev\departments::class, 10)->create();
    }
}
