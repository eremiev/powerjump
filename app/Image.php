<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    protected $fillable = [
        'url',
        'imageable_id',
        'imageable_type',
    ];

    /**
     * Get the owning imageable model.
     */

    public function imageable()
    {
        return $this->morphTo();
    }
}
