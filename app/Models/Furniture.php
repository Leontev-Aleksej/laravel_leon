<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Furniture extends Model
{
    protected $fillable = [
        'title', 'price'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}