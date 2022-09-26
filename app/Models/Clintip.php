<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clintip extends Model
{
    use HasFactory;
    protected $table = 'clintip';
    protected $fillable = [
        'ip',
      
    ];

   protected $guarded = [];
}
