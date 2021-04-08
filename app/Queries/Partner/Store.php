<?php
/**
 * Created by PhpStorm.
 * User: eeremiev
 * Date: 24/07/2018
 * Time: 13:27
 */

namespace App\Queries\Partner;


use App\Partner;
use App\Traits\ImageUpload;

class Store
{
    use ImageUpload; //Using our created Trait to access inside trait method

    public function run($inputs){
        $partner = Partner::create([
            'name' => $inputs['name'],
            'description' => isset($inputs['description']) ? $inputs['description'] : null,
            'url' => $inputs['url'],
        ]);

        if (!empty($inputs['image'])) {
            try {
                $filePath = $this->UserImageUpload($inputs['image']); //Passing $data->image as parameter to our created method
                $partner->images()->create([ 'url' => $filePath ]);
            } catch (\Exception $e) {
                //Write your error message here
            }
        }
    }

}