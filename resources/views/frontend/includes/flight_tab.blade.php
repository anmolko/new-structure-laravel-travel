<div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
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
