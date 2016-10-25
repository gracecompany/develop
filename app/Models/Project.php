<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Cviebrock\EloquentSluggable\SluggableInterface;
use App\Interfaces\ModelInterface as ModelInterface;

/**
 * Class Project.
 *
 * @author Phillip Madsen <contact@affordableprogrammer.com>
 */
class Project extends Model implements ModelInterface, SluggableInterface
{
    use SluggableTrait;

    public $table = 'projects';
    protected $fillable = array('title', 'description');

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
        return 'project/'.$this->attributes['slug'];
    }
}
