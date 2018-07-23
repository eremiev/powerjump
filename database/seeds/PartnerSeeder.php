<?php

use App\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $partners = [
            [
                'name' => 'Wild Art',
                'description' => 'Създаден с единствената цел, да предложи най-уникалните и предизвикателни продукти, които някога сте си представяли и да ги достави до вашите домове!'
            ]
        ];

        Partner::truncate();

        foreach ($partners as $partner) {
            Partner::create([
                'name' => $partner['name'],
                'description' => $partner['description'],
            ]);
        }

    }
}
