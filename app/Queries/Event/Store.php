<?php
/**
 * Created by PhpStorm.
 * User: eeremiev
 * Date: 24/07/2018
 * Time: 13:27
 */

namespace App\Queries\Event;


use App\Event;
use Carbon\Carbon;
use App\Traits\ImageUpload;

class Store
{
    use ImageUpload; //Using our created Trait to access inside trait method

    public function run($inputs)
    {
        $event = Event::create([
            'title' => $inputs['title'],
            'description' => $inputs['description'],
            'when' => Carbon::parse($inputs['when']),
            'project_id' => $inputs['project_id']
        ]);

        if ($inputs['image']) {
            try {
                $filePath = $this->UserImageUpload($inputs['image']); //Passing $data->image as parameter to our created method
                $event->images()->create([ 'url' => $filePath ]);
            } catch (\Exception $e) {
                //Write your error message here
            }
        }
    }

}