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
 * @property string $in_main
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ReadySolution forMain()
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function relativeProducts()
    {
        return $this->belongsToMany(CatalogProduct::class, 'rs_product_relatives', 'rs_id', 'product_id');
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeForMain($query)
    {
        return $query->where('in_main', '1')->limit(3);
    }
}
