<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployForm extends Model
{
    protected $table = 'employ_forms';
    protected $fillable = [
        'full_name',
        'identification',
        'birthday',
        'mobile_number',
        'gender',
        'order_type',
        'qualification',
        'specialization',
        'address',
        'notes',
    ];
    protected $hidden = ['created_at', 'updated_at'];
    ////////////////////////////////////////////////////////////////////////////////
    /// Accessors
    public function getGenderAttribute($value)
    {
        return $value == 'male' ? trans('general.male') : trans('general.female');
    }

    public function getOrderTypeAttribute($value)
    {
        return $value == 'employ_order' ? trans('forms.employ_order') : trans('forms.volunteer_order');
    }

}
