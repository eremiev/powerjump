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
        $translations = $inputs['translations'];
        $images = $inputs['image'];

        DB::beginTransaction();
        if (isset($inputs['project_id'])) {
            $project = Project::find($inputs['project_id']);
            $event = $project->events()->create([
                'date' => $inputs['date']
            ]);

        } else {

            $event = Event::create([
                'date' => $inputs['date']
            ]);
        }

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