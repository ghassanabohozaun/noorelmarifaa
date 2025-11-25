<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceForm extends Model
{
    protected $table = 'service_forms';
    protected $fillable = [
        'full_name',
        'identification',
        'mobile_number',
        'gender',
        'service_type',
        'address',
        'notes',
    ];
    protected $hidden = ['created_at', 'updated_at'];
    ////////////////////////////////////////////////////////
    /// Accessors
    public function getGenderAttribute($value)
    {
        return $value == 'male' ? trans('general.male') : trans('general.female');
    }

    public function getServiceTypeAttribute($value)
    {
        if ($value == 'sponsoring_an_orphan_student') {
            return trans('forms.sponsoring_an_orphan_student');
        } elseif ($value == 'sponsoring_a_needy_student') {
            return trans('forms.sponsoring_a_needy_student');
        } elseif ($value == 'financial_aid') {
            return trans('forms.financial_aid');
        }
    }
}
