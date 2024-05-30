<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        DB::table('users')->insert([
            'name' => 'saamouden',
            'email' => 'saadmouden24@gmail.com',
            'email_verified_at' => \Carbon\Carbon::now(),
            'password' => Hash::make('Admin.1234'), 
            'remember_token' => Str::random(10),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
            'usertype' => 'admin',
        ]);
    }


    /**
     * Reverse the migrations.
     */
    public function down()
    {
        DB::table('users')->where('email', 'saadmouden24@gmail.com')->delete();
    }
};
