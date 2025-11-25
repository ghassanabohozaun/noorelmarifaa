<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MonthlyReport extends Model
{
    protected $table = 'monthly_reports';
    protected $fillable = [
        'status',
        'month',
        'year',
        'file',
    ];
    protected $hidden = ['created_at', 'updated_at'];

    /////////////////////////////////////////////////////////////////
    /// accessors
    public function getStatusAttribute($value){
        return $value =='enable' ? trans('general.enable') : trans('general.disable');
    }

}
