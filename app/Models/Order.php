<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Order extends Model
    {
        use HasFactory;
    
        protected $fillable = [
            'customer_id',
            'order_date',
            'total_price',
            'status',
        ];
    }

