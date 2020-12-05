<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CategoryProduct
 *
 * @property int $id
 * @property int $category_id
 * @property int $product_id
 * @property-read \App\Models\Category|null $category
 * @property-read \App\Models\Product|null $product
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProduct whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProduct whereProductId($value)
 * @mixin \Eloquent
 */
class CategoryProduct extends Model
{
    protected $table = 'category_product';

    /**
     * Get the product.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne('App\Models\Product');
    }

    /**
     * Get the category.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne('App\Models\Category');
    }
}
