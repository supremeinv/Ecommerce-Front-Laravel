<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDeliveryStatus extends Model
{
    use HasFactory;
    protected $table = 'nm_order_delivery_status';
    protected $guarded = [];
}
