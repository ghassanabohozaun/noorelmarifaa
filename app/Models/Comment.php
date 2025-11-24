<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = [
        'person_ip',
        'person_name',
        'person_email',
        'commentary',
        'status',
        'post_id',
    ];
    protected $hidden = ['updated_at'];

}
