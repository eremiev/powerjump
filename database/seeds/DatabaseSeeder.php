<?php


use App\Member;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Role;
use App\User;
use App\City;
use App\CityTranslation;
use App\Country;
use App\CountryTranslation;
use Faker\Factory as Faker;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Disable mass assignment and foreign key protection.
        Model::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Production Seeders
        $this->call(RoleSeeder::class);
        $this->call(OwnerSeeder::class);

        // Enable mass assignment and foreign key protection.
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        Model::reguard();

    }
}
