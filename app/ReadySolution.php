<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReadySolution extends Model
{
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['link', 'name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function image()
    {
        return $this->morphOne('App\Image', 'imageable');
    }
}
