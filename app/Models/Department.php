<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Department extends Model
{
    use SoftDeletes, HasTranslations;
    protected $table = 'departments';
    protected $fillable = ['name', 'slug', 'status'];

    public $timestamps = true;

    public array $translatable = ['name','slug'];

    // scopes
    public function scopeActive($query)
    {
        return $query->whereStatus(1);
    }

    public function scopeInactive($query)
    {
        return $query->whereStatus(0);
    }

    // relations
    public function posts()
    {
        return $this->hasMany(Post::class, 'department_id');
    }
}
