<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectText extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'project_texts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'project_id',
        'title',
        'description'
    ];
}
