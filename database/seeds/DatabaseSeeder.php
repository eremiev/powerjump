<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(OwnerSeeder::class);
         $this->call(ProjectSeeder::class);
         $this->call(EventSeeder::class);
         $this->call(PartnerSeeder::class);
    }
}
