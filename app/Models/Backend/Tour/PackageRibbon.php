<?php

namespace App\Models\Backend\Tour;

use App\Models\Backend\BackendBaseModel;
use App\Traits\Slug;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class PackageRibbon extends BackendBaseModel
{
    use HasFactory, SoftDeletes, Sluggable, Slug;

    protected $table    = 'package_ribbons';
    protected $fillable = ['id','title','key','slug','status','created_by','updated_by'];

    public function packages()
    {
        return $this->hasMany(Package::class);
    }
}
