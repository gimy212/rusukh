<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiledMenu extends Model
{
    use HasFactory;
    
    protected $table = 'menu_chiled';
    protected $fillable = ['parent_id','name','name_ar','link'];
    
        public function parent(){

         return $this->belongsTo('App\Models\Menu', 'id');
        }
}
