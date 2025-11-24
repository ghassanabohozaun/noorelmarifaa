<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StaticPage extends Model
{
    protected $table = 'static_pages';
    protected $fillable = [
        'details_ar',
        'details_en',
        'language',
        'order',
        'department_id',
    ];
    /////////////////////////////////////////////////////////////////////////
    /// relationships
    public function department(){
        return $this->belongsTo('App\Models\Department','department_id');
    }
    /////////////////////////////////////////////////////////////
    /// accessors
    public function getLanguageAttribute($value)
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
