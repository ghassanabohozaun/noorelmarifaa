<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class ChildMother extends Model
{
    use SoftDeletes, HasTranslations;

    protected $table = 'child_mothers';
    protected $fillable = ['mother_full_name', 'mother_personal_id', 'is_mother_alive', 'mother_date_of_death', 'is_mother_the_guardian', 'child_id'];
    //public $timestamps = false;

    public array $translatable = ['mother_full_name'];

    public function child()
    {
        return $this->belongsTo(Child::class, 'child_id');
    }
}
