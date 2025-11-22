<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'sliders';
    protected $fillable = [
        'title_ar',
        'title_en',
        'details_ar',
        'details_en',
        'language',
        'status',
        'order',
        'photo',
        'button_status',
        'link',
    ];
    protected $hidden = ['created_at', 'updated_at'];

    //////////////////////////////////////////////////////////////
    /// accessors
    //////////////////////////////////////////////////////////////
    /// language
    public function getLanguageAttribute($value)
    {
        if ($value == 'ar') {
            return trans('general.ar');

        } elseif ($value == 'en') {
            return trans('general.en');

        } elseif ($value == 'ar_en') {
            return trans('general.ar_en');

        } elseif ($value == 'without_language') {
            return trans('sliders.without_language');
        }
    }
    //////////////////////////////////////////////////////////////
    /// status
    public function getStatusAttribute($value)
    {
        return $value == 'enable' ? trans('general.enable') : trans('general.disable');
    }

}
