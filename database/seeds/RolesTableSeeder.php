<?php

use App\Role;
use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->delete();
        Role::create(["name" => "member"]);
        Role::create(["name" => "admin"]);


    }
}
