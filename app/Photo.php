<?php

namespace App;


use Illuminate\Support\Facades\URL;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'photos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'path',
        'image_id',
        'image_type'
    ];

    protected $hidden = [
        'id',
        'image_id',
        'image_type',
        'created_at',
        'updated_at',
    ];

    /**
     * Get all of the owning image models.
     */
    public function imageable()
    {
        return $this->morphTo();
    }

    /**
     *  Set Item path to image.
     *
     * @param $value
     * @return string
     */
    public function getPathAttribute($value)
    {
        return URL::to('/images/event') . '/' . $value;
    }
}
