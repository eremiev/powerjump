<?php


namespace App;

use Illuminate\Database\Eloquent\Model;


class CityTranslation extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'city_translations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lang',
        'name',
    ];

    /**
     * Fields that will not be shown in response.
     *
     * @var array
     */
    protected $hidden = [
        'city_id'
    ];

}
