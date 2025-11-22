<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';
    protected $fillable = [
        'dep_name_ar',
        'dep_name_en',
        'status',
        'class',
        'icon',
        'description',
        'keyword',
        'parent',
    ];
    protected $hidden = ['created_at', 'updated_at'];


    /////////////////////////////////////////////////////////////////////////
    /// relationships
    /// post
    public function post()
    {
        return $this->hasOne('App\Models\Post', 'department_id');
    }

    ////static pages
    public function staticPage(){
        return $this->hasOne('App\Models\StaticPage' , 'department_id');
    }


    public function parents()
    {
        return $this->hasMany('App\Model\Department', 'id', 'parent');
    }


    ///// Relation To Navbar
    public function parent()
    {
        return $this->belongsTo('App\Models\Department', 'parent');
    }

    public function children()
    {
        return $this->hasMany('App\Models\Department', 'parent');
    }

    /////////////////////////////////////////////////////////////////////////
    /// accessors

}
