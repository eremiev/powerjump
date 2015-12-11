<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventText extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'event_texts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'event_id',
        'lang',
        'title',
        'description'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
