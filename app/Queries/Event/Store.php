<?php
/**
 * Created by PhpStorm.
 * User: eeremiev
 * Date: 24/07/2018
 * Time: 13:27
 */

namespace App\Queries\Event;


use App\Event;
use Carbon\Carbon;

class Store
{
    public function run($inputs){
        Event::create([
            'title' => $inputs['title'],
            'description' => $inputs['description'],
            'when' => Carbon::parse($inputs['when']),
            'project_id' => $inputs['project_id']
        ]);
    }

}