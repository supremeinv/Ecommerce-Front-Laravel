<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Color extends Model
{
    protected $table = 'nm_color';
    
    protected $guarded = [];

    public function products()
    {
        return $this->hasMany(\App\Models\Products::class,'pro_is_color','co_id');
    }
}
?>
