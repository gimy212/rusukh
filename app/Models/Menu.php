<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    
    protected $table = 'menu_category';
    protected $fillable = ['id','name','name_ar'];
    
          public function chiled(){

         return $this->hasMany('App\Models\ChiledMenu', 'parent_id');
        }

}
