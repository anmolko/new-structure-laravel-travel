@if($page_method == 'edit')
    {!! Form::model($data['row'], ['route' => [$base_route.'update',$data['row']->id ], 'method' => 'PUT','class'=>'submit_form']) !!}
@else
    {!! Form::open(['route' => $base_route.'store', 'method'=>'POST', 'class'=>'submit_form']) !!}
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
            {!! Form::label('package_type_id', 'Category', ['class' => 'form-label required']) !!}
            {!! Form::select('package_type_id', $data['types'], $data['row']->package_type_id ?? '',['class'=>'form-select mb-3 select2','id'=>'package_type_id','placeholder'=>'Select type']) !!}
        </div>
    </div>
    <div class="col-lg-12">
        <div class="mb-3">
            {!! Form::label('description', 'Description', ['class' => 'form-label']) !!}
            {!! Form::textarea('description', null,['class'=>'form-control ck-editor','id'=>'description','placeholder'=>'Enter description']) !!}

        </div>
    </div>
    <div class="col-lg-6">
        <div class="mb-3">
            {!! Form::label('image', 'Profile Images', ['class' => 'form-label']) !!}
            {!! Form::file('image', ['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-lg-6">
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
            {!! Form::submit('CREATE',['class'=>'btn btn-success mt-3','id'=>'user-add-button']) !!}
        </div>
    </div>
</div>

{!! Form::close() !!}
