<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        factory(\LaraDev\Posts::class, 50)->create();
    }
}
