<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserRoleTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('user_role')->delete();

        $users = User::all()->lists('id');
        $role = Role::where('name', '=', 'member')->first();

        foreach($users as $user) {

            DB::table('user_role')->insert([
                'user_id' => $user,
                'role_id' => $role->id]);
        }

        $user = User::where('username', '=', 'admin')->first();
        $role = Role::where('name', '=', 'admin')->first();

        DB::table('user_role')->insert([
           'user_id' => $user->id,
           'role_id' => $role->id
        ]);
    }
}
