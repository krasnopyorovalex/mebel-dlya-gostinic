<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function image()
    {
        return $this->morphOne('App\Image', 'imageable');
    }
}
