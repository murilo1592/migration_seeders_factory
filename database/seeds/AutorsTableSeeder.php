<?php

use Illuminate\Database\Seeder;

class AutorsTableSeeder extends Seeder
{
    public function run()
    {
        factory(\LaraDev\Autor::class, 10)->create();
    }
}
