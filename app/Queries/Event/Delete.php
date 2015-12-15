<?php


namespace App\Queries\Event;

use App\Queries\Activity;

class Delete extends Activity
{
    /**
     * Run delete logic.
     *
     * @param $event
     */
    public function run($event)
    {
        $this->removeImage($event, 'event');
        $event->photos()->delete();
        $event->projects()->detach();
        $event->delete();
    }
}