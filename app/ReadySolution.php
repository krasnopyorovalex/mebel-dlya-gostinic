<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\ReadySolution
 *
 * @property int $id
 * @property string $name
 * @property string $link
 * @property-read \App\Image $image
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ReadySolution whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ReadySolution whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ReadySolution whereName($value)
 * @mixin \Eloquent
 */
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
