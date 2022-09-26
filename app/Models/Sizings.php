<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sizings extends Model
{
    use HasFactory;
    protected $table = 'sizings';
     protected $fillable = [
         'name',
       'dimensions',
       'Drains_number',
         'Drains_dimensions',
         'Sewers_number',
         'Sewer_dimensions',
         'number_washing',
      'machine_volume',
     ];

    protected $guarded = [];
}
