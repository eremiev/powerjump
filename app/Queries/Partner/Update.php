<?php
/**
 * Created by PhpStorm.
 * User: eeremiev
 * Date: 24/07/2018
 * Time: 13:27
 */

namespace App\Queries\Partner;


use App\Partner;

class Update
{
    public function run($id, $inputs){
        $partner = Partner::find($id);
        $partner->update([
            'name' => $inputs['name'],
            'description' => $inputs['description'],
        ]);
    }

}