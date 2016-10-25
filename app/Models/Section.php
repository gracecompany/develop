<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = "sections";
    protected $fillable = ['title', 'slug', 'lang'];

    /**
      * @method categories
      * @public
      * @return \Illuminate\Database\Eloquent\Relations\HasMany
      */
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
