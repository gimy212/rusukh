<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Content extends Model
{

    protected $fillable =
    ['mini_title' ,'slider_title','slider_content' ,'serv_title1' ,'serve_content1' ,'serv_title2' ,'serve_content2'
    ,'serv_title3' ,'serve_content3','serv_title4','serve_content4','prod_title','prod_bio' ,'prod_desc','provide','prov_title1','prov_desc1','prov_title2'
        ,'prov_desc2'
        ,'prov_title3'
        ,'prov_desc3'
        ,'crt_title1'
        ,'crt_count1'
        ,'crt_title2'
        ,'crt_count2'
        ,'crt_title3'
        ,'crt_count3'
        ,'crt_title4'
        ,'crt_count4'
        ,'message_title'
        ,'message_content'
        ,'message_author'
        ,'partener'
        ,'part_title'
        ,'part_content'
        ,'choose'
        ,'cho_title1'
        ,'cho_content1'
        ,'cho_title2'
        ,'cho_content2'
        ,'review_name'
       ,'review_content'
     ,'quota_content'
        ,'footer_bio'
        ,'email'
        ,'number'
       ,'address'
       ,'link1'
       ,'link2'
      ,'link3'
    ];
}
