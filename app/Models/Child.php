<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Child extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes, HasTranslations, HasApiTokens;

    protected $table = 'children';
    protected $fillable = ['first_name', 'father_name', 'grand_father_name', 'family_name', 'password', 'personal_id',
    'birthday', 'classification', 'gender', 'class', 'health_status', 'disease_clarification', 'governoate_id', 'city_id',
    'sponsership_status_id', 'sponsership_organization_id', 'sponsership_type_id', 'address_details', 'authorized_contact_number',
    'backup_contact_number', 'whatsApp_number', 'status', 'freeze'];
    //public $timestamps = false;

    public array $translatable = ['first_name', 'father_name', 'grand_father_name', 'family_name'];

    // hidden
    protected $hidden = ['password'];

    // Get the attributes that should be cast.
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    // functions
    public function childFullName()
    {
        return $this->first_name . ' ' . $this->father_name . ' ' . $this->grand_father_name . ' ' . $this->family_name;
    }

    // child gender function
    public function childGender()
    {
        if ($this->gender == 'male') {
            return __('children.male');
        } else {
            return __('children.female');
        }
    }

    // child classification function
    public function childClassification()
    {
        if ($this->classification == 'parentless') {
            return __('children.parentless');
        } else {
            return __('children.fatherless');
        }
    }

    // child health status function
    public function childHealthStatus()
    {
        if ($this->health_status == 'good') {
            return __('children.good');
        } else {
            return __('children.sick');
        }
    }

    // relations
    public function governorate()
    {
        return $this->belongsTo(Governorate::class, 'governoate_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function childFamily()
    {
        return $this->hasOne(ChildFamily::class, 'child_id');
    }

    public function childFather()
    {
        return $this->hasOne(ChildFather::class, 'child_id');
    }

    public function childMother()
    {
        return $this->hasOne(ChildMother::class, 'child_id');
    }

    public function childGuardian()
    {
        return $this->hasOne(ChildGuardian::class, 'child_id');
    }

    public function childFile()
    {
        return $this->hasOne(ChildFile::class, 'child_id');
    }

    // accessories
    public function getCreatedAtAttribute($value)
    {
        if (request()->wantsJson()) {
            return $value;
        }
        return Carbon::parse($value)->format('d/m/Y h:i A');
    }

    public function getUpdatedAtAttribute($value)
    {
        if (request()->wantsJson()) {
            return $value;
        }
        return Carbon::parse($value)->format('d/m/Y h:i A');
    }

    // public function getGenderAttribute($value)
    // {
    //     $gender = $value == 'male' ? __('general.male') : __('general.female');
    //     return $gender;
    // }

    //scopes
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
    public function scopeInactive($query)
    {
        return $query->where('status', 0);
    }
}
