<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Service
 *
 * @property int $id
 * @property int|null $parent_id
 * @property string $name
 * @property string $title
 * @property string|null $description
 * @property string|null $keywords
 * @property string $preview
 * @property string $text
 * @property string $alias
 * @property string $is_published
 * @property int $pos
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Service[] $services
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereIsPublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service wherePos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service wherePreview($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Service whereTitle($value)
 * @mixin \Eloquent
 */
class Service extends Model
{
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['parent_id', 'name', 'title', 'description', 'keywords', 'preview', 'text', 'alias', 'is_published', 'pos'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function services()
    {
        return $this->hasMany('App\Service', 'parent_id', 'id')->orderBy('pos');
    }
}
