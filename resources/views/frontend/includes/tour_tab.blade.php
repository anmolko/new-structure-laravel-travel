<div class="tab-pane fade" id="tour" role="tabpanel" aria-labelledby="tour-tab">
    <div class="contact-form-action">
        <form action="#" class="row align-items-center">
            <div class="col-lg-4 pr-0">
                <div class="input-box">
                    <label class="label-text"
                    >Where would like to go?</label
                    >
                    <div class="form-group">
                        <span class="la la-map-marker form-icon"></span>
                        <input
                            class="form-control"
                            type="text"
                            placeholder="Destination, city, or region"
                        />
                    </div>
                </div>
            </div>
            <!-- end col-lg-4 -->
            <div class="col-lg-4 pr-0">
                <div class="input-box">
                    <label class="label-text">From</label>
                    <div class="form-group">
                        <span class="la la-calendar form-icon"></span>
                        <input
                            class="date-range form-control"
                            type="text"
                            name="daterange-single"
                        />
                    </div>
                </div>
            </div>
            <!-- end col-lg-4 -->
            <div class="col-lg-4">
                <div class="input-box">
                    <label class="label-text">To</label>
                    <div class="form-group">
                        <span class="la la-calendar form-icon"></span>
                        <input
                            class="date-range form-control"
                            type="text"
                            name="daterange-single"
                        />
                    </div>
                </div>
            </div>
            <!-- end col-lg-4 -->
        </form>
    </div>
    <div class="advanced-wrap">
        <a
            class="btn collapse-btn theme-btn-hover-gray font-size-15"
            data-toggle="collapse"
            href="#collapseSeven"
            role="button"
            aria-expanded="false"
            aria-controls="collapseSeven"
        >
            Advanced search <i class="la la-angle-down ml-1"></i>
        </a>
        <div class="pt-3 collapse" id="collapseSeven">
            <div class="slider-range-wrap">
                <div class="price-slider-amount padding-bottom-20px">
                    <label for="amount" class="filter__label"
                    >Price Range</label
                    >
                    <input type="text" id="amount" class="amounts" />
                </div>
                <!-- end price-slider-amount -->
                <div id="slider-range"></div>
                <!-- end slider-range -->
            </div>
            <!-- end slider-range-wrap -->
            <div class="checkbox-wrap padding-top-30px">
                <h3 class="title font-size-15 pb-3">Tour Categories</h3>
                <div class="custom-checkbox d-inline-block mr-4">
                    <input type="checkbox" id="tourChb1" />
                    <label for="tourChb1">Active Adventure Tours</label>
                </div>
                <div class="custom-checkbox d-inline-block mr-4">
                    <input type="checkbox" id="tourChb2" />
                    <label for="tourChb2">Ecotourism</label>
                </div>
                <div class="custom-checkbox d-inline-block mr-4">
                    <input type="checkbox" id="tourChb3" />
                    <label for="tourChb3">Escorted Tours</label>
                </div>
                <div class="custom-checkbox d-inline-block mr-4">
                    <input type="checkbox" id="tourChb4" />
                    <label for="tourChb4">Group Tours</label>
                </div>
                <div class="custom-checkbox d-inline-block mr-4">
                    <input type="checkbox" id="tourChb5" />
                    <label for="tourChb5">Ligula</label>
                </div>
                <div class="custom-checkbox d-inline-block mr-4">
                    <input type="checkbox" id="tourChb6" />
                    <label for="tourChb6">Family Tours</label>
                </div>
                <div class="custom-checkbox d-inline-block mr-4">
                    <input type="checkbox" id="tourChb7" />
                    <label for="tourChb7">City Trips</label>
                </div>
                <div class="custom-checkbox d-inline-block mr-4">
                    <input type="checkbox" id="tourChb8" />
                    <label for="tourChb8">National Parks Tours</label>
                </div>
            </div>
        </div>
    </div>
    <div class="btn-box pt-3">
        <a href="tour-search-result.html" class="theme-btn"
        >Search Now</a
        >
    </div>
</div>
