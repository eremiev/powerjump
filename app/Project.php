<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'projects';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'event_id',
        'date',
        'image'
    ];

    /**
     * Returns the locales of the entity based on the current locale.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function translation()
    {
        return $this->hasOne(ProjectText::class)
            ->where('lang', app()->getLocale());
    }

    /**
     * Translations related to the Project.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function translations()
    {
        return $this->hasMany(ProjectText::class);
    }

    /**
     * Events related to the Project.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
