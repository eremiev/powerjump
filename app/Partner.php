<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'url'
    ];

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
