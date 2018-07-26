<?php
/**
 * Created by PhpStorm.
 * User: eeremiev
 * Date: 24/07/2018
 * Time: 13:27
 */

namespace App\Queries\Partner;


use App\Partner;

class Store
{
    public function run($inputs){
        Partner::create([
            'name' => $inputs['name'],
            'description' => $inputs['description'],
        ]);
    }

}