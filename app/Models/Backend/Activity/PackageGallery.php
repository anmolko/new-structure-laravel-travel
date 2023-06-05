<?php

namespace App\Models\Backend\Activity;

use App\Models\Backend\BackendBaseModel;
use App\Traits\Slug;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class PackageGallery extends BackendBaseModel
{
    use HasFactory;

    protected $table    ='package_galleries';
    protected $fillable =['id','package_id','filename','resized_name','original_name','upload_by'];

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
