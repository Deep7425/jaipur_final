<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'short_description',
        'regular_price',
        'sale_price',
        'sku',
        'quantity',
        'stock_status',
        'image',
        'thumbnail_image',
        'is_active',
        'featured',
        'thumbnail_status',
        'category_id',
        'brand_id',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'views',
        'sort_order'
    ];

    protected $casts = [
        'regular_price' => 'decimal:2',
        'sale_price' => 'decimal:2',
        'is_active' => 'boolean',
        'featured' => 'boolean',
        'quantity' => 'integer',
        'views' => 'integer',
        'sort_order' => 'integer',
    ];

    protected $dates = ['deleted_at'];

    /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            if (empty($product->slug)) {
                $product->slug = Str::slug($product->name);
            }
        });

        static::updating(function ($product) {
            if ($product->isDirty('name') && empty($product->slug)) {
                $product->slug = Str::slug($product->name);
            }
        });
    }

    /**
     * Get the effective price (sale price if available, otherwise regular price).
     */
    public function getEffectivePriceAttribute()
    {
        return $this->sale_price ?? $this->regular_price;
    }

    /**
     * Check if product is on sale.
     */
    public function getIsOnSaleAttribute()
    {
        return !is_null($this->sale_price) && $this->sale_price < $this->regular_price;
    }

    /**
     * Get discount percentage.
     */
    public function getDiscountPercentageAttribute()
    {
        if (!$this->is_on_sale) {
            return 0;
        }

        return round((($this->regular_price - $this->sale_price) / $this->regular_price) * 100);
    }

    /**
     * Check if product is in stock.
     */
    public function getIsInStockAttribute()
    {
        return $this->stock_status === 'instock' && $this->quantity > 0;
    }

    /**
     * Get main image URL.
     */
    public function getImageUrlAttribute()
    {
        return $this->image ? asset('assets/images/products/' . $this->image) : asset('assets/images/placeholder.jpg');
    }

    /**
     * Get thumbnail image URL.
     */
    public function getThumbnailUrlAttribute()
    {
        return $this->thumbnail_image ? asset('assets/images/products/thumbnails/' . $this->thumbnail_image) : $this->image_url;
    }

    /**
     * Check if thumbnail should be displayed on homepage.
     */
    public function shouldShowThumbnail()
    {
        return $this->thumbnail_status === 'show' && $this->is_active;
    }

    /**
     * Scope for active products.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope for featured products.
     */
    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    /**
     * Scope for products with visible thumbnails.
     */
    public function scopeWithVisibleThumbnails($query)
    {
        return $query->where('thumbnail_status', 'show')
                    ->where('is_active', true);
    }

    /**
     * Scope for in-stock products.
     */
    public function scopeInStock($query)
    {
        return $query->where('stock_status', 'instock')
                    ->where('quantity', '>', 0);
    }

    /**
     * Get products for homepage display based on thumbnail status.
     */
    public static function getHomepageProducts($limit = 12)
    {
        return static::active()
                    ->withVisibleThumbnails()
                    ->inStock()
                    ->orderBy('sort_order')
                    ->orderBy('created_at', 'desc')
                    ->limit($limit)
                    ->get();
    }

    /**
     * Get featured products for homepage.
     */
    public static function getFeaturedProducts($limit = 8)
    {
        return static::active()
                    ->featured()
                    ->withVisibleThumbnails()
                    ->inStock()
                    ->orderBy('sort_order')
                    ->orderBy('created_at', 'desc')
                    ->limit($limit)
                    ->get();
    }

    /**
     * Increment product views.
     */
    public function incrementViews()
    {
        $this->increment('views');
    }

    /**
     * Generate unique SKU if not provided.
     */
    public static function generateSKU()
    {
        do {
            $sku = 'JJ-' . strtoupper(Str::random(8));
        } while (static::where('sku', $sku)->exists());

        return $sku;
    }
}
