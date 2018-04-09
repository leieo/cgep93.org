<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		for ($i = 0; $i < 10; $i++) {
			DB::table('users')->insert([
				"name" => "johndoe$i",
				"email" => "john$i@doe.com",
				"password" => bcrypt('0000'),
				"role" => User::ROLE_ADMIN,
				"activated_at" => Carbon::now()
			]);
		}
	}
}
