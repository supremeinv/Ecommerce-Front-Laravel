<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class SecCategory extends Model
{
    protected $table = 'nm_secmaincategory';
    
    protected $guarded = [];

    public function products()
    {
        return $this->hasMany(\App\Models\Products::class,'pro_smc_id','smc_id');
    }
}
?>
