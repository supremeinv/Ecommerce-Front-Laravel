<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Category extends Model
{
    protected $table = 'nm_maincategory';
    
    protected $guarded = [];

    public function products()
    {
        return $this->hasMany(\App\Models\Products::class,'pro_mc_id','mc_id');
    }
}
?>
