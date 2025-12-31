<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class ChildFamilyMember extends Model
{
    use SoftDeletes, HasTranslations;

    protected $table = 'child_family_members';
    protected $fillable = ['member_name','member_age','member_relation', 'child_id'];
    //public $timestamps = false;

    public array $translatable = ['member_name'];


    // member relation function
    public function childMemberRelation()
    {
        if ($this->member_relation == 'brother') {
            return __('children.brother');
        } else {
            return __('children.sister');
        }
    }


    // relations
    public function child()
    {
        return $this->belongsTo(Child::class, 'child_id');
    }
}
