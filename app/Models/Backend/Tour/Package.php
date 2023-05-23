<?php

namespace App\Models\Backend\Tour;

use App\Models\Backend\BackendBaseModel;
use App\Traits\Slug;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends BackendBaseModel
{
    use HasFactory, SoftDeletes, Sluggable, Slug;

    protected $table    ='packages';
    protected $fillable = ['id','country_id','package_type_id','package_category_id','title','key','slug','image','description','status','created_by','updated_by'];

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function type(){
        return $this->belongsTo(PackageType::class);
    }

    public function category(){
        return $this->belongsTo(PackageCategory::class);
    }
}
