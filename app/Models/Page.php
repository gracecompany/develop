<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\SluggableTrait;
use Cviebrock\EloquentSluggable\SluggableInterface;
use App\Interfaces\ModelInterface as ModelInterface;

/**
 * Class Page.
 *
 * @author Phillip Madsen <contact@affordableprogrammer.com>
 */
class Page extends BaseModel implements ModelInterface, SluggableInterface
{
    use SluggableTrait;

    public $table = 'pages';
    protected $fillable = ['title', 'content', 'is_published'];
    protected $appends = ['url'];

    protected $sluggable = array(
        'build_from' => 'title',
        'save_to' => 'slug',
    );

    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute()
    {
        return 'page/'.$this->attributes['slug'];
    }
}
