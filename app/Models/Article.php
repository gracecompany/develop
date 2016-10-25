<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\SluggableTrait;
use Cviebrock\EloquentSluggable\SluggableInterface;
use App\Interfaces\ModelInterface as ModelInterface;

/**
 * Class Article.
 *
 * @author Phillip Madsen <contact@affordableprogrammer.com>
 */
class Article extends BaseModel implements ModelInterface, SluggableInterface
{
    use SluggableTrait;

    public $table = 'articles';
    protected $fillable = ['title', 'content', 'meta_keywords', 'meta_description', 'is_published'];
    protected $appends = ['url'];

    protected $sluggable = array(
        'build_from' => 'title',
        'save_to' => 'slug',
    );

    /**
      * @method tags
      * @public
      * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
      */
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'articles_tags');
    }

    /**
      * @method category
      * @public
      * @return \Illuminate\Database\Eloquent\Relations\HasMany
      */
    public function category()
    {
        return $this->hasMany('App\Models\Category', 'id', 'category_id');
    }

    /**
      * @method setUrlAttribute
      * @public
      * @param {any} $value
      */
    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = $value;
    }

    /**
      * @method getUrlAttribute
      * @public
      * @return {any}
      */
    public function getUrlAttribute()
    {
        return 'article/'.$this->attributes['slug'];
    }
}
