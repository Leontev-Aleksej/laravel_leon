<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'date', 'time', 'type', 'payment', 'count', 'furniture_id', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function furnitures()
    {
        return $this->belongsTo(Furniture::class);
    }
}