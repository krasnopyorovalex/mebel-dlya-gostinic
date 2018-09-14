<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\ReadySolution
 *
 * @property int $id
 * @property string $name
 * @property string $name_image
 * @property string $link
 * @property-read \App\Image $image
 * @mixin \Eloquent
 * @property string $title
 * @property string|null $description
 * @property string|null $keywords
 * @property string $text
 * @property string $alias
 * @property string $is_published
 */
class ReadySolution extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'name_image', 'title', 'description', 'keywords', 'text', 'alias', 'is_published'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function image()
    {
        return $this->morphOne('App\Image', 'imageable');
    }
}
