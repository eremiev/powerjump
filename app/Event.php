<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'events';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'when',
        'image'
    ];

    /**
     * Returns the locales of the entity based on the current locale.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function translation()
    {
        return $this->hasOne(EventText::class)
            ->where('lang', app()->getLocale());
    }

    /**
     * Translations related to the Event.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function translations()
    {
        return $this->hasMany(EventText::class);
    }
}
