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
		$faker = \Faker\Factory::create();

		/**
		 * Génération de 3 admins
		 */
		for ($i = 0; $i < 3; $i++) {
			DB::table('users')->insert([
				"name" => "johndoe$i",
				"email" => "john$i@doe.com",
				"password" => bcrypt('0000'),
				"role" => User::ROLE_ADMIN,
				"activated_at" => Carbon::now()
			]);
		}

		// Création de 10 Utilisateur en attente
		for ($i = 0; $i < 10; $i++) {
			DB::table('users')->insert([
				"name" => $faker->name,
				"email" => $faker->email,
				"password" => bcrypt($faker->password)
			]);
		}

		// Création de 10 Utilisateur accepté
		for ($i = 0; $i < 10; $i++) {
			DB::table('users')->insert([
				"name" => $faker->name,
				"email" => $faker->email,
				"password" => bcrypt($faker->password),
				"role" => User::ROLE_MEMBER
			]);
		}
	}
}
