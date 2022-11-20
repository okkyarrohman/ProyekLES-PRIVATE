<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{

    protected $table = "murids";

    protected $fillable = 
    [
        'name',
        'phone',
        'sekolah',
        'umur',
        
    ];

    use HasFactory;

    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }
}
