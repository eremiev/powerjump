<?php


namespace App\Queries\Event;

use DB;
use App\Event;
use App\Queries\Activity;

class Update extends Activity
{
    public function run($inputs, $eventId)
    {
        DB::beginTransaction();

        $translations = $inputs['translations'];
        $file = $inputs['file'];
        $event = Event::findOrFail($eventId);

        if (isset($file)) {
            $this->removeImage($event, 'event');
            $this->storeImage($event, $file, 'event');
        }

        $event->update($inputs);
        $event->projects()->sync($inputs['projects']);

        if (isset($translations)) {
            foreach ($translations as $fields) {
                $event->translations()->update([
                    'title' => $fields['title'],
                    'description' => $fields['description'],
                    'lang' => $fields['lang'],
                ]);
            }
        }

        DB::commit();

    }
}