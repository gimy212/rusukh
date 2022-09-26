<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{

    protected $fillable = [
        'user_id','title','content','title_ar','content_ar','photo','quota','slug','quota_btn','desc','seo_title','seo_title_ar',
        'seo_description','seo_description_ar','slug_ar','keywords','keywords_ar'
    ];

         public function User(){

         return $this->belongsTo('App\Models\User', 'user_id');
        }

        public function Tag(){

            return $this->belongsToMany('App\Models\Tag');
        }

        public function Cat(){

            return $this->belongsToMany('App\Models\Category');
        }
}
