@if($page_method == 'edit')
    {!! Form::model($data['row'], ['route' => [$base_route.'update',$data['row']->id ], 'method' => 'PUT','class'=>'submit_form','enctype'=>'multipart/form-data']) !!}
@else
    {!! Form::open(['route' => $base_route.'store', 'method'=>'POST', 'class'=>'submit_form','enctype'=>'multipart/form-data']) !!}
@endif

<div class="row">
    <div class="col-lg-12">
        <div class="mb-3">
            {!! Form::label('country_id', 'Country', ['class' => 'form-label required']) !!}
            {!! Form::select('country_id', $data['countries'], $data['row']->country_id ?? '',['class'=>'form-select mb-3 select2','id'=>'country_id','placeholder'=>'Select country']) !!}
        </div>
    </div>
    <div class="col-lg-12">
        <div class="mb-3">
            {!! Form::label('title', 'Title', ['class' => 'form-label required']) !!}
            {!! Form::text('title', null,['class'=>'form-control','id'=>'name','placeholder'=>'Enter title']) !!}
        </div>
    </div>
    <div class="col-lg-6">
        <div class="mb-3">
            {!! Form::label('package_category_id', 'Category', ['class' => 'form-label required']) !!}
            {!! Form::select('package_category_id', $data['categories'], $data['row']->package_category_id ?? '',['class'=>'form-select mb-3 select2','id'=>'package_category_id','placeholder'=>'Select category']) !!}
        </div>
    </div>
    <div class="col-lg-6">
        <div class="mb-3">
            {!! Form::label('package_ribbon_id', 'Ribbon', ['class' => 'form-label']) !!}
            {!! Form::select('package_ribbon_id', $data['ribbons'], $data['row']->package_ribbon_id ?? '',['class'=>'form-select mb-3 select2','id'=>'package_ribbon_id','placeholder'=>'Select ribbon']) !!}
        </div>
    </div>
    <div class="col-lg-12">
        <div class="mb-3 editor">
            {!! Form::label('description', 'Description', ['class' => 'form-label']) !!}
            {!! Form::textarea('description', null,['class'=>'form-control ck-editor','id'=>'description','placeholder'=>'Enter description']) !!}
        </div>
    </div>
    <div class="col-lg-6">
        <div class="mb-3">
            {!! Form::label('image_input', 'Images', ['class' => 'form-label']) !!}
            {!! Form::file('image_input', ['class'=>'form-control','id'=>'image_input']) !!}
            <p class="text-muted mb-2">Recommended size: 600 x 400px</p>
        </div>
        @if($page_method=='edit' && $data['row']->image)
            <div class="col-xxl-4 col-xl-4 col-sm-6">
                <div class="gallery-box card">
                    <div class="gallery-container">
                        <a class="image-popup" href="{{ asset(imagePath($data['row']->image))}}" title="">
                            <img class="gallery-img img-fluid mx-auto lazy" data-src="{{ asset(imagePath($data['row']->image))}}" alt="" />
                            <div class="gallery-overlay">
                                <h5 class="overlay-caption">Feature Image</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <div class="col-lg-6">
        <div class="mb-3">
            {!! Form::label('cover_image', 'Cover Image', ['class' => 'form-label']) !!}
            {!! Form::file('cover_image', ['class'=>'form-control','id'=>'cover_image']) !!}
            <p class="text-muted mb-2">Recommended size: 1920 x 500px</p>
        </div>
        @if($page_method=='edit' && $data['row']->cover)
            <div class="col-xxl-4 col-xl-4 col-sm-6">
                <div class="gallery-box card">
                    <div class="gallery-container">
                        <a class="image-popup" href="{{ asset(imagePath($data['row']->cover))}}" title="">
                            <img class="gallery-img img-fluid mx-auto lazy" data-src="{{ asset(imagePath($data['row']->cover))}}" alt="" />
                            <div class="gallery-overlay">
                                <h5 class="overlay-caption">Cover Image</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <div class="col-lg-12">
        {!! Form::label('status', 'Status', ['class' => 'form-label']) !!}
        <div class="mb-3 mt-2">
            <div class="form-check form-check-inline form-radio-success">
                {!! Form::radio('status', 1, true,['class'=>'form-check-input','id'=>'status1']) !!}
                {!! Form::label('status1', 'Active', ['class' => 'form-check-label']) !!}
            </div>
            <div class="form-check form-check-inline form-radio-danger">
                {!! Form::radio('status', 0, false,['class'=>'form-check-input','id'=>'status2']) !!}
                {!! Form::label('status2', 'Inactive', ['class' => 'form-check-label']) !!}
            </div>
        </div>
    </div>
    <div class="col-lg-12 border-top mt-3">
        <div class="hstack gap-2">
            {!! Form::submit($button,['class'=>'btn btn-success mt-3','id'=>'user-add-button']) !!}
        </div>
    </div>
</div>

{!! Form::close() !!}
