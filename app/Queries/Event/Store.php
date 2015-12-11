<?php


namespace App\Queries\Event;

use DB;
use App\Event;
use App\Queries\Activity;

class Store extends Activity
{
    public function run($inputs)
    {
        $translations = $inputs['translations'];
        $images = $inputs['images'];

        DB::beginTransaction();

        $event = Event::create($inputs);

        foreach ($translations as $fields) {
            $event->translations()->create([
                'title' => $fields['title'],
                'description' => $fields['description'],
                'lang' => $fields['lang'],
            ]);
        }
//        foreach ($images as $image) {
            $this->storeImage($event, $images, 'event');
//        }

        DB::commit();
    }
}