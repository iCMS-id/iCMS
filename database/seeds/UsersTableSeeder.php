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
		DB::table('roles')->insert(['role' => 'administrator', 'description' => 'Administrator roles', 'is_admin' => true]);
		DB::table('roles')->insert(['role' => 'user', 'description' => 'User roles', 'is_admin' => false]);

		DB::table('permissions')->insert(['permission' => 'user.admin', 'description' => 'Admin permission']);

		DB::table('users')->insert(['name' => 'Administrator', 'email' => 'admin@admin.com', 'password' => bcrypt('admin'), 'is_active' => true]);
		DB::table('users')->insert(['name' => 'User', 'email' => 'user@user.com', 'password' => bcrypt('user'), 'is_active' => true]);

		DB::table('role_user')->insert(['user_id' => 1, 'role_id' => 1]);
		DB::table('role_user')->insert(['user_id' => 2, 'role_id' => 2]);

		DB::table('permission_role')->insert(['permission_id' => 1, 'role_id' => 1]);
	}
}
