<?php

namespace App\Models\Backend\Activity;

use App\Models\Backend\BackendBaseModel;
use App\Traits\Slug;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends BackendBaseModel
{
    use HasFactory, SoftDeletes, Sluggable, Slug;

    protected $table    ='packages';
    protected $fillable = ['id','country_id','package_ribbon_id','package_category_id','title','key','slug','image','cover','duration','description','status','created_by','updated_by'];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function packageRibbon(){
        return $this->belongsTo(PackageRibbon::class);
    }

    public function packageCategory(){
        return $this->belongsTo(PackageCategory::class);
    }

    public function tourType()
    {
        return $this->country->key == 'nepal' ? 'National':'International';
    }
}
