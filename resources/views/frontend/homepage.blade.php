@extends('frontend.layouts.master')
@section('title') Home @endsection
@section('css')
@endsection
@section('content')


<section class="hero-wrapper hero-wrapper7">
    <div class="hero-box">
        <div id="fullscreen-slide-contain">
            <ul class="slides-container">
                <li><img src="images/hero-bg2.jpg" alt="" /></li>
                <li><img src="images/hero--bg2.jpg" alt="" /></li>
                <li><img src="images/hero--bg3.jpg" alt="" /></li>
            </ul>
        </div>
        <div class="cofntainer">
            <div class="row">
                <div class="col-lg-10 mx-auto responsive--column-l">
                    <div class="hero-content pb-5">
                        <div class="section-heading">
                            <h2 class="sec__title cd-headline zoom">
                                Amazing
                                <span class="cd-words-wrapper">
                                  <b class="is-visible">Tours</b>
                                  <b>Adventures</b>
                                  <b>Flights</b>
                                  <b>Hotels</b>
                                  <b>Cars</b>
                                  <b>Cruises</b>
                                  <b>Package Deals</b>
                                  <b>Fun</b>
                                  <b>People</b>
                                </span>
                                Waiting for You
                            </h2>
                        </div>
                    </div>
                    <!-- end hero-content -->
                    <div class="section-tab text-center pl-4">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a
                                    class="nav-link d-flex align-items-center active"
                                    id="flight-tab"
                                    data-toggle="tab"
                                    href="#flight"
                                    role="tab"
                                    aria-controls="flight"
                                    aria-selected="true"
                                >
                                    <i class="la la-plane mr-1"></i>Flights
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link d-flex align-items-center"
                                    id="tour-tab"
                                    data-toggle="tab"
                                    href="#tour"
                                    role="tab"
                                    aria-controls="tour"
                                    aria-selected="false"
                                >
                                    <i class="la la-globe mr-1"></i>Tours
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- end section-tab -->
                    <div
                        class="tab-content search-fields-container"
                        id="myTabContent">
                        <div class="tab-pane fade show active"
                            id="flight"
                            role="tabpanel"
                            aria-labelledby="flight-tab"
                        >
                            <div class="section-tab section-tab-2 pb-3">
                                <ul class="nav nav-tabs" id="myTab3" role="tablist">
                                    <li class="nav-item">
                                        <a
                                            class="nav-link active"
                                            id="one-way-tab"
                                            data-toggle="tab"
                                            href="#one-way"
                                            role="tab"
                                            aria-controls="one-way"
                                            aria-selected="true"
                                        >
                                            One way
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            class="nav-link"
                                            id="round-trip-tab"
                                            data-toggle="tab"
                                            href="#round-trip"
                                            role="tab"
                                            aria-controls="round-trip"
                                            aria-selected="false"
                                        >
                                            Round-trip
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            class="nav-link"
                                            id="multi-city-tab"
                                            data-toggle="tab"
                                            href="#multi-city"
                                            role="tab"
                                            aria-controls="multi-city"
                                            aria-selected="false"
                                        >
                                            Multi-city
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end section-tab -->
                            <div class="tab-content" id="myTabContent3">
                                <div
                                    class="tab-pane fade show active"
                                    id="one-way"
                                    role="tabpanel"
                                    aria-labelledby="one-way-tab"
                                >
                                    <div class="contact-form-action">
                                        <form action="#" class="row align-items-center">
                                            <div class="col-lg-6 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Flying from</label>
                                                    <div class="form-group">
                                                        <span class="la la-map-marker form-icon"></span>
                                                        <input
                                                            class="form-control"
                                                            type="text"
                                                            placeholder="City or airport"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col-lg-3 -->
                                            <div class="col-lg-6">
                                                <div class="input-box">
                                                    <label class="label-text">Flying to</label>
                                                    <div class="form-group">
                                                        <span class="la la-map-marker form-icon"></span>
                                                        <input
                                                            class="form-control"
                                                            type="text"
                                                            placeholder="City or airport"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col-lg-3 -->
                                            <div class="col-lg-3 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Departing</label>
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
                                            <!-- end col-lg-3 -->
                                            <div class="col-lg-3 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Passengers</label>
                                                    <div class="form-group">
                                                        <div
                                                            class="dropdown dropdown-contain gty-container"
                                                        >
                                                            <a
                                                                class="dropdown-toggle dropdown-btn"
                                                                href="#"
                                                                role="button"
                                                                data-toggle="dropdown"
                                                                aria-expanded="false"
                                                            >
                                    <span
                                        class="adult"
                                        data-text="Adult"
                                        data-text-multi="Adults"
                                    >0 Adult</span
                                    >
                                                                -
                                                                <span
                                                                    class="children"
                                                                    data-text="Child"
                                                                    data-text-multi="Children"
                                                                >0 Child</span
                                                                >
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-wrap">
                                                                <div class="dropdown-item">
                                                                    <div
                                                                        class="qty-box d-flex align-items-center justify-content-between"
                                                                    >
                                                                        <label>Adults</label>
                                                                        <div
                                                                            class="qtyBtn d-flex align-items-center"
                                                                        >
                                                                            <div class="qtyDec">
                                                                                <i class="la la-minus"></i>
                                                                            </div>
                                                                            <input
                                                                                type="text"
                                                                                name="adult_number"
                                                                                value="0"
                                                                            />
                                                                            <div class="qtyInc">
                                                                                <i class="la la-plus"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-item">
                                                                    <div
                                                                        class="qty-box d-flex align-items-center justify-content-between"
                                                                    >
                                                                        <label>Children</label>
                                                                        <div
                                                                            class="qtyBtn d-flex align-items-center"
                                                                        >
                                                                            <div class="qtyDec">
                                                                                <i class="la la-minus"></i>
                                                                            </div>
                                                                            <input
                                                                                type="text"
                                                                                name="child_number"
                                                                                value="0"
                                                                            />
                                                                            <div class="qtyInc">
                                                                                <i class="la la-plus"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-item">
                                                                    <div
                                                                        class="qty-box d-flex align-items-center justify-content-between"
                                                                    >
                                                                        <label>Infants</label>
                                                                        <div
                                                                            class="qtyBtn d-flex align-items-center"
                                                                        >
                                                                            <div class="qtyDec">
                                                                                <i class="la la-minus"></i>
                                                                            </div>
                                                                            <input
                                                                                type="text"
                                                                                name="infants_number"
                                                                                value="0"
                                                                            />
                                                                            <div class="qtyInc">
                                                                                <i class="la la-plus"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end dropdown -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col-lg-3 -->
                                            <div class="col-lg-3 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Coach</label>
                                                    <div class="form-group select-contain w-auto">
                                                        <select class="select-contain-select">
                                                            <option value="1" selected>Economy</option>
                                                            <option value="2">Business</option>
                                                            <option value="3">First class</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col-lg-3 -->
                                            <div class="col-lg-3">
                                                <a
                                                    href="flight-search-result.html"
                                                    class="theme-btn w-100 text-center margin-top-20px"
                                                >Search Now</a
                                                >
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- end tab-pane -->
                                <div
                                    class="tab-pane fade"
                                    id="round-trip"
                                    role="tabpanel"
                                    aria-labelledby="round-trip-tab"
                                >
                                    <div class="contact-form-action">
                                        <form action="#" class="row align-items-center">
                                            <div class="col-lg-6 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Flying from</label>
                                                    <div class="form-group">
                                                        <span class="la la-map-marker form-icon"></span>
                                                        <input
                                                            class="form-control"
                                                            type="text"
                                                            placeholder="City or airport"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col-lg-3 -->
                                            <div class="col-lg-6">
                                                <div class="input-box">
                                                    <label class="label-text">Flying to</label>
                                                    <div class="form-group">
                                                        <span class="la la-map-marker form-icon"></span>
                                                        <input
                                                            class="form-control"
                                                            type="text"
                                                            placeholder="City or airport"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col-lg-3 -->
                                            <div class="col-lg-3 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text"
                                                    >Departing - Returning</label
                                                    >
                                                    <div class="form-group">
                                                        <span class="la la-calendar form-icon"></span>
                                                        <input
                                                            class="date-range form-control"
                                                            type="text"
                                                            name="daterange"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col-lg-3 -->
                                            <div class="col-lg-3 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Passengers</label>
                                                    <div class="form-group">
                                                        <div
                                                            class="dropdown dropdown-contain gty-container"
                                                        >
                                                            <a
                                                                class="dropdown-toggle dropdown-btn"
                                                                href="#"
                                                                role="button"
                                                                data-toggle="dropdown"
                                                                aria-expanded="false"
                                                            >
                                    <span
                                        class="adult"
                                        data-text="Adult"
                                        data-text-multi="Adults"
                                    >0 Adult</span
                                    >
                                                                -
                                                                <span
                                                                    class="children"
                                                                    data-text="Child"
                                                                    data-text-multi="Children"
                                                                >0 Child</span
                                                                >
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-wrap">
                                                                <div class="dropdown-item">
                                                                    <div
                                                                        class="qty-box d-flex align-items-center justify-content-between"
                                                                    >
                                                                        <label>Adults</label>
                                                                        <div
                                                                            class="qtyBtn d-flex align-items-center"
                                                                        >
                                                                            <div class="qtyDec">
                                                                                <i class="la la-minus"></i>
                                                                            </div>
                                                                            <input
                                                                                type="text"
                                                                                name="adult_number"
                                                                                value="0"
                                                                            />
                                                                            <div class="qtyInc">
                                                                                <i class="la la-plus"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-item">
                                                                    <div
                                                                        class="qty-box d-flex align-items-center justify-content-between"
                                                                    >
                                                                        <label>Children</label>
                                                                        <div
                                                                            class="qtyBtn d-flex align-items-center"
                                                                        >
                                                                            <div class="qtyDec">
                                                                                <i class="la la-minus"></i>
                                                                            </div>
                                                                            <input
                                                                                type="text"
                                                                                name="child_number"
                                                                                value="0"
                                                                            />
                                                                            <div class="qtyInc">
                                                                                <i class="la la-plus"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-item">
                                                                    <div
                                                                        class="qty-box d-flex align-items-center justify-content-between"
                                                                    >
                                                                        <label>Infants</label>
                                                                        <div
                                                                            class="qtyBtn d-flex align-items-center"
                                                                        >
                                                                            <div class="qtyDec">
                                                                                <i class="la la-minus"></i>
                                                                            </div>
                                                                            <input
                                                                                type="text"
                                                                                name="infants_number"
                                                                                value="0"
                                                                            />
                                                                            <div class="qtyInc">
                                                                                <i class="la la-plus"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end dropdown -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col-lg-3 -->
                                            <div class="col-lg-3 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Coach</label>
                                                    <div class="form-group">
                                                        <div class="select-contain w-auto">
                                                            <select class="select-contain-select">
                                                                <option value="1" selected>Economy</option>
                                                                <option value="2">Business</option>
                                                                <option value="3">First class</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col-lg-3 -->
                                            <div class="col-lg-3">
                                                <a
                                                    href="flight-search-result.html"
                                                    class="theme-btn w-100 text-center margin-top-20px"
                                                >Search Now</a
                                                >
                                            </div>
                                        </form>
                                    </div>
                                    <div class="advanced-wrap">
                                        <a
                                            class="btn collapse-btn theme-btn-hover-gray font-size-15"
                                            data-toggle="collapse"
                                            href="#collapseThree"
                                            role="button"
                                            aria-expanded="false"
                                            aria-controls="collapseThree"
                                        >
                                            Advanced options <i class="la la-angle-down ml-1"></i>
                                        </a>
                                        <div class="collapse pt-3" id="collapseThree">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="input-box">
                                                        <label class="label-text"
                                                        >Preferred airline</label
                                                        >
                                                        <div class="form-group">
                                                            <div class="select-contain w-100">
                                                                <select class="select-contain-select">
                                                                    <option selected="selected" value="">
                                                                        No preference
                                                                    </option>
                                                                    <option value="AN">Advanced Air</option>
                                                                    <option value="A3">Aegean</option>
                                                                    <option value="EI">Aer Lingus</option>
                                                                    <option value="5G">
                                                                        Aerocuahonte / Mayair
                                                                    </option>
                                                                    <option value="SU">
                                                                        Aeroflot-Russian Airlines
                                                                    </option>
                                                                    <option value="AR">
                                                                        Aerolineas Argentinas
                                                                    </option>
                                                                    <option value="VW">
                                                                        Aeromar Airlines
                                                                    </option>
                                                                    <option value="AM">Aeromexico</option>
                                                                    <option value="ZI">Aigle Azur</option>
                                                                    <option value="AH">Air Algerie</option>
                                                                    <option value="KC">Air Astana</option>
                                                                    <option value="UU">Air Austral</option>
                                                                    <option value="BT">Air Baltic</option>
                                                                    <option value="BP">Air Botswana</option>
                                                                    <option value="AC">Air Canada</option>
                                                                    <option value="TX">Air Caraibes</option>
                                                                    <option value="CA">Air China</option>
                                                                    <option value="3E">Air Choice One</option>
                                                                    <option value="XK">Air Corsica</option>
                                                                    <option value="UX">Air Europa</option>
                                                                    <option value="X4">
                                                                        Air Excursions LLC
                                                                    </option>
                                                                    <option value="AF">Air France</option>
                                                                    <option value="NY">
                                                                        Air Iceland Connect
                                                                    </option>
                                                                    <option value="AI">Air India</option>
                                                                    <option value="IG">Air Italy</option>
                                                                    <option value="MD">Air Madagascar</option>
                                                                    <option value="KM">Air Malta</option>
                                                                    <option value="MK">Air Mauritius</option>
                                                                    <option value="9U">Air Moldova</option>
                                                                    <option value="NZ">
                                                                        Air New Zealand
                                                                    </option>
                                                                    <option value="PX">Air Niugini</option>
                                                                    <option value="OG">Air Onix</option>
                                                                    <option value="JU">Air Serbia</option>
                                                                    <option value="TN">Air Tahiti Nui</option>
                                                                    <option value="TS">Air Transat</option>
                                                                    <option value="H/">
                                                                        AirAsia with baggage
                                                                    </option>
                                                                    <option value="AS">
                                                                        Alaska Airlines
                                                                    </option>
                                                                    <option value="AZ">Alitalia</option>
                                                                    <option value="NH">
                                                                        All Nippon Airways
                                                                    </option>
                                                                    <option value="G4">Allegiant Air</option>
                                                                    <option value="AA">
                                                                        American Airlines
                                                                    </option>
                                                                    <option value="OY">
                                                                        Andes Lineas Aereas
                                                                    </option>
                                                                    <option value="OZ">
                                                                        Asiana Airlines
                                                                    </option>
                                                                    <option value="KP">ASKY</option>
                                                                    <option value="OS">
                                                                        Austrian Airlines
                                                                    </option>
                                                                    <option value="AV">Avianca</option>
                                                                    <option value="2K">
                                                                        Avianca Ecuador
                                                                    </option>
                                                                    <option value="9V">Avior Airlines</option>
                                                                    <option value="J2">
                                                                        Azerbaijan Airlines
                                                                    </option>
                                                                    <option value="AD">Azul</option>
                                                                    <option value="JD">
                                                                        Beijing Capital Airlines
                                                                    </option>
                                                                    <option value="0B">BlueAir</option>
                                                                    <option value="OB">
                                                                        Boliviana De Aviacion
                                                                    </option>
                                                                    <option value="4B">Boutique Air</option>
                                                                    <option value="BA">
                                                                        British Airways
                                                                    </option>
                                                                    <option value="SN">
                                                                        Brussels Airlines
                                                                    </option>
                                                                    <option value="A7">
                                                                        Calafia Airlines
                                                                    </option>
                                                                    <option value="K6">
                                                                        Cambodia Angkor Air
                                                                    </option>
                                                                    <option value="BW">
                                                                        Caribbean Airlines
                                                                    </option>
                                                                    <option value="CX">Cathay Pacific</option>
                                                                    <option value="KX">Cayman Airways</option>
                                                                    <option value="CI">China Airlines</option>
                                                                    <option value="MU">
                                                                        China Eastern Airlines
                                                                    </option>
                                                                    <option value="CZ">
                                                                        China Southern Airlines
                                                                    </option>
                                                                    <option value="CC">CM Airlines</option>
                                                                    <option value="DE">Condor</option>
                                                                    <option value="LF">
                                                                        Contour Airlines
                                                                    </option>
                                                                    <option value="CM">Copa</option>
                                                                    <option value="SS">Corsair</option>
                                                                    <option value="OK">Czech Airlines</option>
                                                                    <option value="DL">Delta</option>
                                                                    <option value="KG">
                                                                        Denver Air Connection
                                                                    </option>
                                                                    <option value="U2">easyJet</option>
                                                                    <option value="MS">Egyptair</option>
                                                                    <option value="LY">
                                                                        EL AL Israel Airlines
                                                                    </option>
                                                                    <option value="7Q">Elite Airways</option>
                                                                    <option value="EL">Ellinair</option>
                                                                    <option value="EK">Emirates</option>
                                                                    <option value="ET">
                                                                        Ethiopian Airlines
                                                                    </option>
                                                                    <option value="EY">Etihad Airways</option>
                                                                    <option value="EW">Eurowings</option>
                                                                    <option value="BR">EVA Airways</option>
                                                                    <option value="FJ">Fiji Airways</option>
                                                                    <option value="AY">Finnair</option>
                                                                    <option value="FY">Firefly</option>
                                                                    <option value="F8">Flair Airlines</option>
                                                                    <option value="BE">Flybe</option>
                                                                    <option value="FZ">flydubai</option>
                                                                    <option value="XY">flynas</option>
                                                                    <option value="F9">
                                                                        Frontier Airlines
                                                                    </option>
                                                                    <option value="GA">
                                                                        Garuda Indonesia
                                                                    </option>
                                                                    <option value="GM">
                                                                        Germania Flug AG
                                                                    </option>
                                                                    <option value="4U">Germanwings</option>
                                                                    <option value="G3">
                                                                        GOL Linhas Aereas S.A.
                                                                    </option>
                                                                    <option value="ZK">
                                                                        Great Lakes Airlines
                                                                    </option>
                                                                    <option value="GF">Gulf Air</option>
                                                                    <option value="HU">
                                                                        Hainan Airlines
                                                                    </option>
                                                                    <option value="HA">
                                                                        Hawaiian Airlines
                                                                    </option>
                                                                    <option value="HX">
                                                                        Hong Kong Airlines
                                                                    </option>
                                                                    <option value="IB">Iberia</option>
                                                                    <option value="FI">Icelandair</option>
                                                                    <option value="JY">
                                                                        interCaribbean Airways
                                                                    </option>
                                                                    <option value="4O">Interjet</option>
                                                                    <option value="03">Involatus</option>
                                                                    <option value="JL">Japan Airlines</option>
                                                                    <option value="9W">Jet Airways</option>
                                                                    <option value="B6">
                                                                        JetBlue Airways
                                                                    </option>
                                                                    <option value="DV">
                                                                        JSC Aircompany SCAT
                                                                    </option>
                                                                    <option value="KQ">Kenya Airways</option>
                                                                    <option value="KL">KLM</option>
                                                                    <option value="KE">Korean Air</option>
                                                                    <option value="B0">La Compagnie</option>
                                                                    <option value="LR">LACSA</option>
                                                                    <option value="QV">Lao Airlines</option>
                                                                    <option value="LP">
                                                                        LATAM Airlines Group
                                                                    </option>
                                                                    <option value="LA">
                                                                        LATAM Airlines Group
                                                                    </option>
                                                                    <option value="JJ">
                                                                        LATAM Airlines Group
                                                                    </option>
                                                                    <option value="XL">
                                                                        LATAM Airlines Group
                                                                    </option>
                                                                    <option value="4M">
                                                                        LATAM Airlines Group
                                                                    </option>
                                                                    <option value="W4">LC Peru</option>
                                                                    <option value="LI">Liat</option>
                                                                    <option value="LO">
                                                                        LOT-Polish Airlines
                                                                    </option>
                                                                    <option value="LH">Lufthansa</option>
                                                                    <option value="LG">Luxair</option>
                                                                    <option value="MH">
                                                                        Malaysia Airlines
                                                                    </option>
                                                                    <option value="OD">Malindo Air</option>
                                                                    <option value="2M">
                                                                        Maya Island Air
                                                                    </option>
                                                                    <option value="7M">Mayair</option>
                                                                    <option value="OM">
                                                                        MIAT-Mongolian Airlines
                                                                    </option>
                                                                    <option value="ME">
                                                                        Middle East Airlines
                                                                    </option>
                                                                    <option value="YM">Montenegro</option>
                                                                    <option value="8M">
                                                                        Myanmar Airways International
                                                                    </option>
                                                                    <option value="NO">Neos S.P.A.</option>
                                                                    <option value="RA">Nepal Airlines</option>
                                                                    <option value="NP">Nile Air</option>
                                                                    <option value="W/">
                                                                        NokScoot with baggage
                                                                    </option>
                                                                    <option value="DN">
                                                                        Norwegian Air Argentina
                                                                    </option>
                                                                    <option value="D8">
                                                                        Norwegian Air International Ltd
                                                                    </option>
                                                                    <option value="DY">
                                                                        Norwegian Air Shuttle
                                                                    </option>
                                                                    <option value="DI">
                                                                        Norwegian Air UK
                                                                    </option>
                                                                    <option value="Y/">
                                                                        Olympic Air with baggage
                                                                    </option>
                                                                    <option value="WY">Oman Air</option>
                                                                    <option value="8Q">Onur Air</option>
                                                                    <option value="8P">
                                                                        Pacific Coastal Airlines
                                                                    </option>
                                                                    <option value="PK">
                                                                        Pakistan International Airlines
                                                                    </option>
                                                                    <option value="ZM">Pegasus Asia</option>
                                                                    <option value="KS">PenAir</option>
                                                                    <option value="PR">
                                                                        Philippine Airlines
                                                                    </option>
                                                                    <option value="PU">
                                                                        Plus Ultra Lineas Aereas S. A.
                                                                    </option>
                                                                    <option value="PD">
                                                                        Porter Airlines
                                                                    </option>
                                                                    <option value="PW">PrecisionAir</option>
                                                                    <option value="P0">
                                                                        Proflight Zambia
                                                                    </option>
                                                                    <option value="QF">Qantas Airways</option>
                                                                    <option value="QR">Qatar Airways</option>
                                                                    <option value="7H">Ravn Alaska</option>
                                                                    <option value="WZ">
                                                                        Red Wings Airlines
                                                                    </option>
                                                                    <option value="4P">Regional Sky</option>
                                                                    <option value="AT">
                                                                        Royal Air Maroc
                                                                    </option>
                                                                    <option value="BI">
                                                                        Royal Brunei Airlines
                                                                    </option>
                                                                    <option value="RJ">
                                                                        Royal Jordanian
                                                                    </option>
                                                                    <option value="WB">Rwandair</option>
                                                                    <option value="SK">SAS</option>
                                                                    <option value="S4">
                                                                        SATA International-Azores Airlines S.A.
                                                                    </option>
                                                                    <option value="SV">
                                                                        Saudi Arabian Airlines
                                                                    </option>
                                                                    <option value="/Y">
                                                                        Scoot with baggage
                                                                    </option>
                                                                    <option value="BB">
                                                                        Seaborne Airlines
                                                                    </option>
                                                                    <option value="SC">
                                                                        Shandong Airlines
                                                                    </option>
                                                                    <option value="3U">
                                                                        Sichuan Airlines
                                                                    </option>
                                                                    <option value="3M">Silver Airways</option>
                                                                    <option value="SQ">
                                                                        Singapore Airlines
                                                                    </option>
                                                                    <option value="H2">Sky Airlines</option>
                                                                    <option value="GQ">Sky Express</option>
                                                                    <option value="IE">
                                                                        Solomon Airlines
                                                                    </option>
                                                                    <option value="SA">
                                                                        South African Airways
                                                                    </option>
                                                                    <option value="9X">
                                                                        Southern Airways
                                                                    </option>
                                                                    <option value="NK">
                                                                        Spirit Airlines
                                                                    </option>
                                                                    <option value="UL">
                                                                        SriLankan Airlines
                                                                    </option>
                                                                    <option value="2I">STAR PERU</option>
                                                                    <option value="6G">
                                                                        Sun Air Express
                                                                    </option>
                                                                    <option value="SY">
                                                                        Sun Country Airlines
                                                                    </option>
                                                                    <option value="PY">
                                                                        Surinam Airways
                                                                    </option>
                                                                    <option value="LX">
                                                                        Swiss International Air Lines
                                                                    </option>
                                                                    <option value="WO">Swoop</option>
                                                                    <option value="DT">
                                                                        TAAG Angola Airlines
                                                                    </option>
                                                                    <option value="TA">TACA Airlines</option>
                                                                    <option value="VR">
                                                                        TACV-Cabo Verde Airlines
                                                                    </option>
                                                                    <option value="5U">TAG Airlines</option>
                                                                    <option value="EQ">Tame</option>
                                                                    <option value="TP">TAP Portugal</option>
                                                                    <option value="RO">
                                                                        Tarom-Romanian Air Transport
                                                                    </option>
                                                                    <option value="TG">
                                                                        Thai Airways International
                                                                    </option>
                                                                    <option value="MT">
                                                                        Thomas Cook Airlines
                                                                    </option>
                                                                    <option value="/X">
                                                                        Tigerair Australia with Bag
                                                                    </option>
                                                                    <option value="IT">
                                                                        Tigerair Taiwan
                                                                    </option>
                                                                    <option value="/Z">
                                                                        Tigerair Taiwan with bag
                                                                    </option>
                                                                    <option value="TJ">
                                                                        Tradewind Aviation
                                                                    </option>
                                                                    <option value="9N">Tropic Air</option>
                                                                    <option value="TB">TUI fly</option>
                                                                    <option value="TK">
                                                                        Turkish Airlines
                                                                    </option>
                                                                    <option value="PS">
                                                                        Ukraine International Airlines
                                                                    </option>
                                                                    <option value="UA">United</option>
                                                                    <option value="UT">Utair Aviation</option>
                                                                    <option value="HY">
                                                                        Uzbekistan Airways
                                                                    </option>
                                                                    <option value="VN">
                                                                        Vietnam Airlines
                                                                    </option>
                                                                    <option value="VX">Virgin America</option>
                                                                    <option value="VS">
                                                                        Virgin Atlantic
                                                                    </option>
                                                                    <option value="VA">
                                                                        Virgin Australia
                                                                    </option>
                                                                    <option value="V2">
                                                                        Vision Airlines
                                                                    </option>
                                                                    <option value="VB">Viva Aerobus</option>
                                                                    <option value="F1">
                                                                        Viva Air Colombia
                                                                    </option>
                                                                    <option value="VV">
                                                                        Viva Airlines Peru
                                                                    </option>
                                                                    <option value="Y4">Volaris</option>
                                                                    <option value="V7">Volotea</option>
                                                                    <option value="VY">
                                                                        Vueling Airlines
                                                                    </option>
                                                                    <option value="WS">WestJet</option>
                                                                    <option value="WM">
                                                                        Windward Island Airways International
                                                                    </option>
                                                                    <option value="MF">
                                                                        Xiamen Airlines
                                                                    </option>
                                                                    <option value="SE">XL Airways</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end advanced-wrap -->
                                </div>
                                <!-- end tab-pane -->
                                <div
                                    class="tab-pane fade multi-flight-wrap"
                                    id="multi-city"
                                    role="tabpanel"
                                    aria-labelledby="multi-city-tab"
                                >
                                    <div
                                        class="contact-form-action multi-flight-field d-flex align-items-center"
                                    >
                                        <form
                                            action="#"
                                            class="row flex-grow-1 align-items-center"
                                        >
                                            <div class="col-lg-4 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Flying from</label>
                                                    <div class="form-group">
                                                        <span class="la la-map-marker form-icon"></span>
                                                        <input
                                                            class="form-control"
                                                            type="text"
                                                            placeholder="City or airport"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col-lg-3 -->
                                            <div class="col-lg-4 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Flying to</label>
                                                    <div class="form-group">
                                                        <span class="la la-map-marker form-icon"></span>
                                                        <input
                                                            class="form-control"
                                                            type="text"
                                                            placeholder="City or airport"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col-lg-3 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Departing</label>
                                                    <div class="form-group">
                                                        <span class="la la-calendar form-icon"></span>
                                                        <input
                                                            class="date-range form-control date-multi-picker"
                                                            id="date"
                                                            type="text"
                                                            name="daterange-single"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col-lg-3 -->
                                        </form>
                                        <div class="multi-flight-delete-wrap pt-3 pl-3">
                                            <button class="multi-flight-remove" type="button">
                                                <i class="la la-remove"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-lg-3 pr-0">
                                            <div class="form-group">
                                                <button
                                                    class="theme-btn add-flight-btn margin-top-40px w-100"
                                                    type="button"
                                                >
                                                    <i class="la la-plus mr-1"></i>Add another flight
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">Passengers</label>
                                                <div class="form-group">
                                                    <div
                                                        class="dropdown dropdown-contain gty-container"
                                                    >
                                                        <a
                                                            class="dropdown-toggle dropdown-btn"
                                                            href="#"
                                                            role="button"
                                                            data-toggle="dropdown"
                                                            aria-expanded="false"
                                                        >
                                  <span
                                      class="adult"
                                      data-text="Adult"
                                      data-text-multi="Adults"
                                  >0 Adult</span
                                  >
                                                            -
                                                            <span
                                                                class="children"
                                                                data-text="Child"
                                                                data-text-multi="Children"
                                                            >0 Child</span
                                                            >
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-wrap">
                                                            <div class="dropdown-item">
                                                                <div
                                                                    class="qty-box d-flex align-items-center justify-content-between"
                                                                >
                                                                    <label>Adults</label>
                                                                    <div
                                                                        class="qtyBtn d-flex align-items-center"
                                                                    >
                                                                        <div class="qtyDec">
                                                                            <i class="la la-minus"></i>
                                                                        </div>
                                                                        <input
                                                                            type="text"
                                                                            name="adult_number"
                                                                            value="0"
                                                                        />
                                                                        <div class="qtyInc">
                                                                            <i class="la la-plus"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown-item">
                                                                <div
                                                                    class="qty-box d-flex align-items-center justify-content-between"
                                                                >
                                                                    <label>Children</label>
                                                                    <div
                                                                        class="qtyBtn d-flex align-items-center"
                                                                    >
                                                                        <div class="qtyDec">
                                                                            <i class="la la-minus"></i>
                                                                        </div>
                                                                        <input
                                                                            type="text"
                                                                            name="child_number"
                                                                            value="0"
                                                                        />
                                                                        <div class="qtyInc">
                                                                            <i class="la la-plus"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown-item">
                                                                <div
                                                                    class="qty-box d-flex align-items-center justify-content-between"
                                                                >
                                                                    <label>Infants</label>
                                                                    <div
                                                                        class="qtyBtn d-flex align-items-center"
                                                                    >
                                                                        <div class="qtyDec">
                                                                            <i class="la la-minus"></i>
                                                                        </div>
                                                                        <input
                                                                            type="text"
                                                                            name="infants_number"
                                                                            value="0"
                                                                        />
                                                                        <div class="qtyInc">
                                                                            <i class="la la-plus"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end dropdown -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col-lg-3 -->
                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">Coach</label>
                                                <div class="form-group">
                                                    <div class="select-contain w-auto">
                                                        <select class="select-contain-select">
                                                            <option value="1" selected>Economy</option>
                                                            <option value="2">Business</option>
                                                            <option value="3">First class</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col-lg-3 -->
                                        <div class="col-lg-3">
                                            <a
                                                href="flight-search-result.html"
                                                class="theme-btn w-100 text-center margin-top-20px"
                                            >Search Now</a
                                            >
                                        </div>
                                    </div>
                                </div>
                                <!-- end tab-pane -->
                            </div>
                        </div>

                        <div
                            class="tab-pane fade"
                            id="tour"
                            role="tabpanel"
                            aria-labelledby="tour-tab"
                        >
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
                        <!-- end tab-pane -->
                    </div>
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
        </div>
    </div>
</section>
<!-- end hero-wrapper -->


<section class="info-area padding-top-80px padding-bottom-45px">
    <div class="arrow-separator"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 responsive-column">
                <div class="icon-box icon-layout-2 d-flex align-items-center">
                    <div class="info-icon flex-shrink-0 bg-rgb radius-round-full">
                        <img src="images/browser.png" class="w-50" alt="" />
                    </div>
                    <!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Best Selection</h4>
                        <p class="info__desc">
                            Praesent commodo cursus magna, vel scelerisque nisl
                            consectetur et.
                        </p>
                    </div>
                    <!-- end info-content -->
                </div>
                <!-- end icon-box -->
            </div>
            <!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="icon-box icon-layout-2 d-flex align-items-center">
                    <div class="info-icon flex-shrink-0 bg-rgb-2 radius-round-full">
                        <img src="images/layout.png" class="w-50" alt="" />
                    </div>
                    <!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Best Price Guarantee</h4>
                        <p class="info__desc">
                            Praesent commodo cursus magna, vel scelerisque nisl
                            consectetur et.
                        </p>
                    </div>
                    <!-- end info-content -->
                </div>
                <!-- end icon-box -->
            </div>
            <!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="icon-box icon-layout-2 d-flex align-items-center">
                    <div class="info-icon flex-shrink-0 bg-rgb-3 radius-round-full">
                        <img src="images/support.png" class="w-50" alt="" />
                    </div>
                    <!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">24/7 Support</h4>
                        <p class="info__desc">
                            Praesent commodo cursus magna, vel scelerisque nisl
                            consectetur et.
                        </p>
                    </div>
                    <!-- end info-content -->
                </div>
                <!-- end icon-box -->
            </div>
            <!-- end col-lg-4 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end info-area -->
<!-- ================================
END INFO AREA
================================= -->

<!-- ================================
START TRENDING AREA
================================= -->
<section
    class="trending-area position-relative section-bg padding-top-100px padding-bottom-200px"
>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2
                        class="sec__title curve-shape padding-bottom-30px"
                        data-text="curvs"
                    >
                        Popular tour in the month
                    </h2>
                </div>
                <!-- end section-heading -->
            </div>
            <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
        <div class="row padding-top-50px">
            <div class="col-lg-12">
                <div class="trending-carousel carousel-action">
                    <div class="card-item trending-card mb-0">
                        <div class="card-img">
                            <a href="tour-details.html" class="d-block">
                                <img src="images/img9.jpg" alt="Destination-img" />
                            </a>
                            <span class="badge">Bestseller</span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title mb-0">
                                <a href="tour-details.html"
                                >Empire State Building Admission</a
                                >
                            </h3>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="rating__text">30 Reviews</span>
                            </div>
                            <div
                                class="card-price d-flex align-items-center justify-content-between"
                            >
                                <span><i class="la la-clock mr-1"></i>5 Days</span>
                                <p>
                                    <span class="price__from">from</span>
                                    <span class="price__num">$124.00</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end card-item -->
                    <div class="card-item trending-card mb-0">
                        <div class="card-img">
                            <a href="tour-details.html" class="d-block">
                                <img src="images/img10.jpg" alt="Destination-img" />
                            </a>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title mb-0">
                                <a href="tour-details.html">Hut on Blue Water Beach Tour</a>
                            </h3>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="rating__text">30 Reviews</span>
                            </div>
                            <div
                                class="card-price d-flex align-items-center justify-content-between"
                            >
                                <span><i class="la la-clock mr-1"></i>7 Hours</span>
                                <p>
                                    <span class="price__from">from</span>
                                    <span class="price__num">$100.00</span>
                                    <span class="price__num before-price color-text-3"
                                    >$124.00</span
                                    >
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end card-item -->
                    <div class="card-item trending-card mb-0">
                        <div class="card-img">
                            <a href="tour-details.html" class="d-block">
                                <img src="images/img11.jpg" alt="Destination-img" />
                            </a>
                            <span class="badge">Featured</span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title mb-0">
                                <a href="tour-details.html">Golden Gate Seaplane Tour</a>
                            </h3>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="rating__text">30 Reviews</span>
                            </div>
                            <div
                                class="card-price d-flex align-items-center justify-content-between"
                            >
                                <span><i class="la la-clock mr-1"></i>6 Days</span>
                                <p>
                                    <span class="price__from">from</span>
                                    <span class="price__num">$124.00</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end card-item -->
                    <div class="card-item trending-card mb-0">
                        <div class="card-img">
                            <a href="tour-details.html" class="d-block">
                                <img src="images/img12.jpg" alt="Destination-img" />
                            </a>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title mb-0">
                                <a href="tour-details.html"
                                >Two Hours Guided Horseback Tour</a
                                >
                            </h3>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="rating__text">30 Reviews</span>
                            </div>
                            <div
                                class="card-price d-flex align-items-center justify-content-between"
                            >
                                <span><i class="la la-clock mr-1"></i>10 Days</span>
                                <p>
                                    <span class="price__from">from</span>
                                    <span class="price__num">$224.00</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end card-item -->
                    <div class="card-item trending-card mb-0">
                        <div class="card-img">
                            <a href="tour-details.html" class="d-block">
                                <img src="images/img13.jpg" alt="Destination-img" />
                            </a>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title mb-0">
                                <a href="tour-details.html">Scuba Diving in Boyton Beach</a>
                            </h3>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="rating__text">30 Reviews</span>
                            </div>
                            <div
                                class="card-price d-flex align-items-center justify-content-between"
                            >
                                <span><i class="la la-clock mr-1"></i>2-4 Hours</span>
                                <p>
                                    <span class="price__from">from</span>
                                    <span class="price__num">$124.00</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end card-item -->
                    <div class="card-item trending-card mb-0">
                        <div class="card-img">
                            <a href="tour-details.html" class="d-block">
                                <img src="images/img14.jpg" alt="Destination-img" />
                            </a>
                            <span class="badge">Featured</span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title mb-0">
                                <a href="tour-details.html"
                                >Mangrove Tunnel Kayak Eco Tour</a
                                >
                            </h3>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="rating__text">30 Reviews</span>
                            </div>
                            <div
                                class="card-price d-flex align-items-center justify-content-between"
                            >
                                <span><i class="la la-clock mr-1"></i>10 Days</span>
                                <p>
                                    <span class="price__from">from</span>
                                    <span class="price__num">$224.00</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end card-item -->
                </div>
                <!-- end car-carousel -->
            </div>
            <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
    <svg
        class="hero-svg"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 100 10"
        preserveAspectRatio="none"
    >
        <path d="M0 10 0 0 A 90 59, 0, 0, 0, 100 0 L 100 10 Z"></path>
    </svg>
</section>
<!-- end trending-area -->
<!-- ================================
END TRENDING AREA
================================= -->

<!-- ================================
START DISCOUNT AREA
================================= -->
<section class="discount-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="discount-box join-us-box">
                    <div class="discount-img">
                        <img src="images/cta-bg-2.jpg" alt="discount img" />
                    </div>
                    <!-- end discount-img -->
                    <div
                        class="discount-content d-flex align-items-center justify-content-between"
                    >
                        <div class="section-heading">
                            <h2 class="sec__title text-white mb-2">
                                Explore more with us
                            </h2>
                            <p class="sec__desc text-white">
                                Join 2000+ locals & 1200+ contributors from 3000 cities
                            </p>
                        </div>
                        <!-- end section-heading -->
                        <div class="btn-box">
                            <a href="#" class="theme-btn border-0"
                            >Explore <i class="la la-arrow-right ml-1"></i
                                ></a>
                        </div>
                    </div>
                    <!-- end discount-content -->
                </div>
            </div>
            <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end discount-area -->
<!-- ================================
END DISCOUNT AREA
================================= -->

<!-- ================================
   START TESTIMONIAL AREA
================================= -->
<section class="testimonial-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading mb-0">
                    <h2
                        class="sec__title curve-shape padding-bottom-30px"
                        data-text="curvs"
                    >
                        Customers Testimonial
                    </h2>
                </div>
                <!-- end section-heading -->
            </div>
            <!-- end col-lg-12 -->
        </div>
        <!-- end row  -->
        <div class="row padding-top-50px">
            <div class="col-lg-12">
                <div class="testimonial-carousel carousel-action">
                    <div class="testimonial-card">
                        <div class="testi-desc-box">
                            <p class="testi__desc">
                                Excepteur sint occaecat cupidatat non proident sunt in culpa
                                officia deserunt mollit anim laborum sint occaecat cupidatat
                                non proident. Occaecat cupidatat non proident des.
                            </p>
                        </div>
                        <div class="author-content d-flex align-items-center">
                            <div class="author-img">
                                <img src="images/team8.jpg" alt="testimonial image" />
                            </div>
                            <div class="author-bio">
                                <h4 class="author__title">Leroy Bell</h4>
                                <span class="author__meta">United States</span>
                                <span class="ratings d-flex align-items-center">
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                    </span>
                            </div>
                        </div>
                    </div>
                    <!-- end testimonial-card -->
                    <div class="testimonial-card">
                        <div class="testi-desc-box">
                            <p class="testi__desc">
                                Excepteur sint occaecat cupidatat non proident sunt in culpa
                                officia deserunt mollit anim laborum sint occaecat cupidatat
                                non proident. Occaecat cupidatat non proident des.
                            </p>
                        </div>
                        <div class="author-content d-flex align-items-center">
                            <div class="author-img">
                                <img src="images/team9.jpg" alt="testimonial image" />
                            </div>
                            <div class="author-bio">
                                <h4 class="author__title">Richard Pam</h4>
                                <span class="author__meta">Canada</span>
                                <span class="ratings d-flex align-items-center">
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                    </span>
                            </div>
                        </div>
                    </div>
                    <!-- end testimonial-card -->
                    <div class="testimonial-card">
                        <div class="testi-desc-box">
                            <p class="testi__desc">
                                Excepteur sint occaecat cupidatat non proident sunt in culpa
                                officia deserunt mollit anim laborum sint occaecat cupidatat
                                non proident. Occaecat cupidatat non proident des.
                            </p>
                        </div>
                        <div class="author-content d-flex align-items-center">
                            <div class="author-img">
                                <img src="images/team10.jpg" alt="testimonial image" />
                            </div>
                            <div class="author-bio">
                                <h4 class="author__title">Luke Jacobs</h4>
                                <span class="author__meta">Australia</span>
                                <span class="ratings d-flex align-items-center">
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                    </span>
                            </div>
                        </div>
                    </div>
                    <!-- end testimonial-card -->
                    <div class="testimonial-card">
                        <div class="testi-desc-box">
                            <p class="testi__desc">
                                Excepteur sint occaecat cupidatat non proident sunt in culpa
                                officia deserunt mollit anim laborum sint occaecat cupidatat
                                non proident. Occaecat cupidatat non proident des.
                            </p>
                        </div>
                        <div class="author-content d-flex align-items-center">
                            <div class="author-img">
                                <img src="images/team8.jpg" alt="testimonial image" />
                            </div>
                            <div class="author-bio">
                                <h4 class="author__title">Chulbul Panday</h4>
                                <span class="author__meta">Italy</span>
                                <span class="ratings d-flex align-items-center">
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                    </span>
                            </div>
                        </div>
                    </div>
                    <!-- end testimonial-card -->
                </div>
                <!-- end testimonial-carousel -->
            </div>
            <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end testimonial-area -->
<!-- ================================
   START TESTIMONIAL AREA
================================= -->

<div class="section-block"></div>

<!-- ================================
   START TOP ACTIVITY AREA
================================= -->
<section class="top-activity-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2
                        class="sec__title curve-shape padding-bottom-30px"
                        data-text="curvs"
                    >
                        Top Activity
                    </h2>
                </div>
                <!-- end section-heading -->
            </div>
            <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
        <div class="row padding-top-50px">
            <div class="col-lg-3 responsive-column">
                <div class="flip-box">
                    <div class="flip-box-front">
                        <img src="images/img1.jpg" alt="" class="flip-img" />
                        <a
                            href="#"
                            class="flip-content d-flex align-items-end justify-content-start"
                        >
                            <h3 class="flip-title">Cultural Trecks</h3> </a
                        ><!-- end flip-content -->
                    </div>
                    <!-- end flip-box-front -->
                    <div class="flip-box-back">
                        <img src="images/img1.jpg" alt="" class="flip-img" />
                        <a
                            href="#"
                            class="flip-content d-flex align-items-center justify-content-center"
                        >
                            <div>
                                <div
                                    class="icon-element mx-auto mb-3 bg-white text-color-2"
                                >
                                    <i class="la la-arrow-right"></i>
                                </div>
                                <h3 class="flip-title">Explore Activity</h3>
                            </div> </a
                        ><!-- end flip-content -->
                    </div>
                    <!-- end flip-box-back -->
                </div>
                <!-- end flip-box -->
            </div>
            <!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="flip-box">
                    <div class="flip-box-front">
                        <img src="images/img2.jpg" alt="" class="flip-img" />
                        <a
                            href="#"
                            class="flip-content d-flex align-items-end justify-content-start"
                        >
                            <h3 class="flip-title">Carnival</h3> </a
                        ><!-- end flip-content -->
                    </div>
                    <!-- end flip-box-front -->
                    <div class="flip-box-back">
                        <img src="images/img2.jpg" alt="" class="flip-img" />
                        <a
                            href="#"
                            class="flip-content d-flex align-items-center justify-content-center"
                        >
                            <div>
                                <div
                                    class="icon-element mx-auto mb-3 bg-white text-color-2"
                                >
                                    <i class="la la-arrow-right"></i>
                                </div>
                                <h3 class="flip-title">Explore Activity</h3>
                            </div> </a
                        ><!-- end flip-content -->
                    </div>
                    <!-- end flip-box-back -->
                </div>
                <!-- end flip-box -->
            </div>
            <!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="flip-box">
                    <div class="flip-box-front">
                        <img src="images/img3.jpg" alt="" class="flip-img" />
                        <a
                            href="#"
                            class="flip-content d-flex align-items-end justify-content-start"
                        >
                            <h3 class="flip-title">Murano</h3> </a
                        ><!-- end flip-content -->
                    </div>
                    <!-- end flip-box-front -->
                    <div class="flip-box-back">
                        <img src="images/img3.jpg" alt="" class="flip-img" />
                        <a
                            href="#"
                            class="flip-content d-flex align-items-center justify-content-center"
                        >
                            <div>
                                <div
                                    class="icon-element mx-auto mb-3 bg-white text-color-2"
                                >
                                    <i class="la la-arrow-right"></i>
                                </div>
                                <h3 class="flip-title">Explore Activity</h3>
                            </div> </a
                        ><!-- end flip-content -->
                    </div>
                    <!-- end flip-box-back -->
                </div>
                <!-- end flip-box -->
            </div>
            <!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="flip-box">
                    <div class="flip-box-front">
                        <img src="images/img4.jpg" alt="" class="flip-img" />
                        <a
                            href="#"
                            class="flip-content d-flex align-items-end justify-content-start"
                        >
                            <h3 class="flip-title">Eat + Drink</h3> </a
                        ><!-- end flip-content -->
                    </div>
                    <!-- end flip-box-front -->
                    <div class="flip-box-back">
                        <img src="images/img4.jpg" alt="" class="flip-img" />
                        <a
                            href="#"
                            class="flip-content d-flex align-items-center justify-content-center"
                        >
                            <div>
                                <div
                                    class="icon-element mx-auto mb-3 bg-white text-color-2"
                                >
                                    <i class="la la-arrow-right"></i>
                                </div>
                                <h3 class="flip-title">Explore Activity</h3>
                            </div> </a
                        ><!-- end flip-content -->
                    </div>
                    <!-- end flip-box-back -->
                </div>
                <!-- end flip-box -->
            </div>
            <!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="flip-box">
                    <div class="flip-box-front">
                        <img src="images/img5.jpg" alt="" class="flip-img" />
                        <a
                            href="#"
                            class="flip-content d-flex align-items-end justify-content-start"
                        >
                            <h3 class="flip-title">Gondola Ride</h3> </a
                        ><!-- end flip-content -->
                    </div>
                    <!-- end flip-box-front -->
                    <div class="flip-box-back">
                        <img src="images/img5.jpg" alt="" class="flip-img" />
                        <a
                            href="#"
                            class="flip-content d-flex align-items-center justify-content-center"
                        >
                            <div>
                                <div
                                    class="icon-element mx-auto mb-3 bg-white text-color-2"
                                >
                                    <i class="la la-arrow-right"></i>
                                </div>
                                <h3 class="flip-title">Explore Activity</h3>
                            </div> </a
                        ><!-- end flip-content -->
                    </div>
                    <!-- end flip-box-back -->
                </div>
                <!-- end flip-box -->
            </div>
            <!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="flip-box">
                    <div class="flip-box-front">
                        <img src="images/img6.jpg" alt="" class="flip-img" />
                        <a
                            href="#"
                            class="flip-content d-flex align-items-end justify-content-start"
                        >
                            <h3 class="flip-title">Museum Tickets</h3> </a
                        ><!-- end flip-content -->
                    </div>
                    <!-- end flip-box-front -->
                    <div class="flip-box-back">
                        <img src="images/img6.jpg" alt="" class="flip-img" />
                        <a
                            href="#"
                            class="flip-content d-flex align-items-center justify-content-center"
                        >
                            <div>
                                <div
                                    class="icon-element mx-auto mb-3 bg-white text-color-2"
                                >
                                    <i class="la la-arrow-right"></i>
                                </div>
                                <h3 class="flip-title">Explore Activity</h3>
                            </div> </a
                        ><!-- end flip-content -->
                    </div>
                    <!-- end flip-box-back -->
                </div>
                <!-- end flip-box -->
            </div>
            <!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="flip-box">
                    <div class="flip-box-front">
                        <img src="images/img7.jpg" alt="" class="flip-img" />
                        <a
                            href="#"
                            class="flip-content d-flex align-items-end justify-content-start"
                        >
                            <h3 class="flip-title">Sightseeing</h3> </a
                        ><!-- end flip-content -->
                    </div>
                    <!-- end flip-box-front -->
                    <div class="flip-box-back">
                        <img src="images/img7.jpg" alt="" class="flip-img" />
                        <a
                            href="#"
                            class="flip-content d-flex align-items-center justify-content-center"
                        >
                            <div>
                                <div
                                    class="icon-element mx-auto mb-3 bg-white text-color-2"
                                >
                                    <i class="la la-arrow-right"></i>
                                </div>
                                <h3 class="flip-title">Explore Activity</h3>
                            </div> </a
                        ><!-- end flip-content -->
                    </div>
                    <!-- end flip-box-back -->
                </div>
                <!-- end flip-box -->
            </div>
            <!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="flip-box">
                    <div class="flip-box-front">
                        <img src="images/img8.jpg" alt="" class="flip-img" />
                        <a
                            href="#"
                            class="flip-content d-flex align-items-end justify-content-start"
                        >
                            <h3 class="flip-title">Outdoor Activities</h3> </a
                        ><!-- end flip-content -->
                    </div>
                    <!-- end flip-box-front -->
                    <div class="flip-box-back">
                        <img src="images/img8.jpg" alt="" class="flip-img" />
                        <a
                            href="#"
                            class="flip-content d-flex align-items-center justify-content-center"
                        >
                            <div>
                                <div
                                    class="icon-element mx-auto mb-3 bg-white text-color-2"
                                >
                                    <i class="la la-arrow-right"></i>
                                </div>
                                <h3 class="flip-title">Explore Activity</h3>
                            </div> </a
                        ><!-- end flip-content -->
                    </div>
                    <!-- end flip-box-back -->
                </div>
                <!-- end flip-box -->
            </div>
            <!-- end col-lg-3 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end top-activity-area -->
<!-- ================================
   START TOP ACTIVITY AREA
================================= -->

<!-- ================================
START CTA AREA
================================= -->
<section class="cta-area cta-bg bg-fixed section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="sec__title text-white font-size-50 line-height-60">
                        Enjoy Your Holiday <br />
                        with 50% Discount
                    </h2>
                    <p class="sec__desc text-white pt-3">
                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                    </p>
                </div>
                <!-- end section-heading -->
                <div class="btn-box padding-top-35px">
                    <a href="#" class="theme-btn border-0"
                    >Explore Now <i class="la la-arrow-right ml-1"></i
                        ></a>
                </div>
            </div>
            <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end cta-area -->
<!-- ================================
END CTA AREA
================================= -->

<!-- ================================
   START BLOG AREA
================================= -->
<section class="blog-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2
                        class="sec__title curve-shape padding-bottom-30px"
                        data-text="curvs"
                    >
                        Recent Articles
                    </h2>
                </div>
                <!-- end section-heading -->
            </div>
            <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
        <div class="row padding-top-50px">
            <div class="col-lg-4 responsive-column">
                <div class="card-item blog-card">
                    <div class="card-img">
                        <img src="images/img5.jpg" alt="blog-img" />
                        <div class="post-format icon-element">
                            <i class="la la-photo"></i>
                        </div>
                        <div class="card-body">
                            <div class="post-categories">
                                <a href="#" class="badge">Travel</a>
                                <a href="#" class="badge">lifestyle</a>
                            </div>
                            <h3 class="card-title line-height-26">
                                <a href="blog-single.html"
                                >Best Scandinavian Accommodation – Treat Yourself</a
                                >
                            </h3>
                            <p class="card-meta">
                                <span class="post__date"> 1 January, 2020</span>
                                <span class="post-dot"></span>
                                <span class="post__time">5 Mins read</span>
                            </p>
                        </div>
                    </div>
                    <div
                        class="card-footer d-flex align-items-center justify-content-between"
                    >
                        <div class="author-content d-flex align-items-center">
                            <div class="author-img">
                                <img src="images/small-team1.jpg" alt="testimonial image" />
                            </div>
                            <div class="author-bio">
                                <a href="#" class="author__title">Leroy Bell</a>
                            </div>
                        </div>
                        <div class="post-share">
                            <ul>
                                <li>
                                    <i class="la la-share icon-element"></i>
                                    <ul class="post-share-dropdown d-flex align-items-center">
                                        <li>
                                            <a href="#"><i class="lab la-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="lab la-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="lab la-instagram"></i></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end card-item -->
            </div>
            <!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item blog-card">
                    <div class="card-img">
                        <img src="images/img6.jpg" alt="blog-img" />
                        <div class="post-format icon-element">
                            <i class="la la-play"></i>
                        </div>
                        <div class="card-body">
                            <div class="post-categories">
                                <a href="#" class="badge">Video</a>
                            </div>
                            <h3 class="card-title line-height-26">
                                <a href="blog-single.html"
                                >Amazing Places to Stay in Norway</a
                                >
                            </h3>
                            <p class="card-meta">
                                <span class="post__date"> 1 February, 2020</span>
                                <span class="post-dot"></span>
                                <span class="post__time">4 Mins read</span>
                            </p>
                        </div>
                    </div>
                    <div
                        class="card-footer d-flex align-items-center justify-content-between"
                    >
                        <div class="author-content d-flex align-items-center">
                            <div class="author-img">
                                <img src="images/small-team2.jpg" alt="testimonial image" />
                            </div>
                            <div class="author-bio">
                                <a href="#" class="author__title">Phillip Hunt</a>
                            </div>
                        </div>
                        <div class="post-share">
                            <ul>
                                <li>
                                    <i class="la la-share icon-element"></i>
                                    <ul class="post-share-dropdown d-flex align-items-center">
                                        <li>
                                            <a href="#"><i class="lab la-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="lab la-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="lab la-instagram"></i></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end card-item -->
            </div>
            <!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item blog-card">
                    <div class="card-img">
                        <img src="images/img7.jpg" alt="blog-img" />
                        <div class="post-format icon-element">
                            <i class="la la-music"></i>
                        </div>
                        <div class="card-body">
                            <div class="post-categories">
                                <a href="#" class="badge">audio</a>
                            </div>
                            <h3 class="card-title line-height-26">
                                <a href="blog-single.html"
                                >Feel Like Home on Your Business Trip</a
                                >
                            </h3>
                            <p class="card-meta">
                                <span class="post__date"> 1 March, 2020</span>
                                <span class="post-dot"></span>
                                <span class="post__time">3 Mins read</span>
                            </p>
                        </div>
                    </div>
                    <div
                        class="card-footer d-flex align-items-center justify-content-between"
                    >
                        <div class="author-content d-flex align-items-center">
                            <div class="author-img">
                                <img src="images/small-team3.jpg" alt="testimonial image" />
                            </div>
                            <div class="author-bio">
                                <a href="#" class="author__title">Luke Jacobs</a>
                            </div>
                        </div>
                        <div class="post-share">
                            <ul>
                                <li>
                                    <i class="la la-share icon-element"></i>
                                    <ul class="post-share-dropdown d-flex align-items-center">
                                        <li>
                                            <a href="#"><i class="lab la-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="lab la-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="lab la-instagram"></i></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end card-item -->
            </div>
            <!-- end col-lg-4 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end blog-area -->
<!-- ================================
   START BLOG AREA
================================= -->

<!-- ================================
START CTA AREA
================================= -->
<section
    class="cta-area subscriber-area section-bg-2 padding-top-60px padding-bottom-60px"
>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="section-heading">
                    <p class="sec__desc text-white-50 pb-1">Newsletter Sign up</p>
                    <h2 class="sec__title font-size-30 text-white">
                        Subscribe to Get Special Offers
                    </h2>
                </div>
                <!-- end section-heading -->
            </div>
            <!-- end col-lg-7 -->
            <div class="col-lg-5">
                <div class="subscriber-box">
                    <div class="contact-form-action">
                        <form action="#">
                            <div class="input-box">
                                <label class="label-text text-white"
                                >Enter email address</label
                                >
                                <div class="form-group mb-0">
                                    <span class="la la-envelope form-icon"></span>
                                    <input
                                        class="form-control"
                                        type="email"
                                        name="email"
                                        placeholder="Email address"
                                    />
                                    <button
                                        class="theme-btn theme-btn-small submit-btn"
                                        type="submit"
                                    >
                                        Subscribe
                                    </button>
                                    <span class="font-size-14 pt-1 text-white-50"
                                    ><i class="la la-lock mr-1"></i>Don't worry your
                        information is safe with us.</span
                                    >
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end section-heading -->
            </div>
            <!-- end col-lg-5 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end cta-area -->
<!-- ================================
END CTA AREA
================================= -->

<!-- ================================
   START CLIENTLOGO AREA
================================= -->
<section class="clientlogo-area padding-top-80px padding-bottom-80px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title font-size-35">We were featured in</h2>
                </div>
                <!-- end section-heading -->
            </div>
            <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
        <div class="row padding-top-10px">
            <div class="col-lg-12">
                <div class="client-logo">
                    <div class="client-logo-item">
                        <img src="images/client-logo.png" alt="brand image" />
                    </div>
                    <!-- end client-logo-item -->
                    <div class="client-logo-item">
                        <img src="images/client-logo2.png" alt="brand image" />
                    </div>
                    <!-- end client-logo-item -->
                    <div class="client-logo-item">
                        <img src="images/client-logo3.png" alt="brand image" />
                    </div>
                    <!-- end client-logo-item -->
                    <div class="client-logo-item">
                        <img src="images/client-logo4.png" alt="brand image" />
                    </div>
                    <!-- end client-logo-item -->
                    <div class="client-logo-item">
                        <img src="images/client-logo5.png" alt="brand image" />
                    </div>
                    <!-- end client-logo-item -->
                    <div class="client-logo-item">
                        <img src="images/client-logo6.png" alt="brand image" />
                    </div>
                    <!-- end client-logo-item -->
                </div>
                <!-- end client-logo -->
            </div>
            <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end clientlogo-area -->
<!-- ================================
   START CLIENTLOGO AREA
================================= -->
@endsection

@section('js')
@endsection
