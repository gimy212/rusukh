<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $table = 'question';
     protected $fillable = [
        'name',
       'email',
       'phone',
        'name_company',
        'location',
        'abrief',
         'food',
      'meals',
        'wash',
        'dishwasher',
        'dedicated',
       'vegetable',
       'sinks',
        'cooking',
        'underground',
     ];

    protected $guarded = [];

}
