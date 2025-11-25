<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';
    protected $fillable = [
        'language',
        'status',
        'title_ar',
        'title_en',
        'link',
    ];
    protected $hidden = ['created_at', 'updated_at'];
    //////////////////////////////////////////////////////////////
    /// accessors
    /// Language Accessor
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

    /// Status Accessor
    public function getStatusAttribute($value)
    {
        return $value == 'enable' ? trans('general.enable') : trans('general.disable');
    }

}
