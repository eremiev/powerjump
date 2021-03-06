<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'when',
        'category'
    ];

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function events(){

        return $this->hasMany(Event::class);
    }

}
