<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;
    protected $table = 'cars';
    protected $fillable = [
        'name',
      'email',
      'phone',
        'facility_name',
        'location',
        'overview',
        'Small_cars',
     'Medium_cars',
       'Trucks',
       'Buses',
       'Heavy_machinery',
      'Other_machinery',
      'engines',
       'engines_oil',
       'veicles_washed',
       'oil_collected',
       'number_vehicles',
       
    ];

   protected $guarded = [];
}
