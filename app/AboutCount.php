<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\AboutCount
 *
 * @property int $id
 * @property int $count
 * @property string $icon
 * @property string $name
 * @property int $pos
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AboutCount whereCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AboutCount whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AboutCount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AboutCount whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AboutCount wherePos($value)
 * @mixin \Eloquent
 */
class AboutCount extends Model
{
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['count', 'postfix', 'icon', 'name', 'pos'];
}
