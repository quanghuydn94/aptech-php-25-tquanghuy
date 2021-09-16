<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // use HasFactory;
    protected $table = 'Students';
    public $timestamps = false;

    public function batch()
    {
        return $this->hasOne(Batch::class);
    }
}