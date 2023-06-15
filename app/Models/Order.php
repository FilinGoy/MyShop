<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $guarded = false;

    public function orders_products()
    {
        return $this->belongsToMany(Product::class, 'orders_products')->withPivot('count', 'price');
    }

    public function statuses()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }

    public function payment()
    {
        return $this->belongsTo(PaymentType::class, 'payment_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
