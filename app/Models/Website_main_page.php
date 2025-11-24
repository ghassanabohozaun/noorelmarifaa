<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Website_main_page extends Model
{
    protected $table = 'website_main_pages';
    protected $fillable = [
        'counter_one',
        'counter_two',
        'counter_three',
        'counter_four',
        'upload_video',
    ];
    protected $hidden = ['created_at', 'updated_at'];
}
