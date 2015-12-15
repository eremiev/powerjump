<?php


namespace App\Queries\Event;

use App\Project;
use DB;
use App\Event;
use App\Queries\Activity;

class Store extends Activity
{
    public function run($inputs)
    {
        DB::beginTransaction();

        $translations = $inputs['translations'];
        $file = $inputs['file'];

        $event = Event::create([
            'date' => $inputs['date']
        ]);
        $event->projects()->attach($inputs['projects']);

        foreach ($translations as $fields) {
            $event->translations()->create([
                'title' => $fields['title'],
                'description' => $fields['description'],
                'lang' => $fields['lang'],
            ]);
        }

        $this->storeImage($event, $file, 'event');


        DB::commit();
    }
}