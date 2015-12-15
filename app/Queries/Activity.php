<?php


namespace App\Queries;

use App\Photo;
use DB;
use File;
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
        DB::beginTransaction();

        $file->move(public_path() . '/images/' . $path . '/', $activity->id . '-' . $today . '-' . $file->getClientOriginalName());
        $activity->photos()->create([
            'path' => $activity->id . '-' . $today . '-' . $file->getClientOriginalName()
        ]);

        DB::commit();

    }

    /**
     * This method delete image from sending path.
     *
     * @param $activity - object
     * @param $path - local directory
     */
    public function removeImage($activity, $path)
    {
        DB::beginTransaction();

        $image = Photo::where('imageable_id', $activity->id)->where('imageable_type', $path)->first();
        $filename = explode('/', $image['path']);
        $image->delete();
        File::Delete(public_path() . '/images/' . $path . '/' . end($filename));

        DB::commit();

    }
}