<div class="contact-form-action">
    {!! Form::open(['route' => $module.'activity.search', 'method'=>'POST', 'class'=>'row align-items-center search_tour_form']) !!}
        <div class="col-lg-4 pr-0">
            <div class="input-box">
                <label class="label-text">Title</label>
                <div class="form-group">
                    <span class="la la-list-alt form-icon"></span>
                    {!! Form::text('title', null,['class'=>'form-control','id'=>'title','placeholder'=>'Name of activity..']) !!}
                </div>
            </div>
        </div>
        <div class="col-lg-3 pr-0">
            <div class="input-box">
                <label class="label-text">Activity group</label>
                <div class="form-group">
                    <div class="select-contain w-auto">
                        {!! Form::select('package_category_id', $data['search_categories'] , null,['class'=>'select-contain-select','id'=>'package_category_id','placeholder'=>'Select category']) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 pr-0">
            <div class="input-box">
                <label class="label-text">Have a location in mind ?</label>
                <div class="form-group">
                    <div class="select-contain w-auto">
                        {!! Form::select('country_id', $data['search_countries'] , null,['class'=>'select-contain-select','id'=>'country_id','placeholder'=>'Select country']) !!}
                    </div>
                </div>
            </div>
        </div>
        <!-- end col-lg-4 -->
        <div class="btn-box pt-3 pl-3">
            <button type="submit" class="theme-btn search-for-tours">Search Now</button>
        </div>
    {!! Form::close() !!}
</div>


