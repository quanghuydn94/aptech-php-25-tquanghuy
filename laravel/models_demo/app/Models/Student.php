<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'Students';
    // protected $fillable = ['StudentName','Phone','Address'];
    public $timestamps = false;

    public function batch()
    {
        return $this->hasOne(Batch::class, 'BatchId');
    }
}
