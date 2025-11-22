<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = [
        'post_title_ar',
        'post_title_en',
        'post_summary_ar',
        'post_summary_en',
        'post_details_ar',
        'post_details_en',
        'post_language',
        'post_status',
        'post_added_date',
        'department_id',
        'admin_id',
        'photo',
    ];
    protected $hidden = ['updated_at'];

    //////////////////////////////////// Relations ///////////////////////
    /////////////////////////////////////////////////////////////////////
    /// department

    public function department(){
        return $this->belongsTo('App\Models\Department','department_id');
    }
    /////////////////////////////////////////////////////////////////////
    /// admin
    public function admin(){
        return $this->belongsTo('App\Models\Admin','admin_id','id');
    }
    /////////////////////////////////////////////////////////////////////
    /// files
    public function files()
    {
        return $this->hasMany('App\File', 'relation_id', 'id')
            ->where('file_type', 'post');
    }

    ////////////////////////////////////////////////////////////////
    /// post status accessor
    public function getPostStatusAttribute($value)
    {
        if ($value == 'enable') {
            return trans('general.enable');
        } elseif ($value == 'disable') {
            return trans('general.disable');
        } elseif ($value == 'pending') {
            return trans('general.pending');
        }
    }


    ////////////////////////////////////////////////////////////////
    /// post language accessor
    public function getPostLanguageAttribute($value)
    {
        if ($value == 'ar') {
            return trans('general.ar');
        } elseif ($value == 'en') {
            return trans('general.en');
        } elseif ($value == 'ar_en') {
            return trans('general.ar_en');
        }
    }



}
