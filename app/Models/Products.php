<?php

namespace App\Models;

use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;

class Products extends Model
{
    protected $table = 'nm_product';
    protected $primaryKey = 'pro_id';

    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function reviews()
    {
        return $this->belongsTo('Reviews');
    }

    public static function productWithReviews()
    {
        return DB::table('nm_product')->select(
            [
                'nm_product.pro_id',
                'nm_product.pro_price',
                'nm_product.pro_disprice',
                'nm_product.pro_title',
                'nm_product.pro_discount_percentage',
                'nm_product.pro_Img',
                'nm_product.pro_status',
                DB::raw('GROUP_CONCAT(nm_color.co_code) as colors'),
                DB::raw('CAST(
            AVG(nm_review.ratings) AS DECIMAL(10, 1)
        ) AS ratings'),
                DB::raw('COUNT(nm_review.product_id) AS reviews')
            ]
        )->where('nm_product.pro_status', '1')
        ->join('nm_review', 'nm_review.product_id', '=', 'nm_product.pro_id', 'left')
        ->join('nm_procolor', 'nm_procolor.pc_pro_id', '=', 'nm_product.pro_id', 'left')
        ->join('nm_color', 'nm_color.co_id', '=', 'nm_procolor.pc_co_id', 'left')
        ->groupBy('nm_product.pro_id')
        ->offset(0)
        ->limit(24)
        ->orderBy(DB::raw('COUNT(nm_review.product_id)'), 'desc');
    }

    public static function featuredProductWithReviews()
    {
        return DB::table('nm_product')->select(
            [
                'nm_product.pro_id',
                'nm_product.pro_price',
                'nm_product.pro_disprice',
                'nm_product.pro_title',
                'nm_product.pro_discount_percentage',
                'nm_product.pro_Img',
                'nm_product.pro_status',
                'nm_maincategory.mc_name'
            ]
        )->where('nm_product.pro_status', '1')
        ->where('pro_discount_percentage','>','0')
        ->join('nm_maincategory', 'nm_maincategory.mc_id', '=', 'nm_product.pro_mc_id', 'left')
        ->groupBy('nm_product.pro_id')
        ->offset(0)
        ->limit(5)
        ->orderBy(DB::raw('RAND()'), 'desc');
    }

    public static function favoriteProducts()
    {
        return DB::table('nm_product')->select(
            [
                'nm_product.pro_id',
                'nm_product.pro_price',
                'nm_product.pro_disprice',
                'nm_product.pro_title',
                'nm_product.pro_discount_percentage',
                'nm_product.pro_Img',
                'nm_product.pro_status'
            ]
        )->where('nm_product.pro_status', '1')
        ->where('pro_discount_percentage','>','0')
        ->offset(0)
        ->limit(10)
        ->orderBy('pro_discount_percentage', 'desc');
    }

    public static function singleProduct($id)
    {
        return DB::table('nm_product')->select(
            [
                'nm_product.pro_id',
                'nm_product.pro_price',
                'nm_product.pro_disprice',
                'nm_product.pro_title',
                'nm_product.pro_discount_percentage',
                'nm_product.pro_Img',
                'nm_product.pro_status',
                'nm_product.pro_desc',
                'nm_brands.brand_name',
                DB::raw('GROUP_CONCAT(nm_color.co_code) as colors'),
                DB::raw('CAST(
            AVG(nm_review.ratings) AS DECIMAL(10, 1)
        ) AS ratings'),
                DB::raw('COUNT(nm_review.product_id) AS reviews')
            ]
        )->where('nm_product.pro_status', '1')
        ->where('nm_product.pro_id',$id)
        ->join('nm_review', 'nm_review.product_id', '=', 'nm_product.pro_id', 'left')
        ->join('nm_procolor', 'nm_procolor.pc_pro_id', '=', 'nm_product.pro_id', 'left')
        ->join('nm_brands', 'nm_brands.id', '=', 'nm_product.product_brand_id', 'left')
        ->join('nm_color', 'nm_color.co_id', '=', 'nm_procolor.pc_co_id', 'left')
        ->groupBy('nm_product.pro_id')
        ->limit(1)
        ->orderBy(DB::raw('COUNT(nm_review.product_id)'), 'desc');
    }
}
