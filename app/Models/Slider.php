<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Slider extends Model
{

   protected $fillable = ['user_id','mini_title' ,'slider_title','slider_content','slider_photo','mini_title_ar','title_ar','content_ar','link','link_ar'];
}
