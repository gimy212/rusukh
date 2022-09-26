<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Product extends Model
{
    use HasFactory;
   protected $fillable = ['user_id','prod_title','prod_bio' ,'prod_desc','prod_photo','title_ar','bio_ar','desc_ar','link','link_ar'];
}
