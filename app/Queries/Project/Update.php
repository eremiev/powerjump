<?php
/**
 * Created by PhpStorm.
 * User: eeremiev
 * Date: 24/07/2018
 * Time: 13:27
 */

namespace App\Queries\Project;


use App\Project;
use Carbon\Carbon;
use App\Traits\ImageUpload;

class Update
{
    use ImageUpload; //Using our created Trait to access inside trait method


    public function run($id, $inputs)
    {
        $project = Project::find($id);
        $project->update([
            'title' => $inputs['title'],
            'description' => $inputs['description'],
            'when' => Carbon::parse($inputs['when'])
        ]);

        if ($inputs['image']) {
            try {
                $filePath = $this->UserImageUpload($inputs['image']); //Passing $data->image as parameter to our created method
                if (count($project->images()->get()) > 0)
                    $project->images()->update(['url' => $filePath]);
                else
                    $project->images()->create(['url' => $filePath]);
            } catch (\Exception $e) {
                logger($e->getMessage());
                //Write your error message here
            }
        }
    }

}