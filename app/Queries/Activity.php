<?php


namespace App\Queries;

use Carbon\Carbon;

class Activity
{
    /**
     * Store Image file.
     *
     * @param $activity
     * @param $file
     * @param $path
     */
    protected function storeImage($activity, $file, $path)
    {
        $now = Carbon::now();
        $today = $now->format('Y-m-d');
        $file->move(public_path() . '/images/' . $path . '/', $activity->id . '-' . $today . '-' . $file->getClientOriginalName());

        $activity->photos()->create([
            'type' => $path,
            'filename' => $activity->id . '-' . $today . '-' . $file->getClientOriginalName()
        ]);
    }
}