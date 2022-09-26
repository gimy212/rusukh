<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestQuota extends Model
{
    use HasFactory;

    protected $table = 'request_quota';

    protected $fillable = [
        'name','email','phone','city','type','file','state','company_name','consultant',
        'project_name','tax','registration'
    ];

}
