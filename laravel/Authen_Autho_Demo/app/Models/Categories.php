<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    // use HasFactory;
    protected $table = "categories";
    public $timestamps = false;
    public $fillable = [];
     public function userId()
    {
        return $this->hasOne(User::class, 'userid');
    }
}
