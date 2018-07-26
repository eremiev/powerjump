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

class Update
{
    public function run($id, $inputs){
        $project = Project::find($id);
        $project->update([
            'title' => $inputs['title'],
            'description' => $inputs['description'],
            'when' => Carbon::parse($inputs['when'])
        ]);
    }

}