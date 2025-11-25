<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class YearlyReports extends Model
{
    protected $table = 'yearly_reports';
    protected $fillable = [
        'status',
        'type',
        'year',
        'file',
    ];
    protected $hidden = ['created_at', 'updated_at'];

    /////////////////////////////////////////////////////////////////
    /// accessors
    public function getStatusAttribute($value){
        return $value =='enable' ? trans('general.enable') : trans('general.disable');
    }


    public function getTypeAttribute($value){
        return $value =='financial' ? trans('general.financial') : trans('general.administrative');
    }
}
