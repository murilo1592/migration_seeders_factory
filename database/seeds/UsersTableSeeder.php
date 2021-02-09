<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\LaraDev\User::class, 5)->create();
    }
}
