<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades;

class InsertUserAdmin extends Migration
{
    public function up()
    {
        $email = env('ADMIN_EMAIL', 'murilomha92@live.com');
        $password = bcrypt(env('ADMIN_PASSWORD', 'murilomattos'));

        DB::table('users')->insert([
            'name' => 'Murilo',
            'email' => $email,
            'password' => $password
        ]);
    }

    public function down()
    {
        $email = env('ADMIN_EMAIL', 'murilomha92@live.com');
        DB::delete('DELETE FROM users WHERE email = ?', [$email]);
    }
}
