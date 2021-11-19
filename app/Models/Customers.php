<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Authenticatable
{
    use HasFactory;
    protected $table = 'nm_customer';
    protected $primaryKey = 'cus_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    // /**\
    //  * The attributes that should be hidden for arrays.
    //  *
    //  * @var array
    //  */
    // protected $hidden = [
    //     'cus_pwd'
    // ];

    public function getEmailAttribute()
    {
        return $this->cus_email;
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */

    public function getAuthPassword()
    {
        return $this->attributes['cus_pwd'];
    }
}
