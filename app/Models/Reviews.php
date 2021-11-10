<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
class Reviews extends Model
{
    protected $table = 'nm_review';
    use HasFactory;
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function products(){
        return $this->belongsTo('Products');
    }

}
?>
