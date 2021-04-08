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

class Update
{
    use ImageUpload; //Using our created Trait to access inside trait method


    public function run($id, $inputs){
        $partner = Partner::find($id);
        $partner->update([
            'name' => $inputs['name'],
            'description' => isset($inputs['description']) ? $inputs['description'] : null,
            'url' => $inputs['url'],
        ]);

        if (!empty($inputs['image'])) {
            try {
                $filePath = $this->UserImageUpload($inputs['image']); //Passing $data->image as parameter to our created method
                if (count($partner->images()->get()) > 0)
                    $partner->images()->update(['url' => $filePath]);
                else
                    $partner->images()->create(['url' => $filePath]);
            } catch (\Exception $e) {
                logger($e->getMessage());
                //Write your error message here
            }
        }
    }

}