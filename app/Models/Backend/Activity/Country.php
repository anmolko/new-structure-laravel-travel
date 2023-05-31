<?php

namespace App\Models\Backend\Activity;

use App\Models\Backend\BackendBaseModel;
use App\Traits\Slug;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends BackendBaseModel
{
    use HasFactory, SoftDeletes, Sluggable, Slug;

    protected $table    ='countries';
    protected $fillable = ['id','title','key','slug','image','status','created_by','updated_by'];

    public function packages()
    {
        return $this->hasMany(Package::class);
    }

}
