<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Brand extends Model
{
    protected $table = 'nm_brands';
    
    protected $guarded = [];

    public function products()
    {
        return $this->hasMany(\App\Models\Products::class,'product_brand_id','id');
    }
}
?>
