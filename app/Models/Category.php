<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['cat','cat_ar'];



    public function Post(){

        return $this->BelongsToMany('App\Models\Post');
    }
}
