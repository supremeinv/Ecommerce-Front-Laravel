<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $guarded = array('cus_id');
    protected $table = 'nm_customer';
            /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'cus_name', 'cus_email', 'cus_pwd',
        ];

        /**
         * The attributes that should be hidden for arrays.
         *
         * @var array
         */
        protected $hidden = [
            'cus_pwd'
        ];


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
