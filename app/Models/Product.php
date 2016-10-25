<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

class Product extends Model implements SluggableInterface
{
    use SluggableTrait;

    /**
     * @var string
     */
    protected $table      = 'products';
    protected $primaryKey = 'id';
    /**
     * @var array
     */
    protected $guarded = ['id'];
    protected $dates   = ['pubished_at', 'deleted_at'];

    /**
     * @var array
     */
    protected $fillable = [
        'id', 'slug', 'ispromo', 'is_published', 'name', 'subtitle', 'details', 'description', 'status', 'office_status', 'availability', 'thumbnail', 'thumbnail2', 'thumbnail3', 'photo_album', 'pubished_at', 'video_url', 'lang', 'manufacturer', 'category_id', 'hasWarranty', 'isDev', 'features_heading', 'price_heading', 'review_heading', 'additional_heading', 'waranty_heading', 'support_heading', 'docs_heading', 'meta_title', 'meta_keywords', 'meta_description', 'facebook_title', 'google_plus_title', 'twitter_title', 'price', 'quantity', 'model', 'sku', 'upc', 'tracking', 'datalayer', 'filter_class',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'slug'               => 'string',
        'ispromo'            => 'boolean',
        'is_published'       => 'boolean',
        'hasWarranty'        => 'boolean',
        'isDev'              => 'boolean',
        'name'               => 'string',
        'subtitle'           => 'string',
        'details'            => 'string',
        'description'        => 'string',
        'status'             => 'string',
        'office_status'      => 'string',
        'availability'       => 'string',
        'thumbnail'          => 'string',
        'thumbnail2'         => 'string',
        'thumbnail3'         => 'string',
        'photo_album'        => 'string',
        'video_url'          => 'string',
        'pubished_at'        => 'date',
        'lang'               => 'string',
        'manufacturer'       => 'string',
        'category_id'        => 'integer',
        'features_heading'   => 'string',
        'price_heading'      => 'string',
        'review_heading'     => 'string',
        'additional_heading' => 'string',
        'waranty_heading'    => 'string',
        'support_heading'    => 'string',
        'docs_heading'       => 'string',
        'meta_title'         => 'string',
        'meta_description'   => 'string',
        'meta_keywords'      => 'string',
        'facebook_title'     => 'string',
        'google_plus_title'  => 'string',
        'twitter_title'      => 'string',
        'price'              => 'string',
        'quantity'           => 'string',
        'model'              => 'string',
        'sku'                => 'string',
        'upc'                => 'string',
        'tracking'           => 'string',
        'datalayer'          => 'string',
        'filter_class'       => 'string',

    ];

    /**
     * @method getPriceAttribute
     * @public
     * @param  {any}   $price
     * @return {any}
     */
    public function getPriceAttribute($price)
    {
        return '$' . number_format($price, 2, '.', '');
    }

    /**
     * Returns the formatted subtotal.
     * Subtotal is price for whole CartItem without TAX
     *
     * @return string
     */
    public function getSubtotalAttribute($subtotal)
    {
        return '$' . number_format($subtotal, 2, '.', '');
    }

    /**
     * Returns the formatted total.
     * Total is price for whole CartItem with TAX
     *
     * @return string
     */
    public function getTotalAttribute($total)
    {
        return '$' . number_format($total, 2, '.', '');
    }

    /**
     * Set the quantity for this cart item.
     *
     * @param int|float $quantity
     */
    public function setQuantity($quantity)
    {
        if (empty($quantity) || !is_numeric($quantity)) {
            throw new \InvalidArgumentException('Please supply a valid quantity.');
        }

        $this->quantity = $quantity;
    }

    public static $rules = [

        'name' => 'required',
        'slug' => 'required',
    ];

    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];

    /**
     * @method relatedProducts
     * @public
     * @return \Illuminate\Database\Eloquent\Relations\HasMoney
     */
    public function relatedProducts()
    {
        return $this->hasMany(RelatedProduct::class);
    }

    /**
     * @method categories
     * @public
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product');
    }

    /**
     * @method orders
     * @public
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    /**
     * @method carts
     * @public
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function carts()
    {
        return $this->belongsToMany(Cart::class);
    }

    /**
     * @method photos
     * @public
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photos()
    {
        return $this->hasMany(AlbumPhoto::class);
    }

    /**
     * @method options
     * @public
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function options()
    {
        return $this->hasMany(Option::class);
    }

    /**
     * @method category
     * @public
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id', 'title');
    }

    /**
     * @method productVariants
     * @public
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productVariants()
    {
        return $this->hasMany(ProductVariant::class);
    }

    /**
     * @method productFeatures
     * @public
     * @return \Illuminate\Database\Eloquent\RelationsHasMany
     */
    public function productFeatures()
    {
        return $this->hasMany(ProductFeature::class);
    }

    /**
     * @method variants
     * @public
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }

    /**
     * @method features
     * @public
     * @return \Illuminate\Database\Eloquent\Relations\HasManyP
     */
    public function features()
    {
        return $this->hasMany(ProductFeature::class);
    }

    public function keys()
    {
        return $this->hasMany(Key::class);
    }

    /**
     * @method model
     * @public
     * @return
     */
    public function model()
    {
        return Product::class;
    }
}
