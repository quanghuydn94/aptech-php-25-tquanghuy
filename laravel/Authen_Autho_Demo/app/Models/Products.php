<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    // use HasFactory;
     protected $table = "products";
    public $timestamps = false;
    public $fillable =
    [
        'name',
        'price',
        'image',
        'description',
        'categoryid',
        'userid',
    ];
     public function categoryId()
    {
        return $this->hasOne(Categories::class, 'categoryid');
    }
     public function user()
    {
        return $this->hasOne(User::class, 'userid');
    }
}
