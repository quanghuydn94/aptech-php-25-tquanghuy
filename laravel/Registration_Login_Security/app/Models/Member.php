<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    // use HasFactory;
    protected $table = 'users';
    protected $fillable = ['Id', 'UserName', 'Email', 'Password', 'Fullname', 'Address', 'Birthday', 'Active', 'Vkey'];
    public $timestamps = false;
}