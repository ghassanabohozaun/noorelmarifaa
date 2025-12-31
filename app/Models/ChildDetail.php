<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class ChildDetail extends Model
{
    use SoftDeletes, HasTranslations;

    protected $table = 'child_details';
    protected $fillable = ['health_problem', 'economic_situation', 'child_progress', 'expenses', 'sponsorship_funds_cover', 'child_id'];
    //public $timestamps = false;

    public array $translatable = ['health_problem', 'economic_situation', 'child_progress', 'expenses', 'sponsorship_funds_cover'];

    // relations
    public function child()
    {
        return $this->belongsTo(Child::class, 'child_id');
    }
}
