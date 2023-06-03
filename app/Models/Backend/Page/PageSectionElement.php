<?php

namespace App\Models\Backend\Page;

use App\Models\Backend\BackendBaseModel;
use App\Traits\Slug;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class PageSectionElement extends BackendBaseModel
{
    use HasFactory, SoftDeletes, Sluggable, Slug;

    protected $table    ='page_sections';
    protected $fillable =['id','page_section_id','title','subtitle','image','description','title2','subtitle2','image2','description2','description3','button','button_link','created_by','updated_by'];

    public function section()
    {
        return $this->belongsTo(PageSection::class)->with('page');
    }
}
