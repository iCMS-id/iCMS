<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('permissions')->insert(['permission' => 'user.admin']);
        DB::table('roles')->insert(['role' => 'administrator', 'is_admin' => true]);
        DB::table('roles')->insert(['role' => 'user', 'is_admin' => false]);

        DB::table('permission_role')->insert(['role_id' => 1, 'permission_id' => 1]);

        DB::table('users')->insert(['role_id' => 1, 'name' => 'Administrator', 'email' => 'admin@admin.com', 'password' => bcrypt('admin')]);
        DB::table('users')->insert(['name' => 'User', 'email' => 'user@user.com', 'password' => bcrypt('user')]);
    }
}
