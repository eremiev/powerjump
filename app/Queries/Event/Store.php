<?php


namespace App\Queries\Event;

use DB;
use App\Event;

class Store
{
    public function run($inputs)
    {
        $translations = $inputs['translations'];

        DB::beginTransaction();

        $event = Event::create($inputs);

        foreach ($translations as $fields) {
            $event->translations()->create([
                'title' => $fields['title'],
                'description' => $fields['description'],
                'lang' => $fields['lang'],
            ]);
        }

        DB::commit();
    }
}