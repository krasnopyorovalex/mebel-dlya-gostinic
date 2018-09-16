<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\CatalogProductImage
 *
 * @property int $id
 * @property int $product_id
 * @property string|null $name
 * @property string|null $alt
 * @property string|null $title
 * @property string $basename
 * @property string $ext
 * @property string $is_published
 * @property int $pos
 * @property-read \App\CatalogProduct $product
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CatalogProductImage whereAlt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CatalogProductImage whereBasename($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CatalogProductImage whereExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CatalogProductImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CatalogProductImage whereIsPublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CatalogProductImage whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CatalogProductImage wherePos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CatalogProductImage whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CatalogProductImage whereTitle($value)
 * @mixin \Eloquent
 */
class CatalogProductImage extends Model
{
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['product_id', 'name', 'alt', 'title', 'basename', 'ext', 'is_published', 'pos'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('App\CatalogProduct');
    }

    /**
     * @return string
     */
    public function getThumb(): string
    {
        return asset('storage/product/' . $this->product_id . '/' . $this->basename . '_thumb.' . $this->ext);
    }
}
