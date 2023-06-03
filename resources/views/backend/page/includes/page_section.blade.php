<div class="row">
    <div class="col-lg-12">
        <div class="card ctm-border-radius shadow-sm grow">
            <div class="card-header">
                <h4 class="card-title doc d-inline-block mb-0">Choose the Section for Pages </h4>
                <br/>
                <span class="ctm-text-sm text-danger">* Click in the section images to use in page.</span>
            </div>
            <div class="card-body doc-body">

                <div class="card shadow-none">
                    <div class="card-header">
                        <h5 class="card-title text-primary mb-0">Basic Section {{ $page_method == 'edit' ? (in_array('basic_section', $data['section_slug']) ? "image-checkbox-checked":"") : ''}}</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="image-checkbox {{ $page_method == 'edit' ? (in_array('basic_section', $data['section_slug']) ? "image-checkbox-checked":"") : ''}}">
                                    <img class="img-responsive" src="{{asset('assets/backend/images/pages/sections/basic_section.png')}}" width="100%"/>
                                    <input type="checkbox" name="section[]" value="basic_section" id="basic_section.png" {{ $page_method == 'edit' ? (in_array('basic_section', $data['section_slug']) ? "checked":"") : ''}}/>
                                    <i class="ri ri-check-line hidden"></i>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow-none">
                    <div class="card-header">
                        <h5 class="card-title text-primary mb-0">Call to Action</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="image-checkbox {{ $page_method == 'edit' ? (in_array('call_to_action', $data['section_slug']) ? "image-checkbox-checked":"") : ''}}">
                                    <img class="img-responsive" src="{{asset('assets/backend/images/pages/sections/call_to_action.png')}}" width="100%"/>
                                    <input type="checkbox" name="section[]" value="call_to_action" id="call_to_action.png" {{ $page_method == 'edit' ? (in_array('call_to_action', $data['section_slug']) ? "checked":"") : ''}}/>
                                    <i class="ri ri-check-line hidden"></i>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card shadow-none">
                    <div class="card-header">
                        <h5 class="card-title text-primary mb-0">Flash Cards</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="image-checkbox {{ $page_method == 'edit' ? (in_array('flash_card', $data['section_slug']) ? "image-checkbox-checked":"") : ''}}">
                                    <img class="img-responsive" src="{{asset('assets/backend/images/pages/sections/flash_card.png')}}" width="100%"/>
                                    <input type="checkbox" name="section[]" value="flash_card" id="flash_card.png" {{ $page_method == 'edit' ? (in_array('flash_card', $data['section_slug']) ? "checked":"") : ''}} />
                                    <i class="ri ri-check-line hidden"></i>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow-none">
                    <div class="card-header">
                        <h5 class="card-title text-primary mb-0">Header & Description </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="image-checkbox {{ $page_method == 'edit' ? (in_array('header_description', $data['section_slug']) ? "image-checkbox-checked":"") : ''}}">
                                    <img class="img-responsive" src="{{asset('assets/backend/images/pages/sections/header_description.png')}}" width="100%"/>
                                    <input type="checkbox" name="section[]" value="header_description" id="header_description.png" {{ $page_method == 'edit' ? (in_array('header_description', $data['section_slug']) ? "checked":"") : ''}} />
                                    <i class="ri ri-check-line hidden"></i>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card shadow-none">
                    <div class="card-header">
                        <h5 class="card-title text-primary mb-0">Map and Description </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="image-checkbox {{ $page_method == 'edit' ? (in_array('map_description', $data['section_slug']) ? "image-checkbox-checked":"") : ''}}">
                                    <img class="img-responsive" src="{{asset('assets/backend/images/pages/sections/map_description.png')}}" width="100%"/>
                                    <input type="checkbox" name="section[]" value="map_description" id="map_description.png" {{ $page_method == 'edit' ? (in_array('map_description', $data['section_slug']) ? "checked":"") : ''}} />
                                    <i class="ri ri-check-line hidden"></i>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card shadow-none">
                    <div class="card-header">
                        <h5 class="card-title text-primary mb-0">FAQ Section</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    {!! Form::label('faq_list', 'Number of FAQs', ['class' => 'form-label']) !!}
                                    {!! Form::number('faq_list', 1,['class'=>'form-control','id'=>'name','min'=>'1','placeholder'=>'Enter number of FAQ']) !!}
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="image-checkbox {{ $page_method == 'edit' ? (in_array('faq', $data['section_slug']) ? "image-checkbox-checked":"") : ''}}">
                                    <img class="img-responsive" src="{{asset('assets/backend/images/pages/sections/faq.png')}}" width="100%"/>
                                    <input type="checkbox" name="section[]" value="faq" id="faq.png" {{ $page_method == 'edit' ? (in_array('faq', $data['section_slug']) ? "checked":"") : ''}} />
                                    <i class="ri ri-check-line hidden"></i>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="card shadow-none">
                    <div class="card-header">
                        <h5 class="card-title text-primary mb-0">Gallery Section</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    {!! Form::label('gallery_title', 'Title', ['class' => 'form-label']) !!}
                                    {!! Form::text('gallery_title', null,['class'=>'form-control','id'=>'gallery_title','placeholder'=>'Gallery Subtitle']) !!}
                                </div>
                                <div class="form-group mt-2">
                                    {!! Form::label('gallery_subtitle', 'Subtitle', ['class' => 'form-label']) !!}
                                    {!! Form::text('gallery_subtitle', null,['class'=>'form-control','id'=>'gallery_subtitle','placeholder'=>'Gallery Subtitle']) !!}
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label class="image-checkbox {{ $page_method == 'edit' ? (in_array('gallery', $data['section_slug']) ? "image-checkbox-checked":"") : ''}}">
                                    <img class="img-responsive" src="{{asset('assets/backend/images/pages/sections/gallery.png')}}" width="100%"/>
                                    <input type="checkbox" name="section[]" value="gallery" id="gallery.png" {{ $page_method == 'edit' ? (in_array('gallery', $data['section_slug']) ? "checked":"") : ''}} />
                                    <i class="ri ri-check-line hidden"></i>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
