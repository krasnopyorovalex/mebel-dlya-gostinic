<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Guestbook
 *
 * @property int $id
 * @property string $name
 * @property string $text
 * @property string $city
 * @property int $pos
 * @property string $published_at
 * @property-read \App\Image $image
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Guestbook whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Guestbook whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Guestbook whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Guestbook wherePos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Guestbook wherePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Guestbook whereText($value)
 * @mixin \Eloquent
 */
class Guestbook extends Model
{
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['name', 'text', 'city', 'pos', 'published_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function image()
    {
        return $this->morphOne('App\Image', 'imageable');
    }
}
