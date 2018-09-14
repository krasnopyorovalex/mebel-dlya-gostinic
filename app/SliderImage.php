<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\SliderImage
 *
 * @property int $id
 * @property int $slider_id
 * @property string|null $name
 * @property string $link
 * @property string|null $alt
 * @property string|null $title
 * @property string $basename
 * @property string $ext
 * @property string $is_published
 * @property int $pos
 *
 * @mixin \Eloquent
 */
class SliderImage extends Model
{
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['slider_id', 'name', 'link', 'alt', 'title', 'is_published', 'pos'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function slider()
    {
        return $this->belongsTo('App\Slider');
    }

    /**
     * @return string
     */
    public function getThumb(): string
    {
        return asset('storage/slider/' . $this->slider_id . '/' . $this->basename . '_thumb.' . $this->ext);
    }
}
