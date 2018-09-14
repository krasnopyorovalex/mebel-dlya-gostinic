<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Banner
 *
 * @property int $id
 * @property string $name
 * @property string $text
 * @property string $link
 * @property string $btn_text
 * @property-read \App\Image $image
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Banner whereBtnText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Banner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Banner whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Banner whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Banner whereText($value)
 * @mixin \Eloquent
 */
class Banner extends Model
{
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['text', 'link', 'name', 'btn_text'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function image()
    {
        return $this->morphOne('App\Image', 'imageable');
    }
}
