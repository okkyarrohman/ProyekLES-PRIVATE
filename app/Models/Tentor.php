<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tentor extends Model
{
    use HasFactory;

    protected $table = "tentors";

    protected $fillable = [
        'name',
        'email',
        'password',
        'mobile',
        'gender',
        'birthday',
        'address'
    ];

    // public function user()
    // {
    //     return $this->belongsTo('App\Models\User');
    // }
}
