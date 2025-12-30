<!DOCTYPE html>
<html lang="en">
@include('includes.dashboard.head')
<body>
    <style>
            #vatFieldsContainer {
            display: block; /* or flex/grid if needed */
            height: auto !important;
            overflow: visible;
        }
        /* Autocomplete CSS Start */
        #autocomplete {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 6px;
        }

        /* Custom dropdown styling */
        .autocomplete-dropdown {
            /*position: absolute;
            top: 100%;*/
            left: 0;
            right: 0;
            background-color: #2c3e50;
            border: 1px solid #34495e;
            border-radius: 6px;
            margin-top: 2px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            max-height: 300px;
            overflow-y: auto;
            z-index: 1000;
            display: none;
        }
        .autocomplete-dropdown.show {
            display: block;
        }
        .autocomplete-item {
            background-color: #000000;
            color: #ecf0f1;
            padding: 12px;
            cursor: pointer;
            border-bottom: 1px solid #ffffff;
        }
        .autocomplete-item:last-child {
            border-bottom: none;
        }
        .autocomplete-item:hover {
            background-color: #34495e;
        }
        .autocomplete-item-text {
            font-size: 14px;
        }
        /* Autocomplete CSS End */
</style>
<!-- Header Section Start -->
@include('includes.dashboard.header')
<!-- Header Section End -->
<!-- Landing Banner Section Start -->
<section class="landing_banner_section dashboard_banner_section">
    <div class="container">
        <div class="dashboard_ttl">
            <h2>DASHBOARD</h2>
        </div>
    </div>
</section>



<!-- Landing Banner Section End -->
<section class="dashboard_tabing _section">
    <div class="container">
        <div class="dashboard_section_main">
            <div class="dashboard_section_row">
                @include('includes.dashboard.menu')
                 @if($status == 'R')<div class="dashboard_section_row_rht">
                        <div class="tab-content dashboad_right_penal" id="v-pills-tabContent">

                            <div class="tab-pane fade show active h-100" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab">
                                <div
                                    class="text-center d-flex flex-column justify-content-center align-items-center h-100">
                                    <div
                                        class="dashboard_register_request text-center d-flex flex-column justify-content-center align-items-center h-100">
                                        <img src="{{ url('public/assets/img/cross-icon.svg')}}" alt="cross-icon" class="img-fluid">
                                        <h4>Organisation Request Rejected</h4>
                                        <p>Unfortunately, your request was not approved. Please review your <br>
                                            submitted
                                            details or contact support for assistance.</p>
                                        <button type="button" class="btn btn-primary login_btn">Retry</button>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                 @elseif($status == 'P')<div class="dashboard_section_row_rht">
                        <div class="tab-content dashboad_right_penal" id="v-pills-tabContent">

                            <div class="tab-pane fade show active h-100" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab">
                                <div
                                    class="dashboard_register_request text-center d-flex flex-column justify-content-center align-items-center h-100">
                                    <img src="{{url('public/assets/img/under-review-icon.svg')}}" alt="under-review-icon"
                                        class="img-fluid">
                                    <h4>Organisation Request Under Review</h4>
                                    <p>We've received your details. Our team is currently reviewing your <br> request.
                                        You'll be notified once it's
                                        approved..</p>

                                </div>

                            </div>

                        </div>
                    </div>
                 @endif
                 @if(is_null($user->adportal_user_id))
                 <div class="dashboard_section_row_rht">
                        <div class="tab-content dashboad_right_penal" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab">
                                <div class="dashboard_right_ttl">
                                    <h3>Register organisation</h3>
                                    @if(session('organisation_created'))
                                    <p style="color:red">SESSION OK</p>
                                @endif
                                </div>

                                <div class="dashboard_form">
                                 <form  method="POST" action="{{ route('organisations.store') }}">
                                @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Company name *</label>
                                            <input type="text" class="form-control" placeholder="Enter company name" name="company_name" value="{{ old('company_name') }}">
                                            @error('company_name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Trading name *</label>
                                            <input type="text" class="form-control" placeholder="Enter trading name" name="trading_name" value="{{ old('trading_name') }}">
                                            @error('trading_name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Country*</label>
                                            <select class="form-control" id="countrySelect" data-tax-url="{{ url('/get-tax-registrations') }}" name="country_id" >
                                            <option value="">Select Country*</option>
                                            @foreach ($countries as $key => $value)
                                            <option value="{{ $value->id }}"
                                            data-code="{{ $value->code }}" {{ old('country_id') == $value->id ? 'selected' : '' }}>{{ $value->country }}</option>
                                            @endforeach
                                        </select>
                                        @error('country_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Currency</label>
                                             <select name="currency_id" id="currency" class="form-control" aria-label="Default select example">
                                            <option value="">Select Currency</option>
                                            </select>
                                            @error('currency_id')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Company address*</label>
                                           <!--  <input type="text" class="form-control" placeholder="Enter company number"> -->
                                           <input type="text" id="autocomplete" placeholder="Enter address" class="w-100">
                                            <div class="autocomplete-dropdown" id="dropdown"></div>
                                             <input type="hidden" name="company_address_line1" id="line1" placeholder="Address Line 1">
                                              <input type="hidden" name="company_address_line2" id="line2" placeholder="Address Line 2 (optional)">
                                              <input type="hidden" name="company_address_city" id="city" placeholder="City">
                                              <input type="hidden" name="company_address_state" id="state" placeholder="State">
                                              <input type="hidden" name="company_address_postal_code" id="postal_code" placeholder="Postal Code">
                                              <input type="hidden" name="company_address_country" id="country" placeholder="Country">
                                              <input type="hidden" name="company_address_google_placeid" id="place_id" placeholder="Google Place ID">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Company number*</label>
                                            <input type="text" class="form-control" placeholder="Enter company number" name="company_number">
                                            @error('company_number')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">VAT number <span
                                                    class="optional">(optional)</span></label>
                                         <div id="vatFieldsContainer" class="mt-3"></div>
                                        </div>
                                        <button type="submit" class="btn btn-primary login_btn">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
           @endif </div>
        </div>
    </div>
 </section>
    <div class="modal fade dashboard_mdl " id="staticBackdrop" data-backdrop="static" data-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img src="{{ url('public/assets/img/modal-thnak-you.svg')}}" alt="modal-thnak-you" class="img-fluid">
                    <h3>Thank you!</h3>
                    <p>Your organisation registration is under review. We’ll notify you upon approval.</p>
                    <a href="{{ url('dashboard')}}" class=".dashboard_mdl_oky">Okay</a>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    @if(session('success') === 'organisation_created')
<script>
document.addEventListener('DOMContentLoaded', function () {
    var modal = new bootstrap.Modal(
        document.getElementById('staticBackdrop')
    );
    modal.show();
});
</script>
@endif
<!-- Footer Section CSS Start -->
    @include('includes.dashboard.footer')
<!-- Footer Section CSS End -->
</body>
@include('includes.dashboard.script')
<script src="{{ url('public/assets/js/custom/createorg.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQEQBjOnVPuOGPRaOl61LMymvICijb8_c&libraries=places&callback=initMap"
    async defer></script>
<script src="{{ url('public/assets/js/custom.js') }}"></script>
<!---Map js --->

<!-- Autocomplete JS Start -->
<script>
   let sessionToken;
let newestRequestId = 0;

async function initMap() {
    try {
        await google.maps.importLibrary("places");
    } catch (e) {
        console.error("Google Maps library failed to load:", e);
        return;
    }

    const input = document.getElementById('autocomplete');
    const dropdown = document.getElementById('dropdown');

    if (!input || !dropdown) {
        console.warn("Autocomplete input or dropdown not found.");
        return;
    }

    refreshToken();

    // Hide dropdown if Edit mode with existing address
    if (input.value.trim() !== '') {
        dropdown.classList.remove('show');
    }

    input.addEventListener('input', async function (e) {
        const value = e.target.value;

        if (value.length < 2) {
            dropdown.innerHTML = '';
            dropdown.classList.remove('show');
            return;
        }

        const requestId = ++newestRequestId;
        const request = { input: value, sessionToken };

        try {
            const { suggestions } = await google.maps.places.AutocompleteSuggestion.fetchAutocompleteSuggestions(request);
            if (requestId !== newestRequestId) return;
            displaySuggestions(suggestions);
        } catch (error) {
            console.error('Autocomplete error:', error);
            dropdown.classList.remove('show');
        }
    });

    function displaySuggestions(suggestions) {
        dropdown.innerHTML = '';

        if (!suggestions || suggestions.length === 0) {
            dropdown.classList.remove('show');
            return;
        }

        suggestions.forEach(suggestion => {
            const placePrediction = suggestion.placePrediction;

            const item = document.createElement('div');
            item.className = 'autocomplete-item';
            item.textContent = placePrediction.text.toString();

            item.addEventListener('click', () => selectPlace(placePrediction.toPlace()));
            dropdown.appendChild(item);
        });

        dropdown.classList.add('show');
    }

    async function selectPlace(place) {
        try {
            await place.fetchFields({
                fields: ['addressComponents', 'formattedAddress', 'id', 'location']
            });

            input.value = place.formattedAddress;
            dropdown.classList.remove('show');

            const components = {};
            if (place.addressComponents) {
                place.addressComponents.forEach(component => {
                    component.types.forEach(type => {
                        components[type] = component;
                    });
                });
            }

            // Populate fields
            setValue('line1', [
                components['street_number']?.longText || '',
                components['route']?.longText || ''
            ].join(' ').trim());

            setValue('line2', '');
            setValue('city', components['locality']?.longText || components['sublocality']?.longText || '');
            setValue('state', components['administrative_area_level_1']?.longText || '');
            setValue('postal_code', components['postal_code']?.longText || '');
            setValue('country', components['country']?.longText || '');
            setValue('place_id', place.id || '');

            // Fill latitude & longitude
            if (place.location) {
                setValue('latitude', place.location.lat());
                setValue('longitude', place.location.lng());
            }

            refreshToken();
        } catch (error) {
            console.error('Error fetching place details:', error);
        }
    }

    function setValue(id, value) {
        const el = document.getElementById(id);
        if (el) el.value = value;
    }

    function refreshToken() {
        sessionToken = new google.maps.places.AutocompleteSessionToken();
    }

    document.addEventListener('click', function (e) {
        if (!input.contains(e.target) && !dropdown.contains(e.target)) {
            dropdown.classList.remove('show');
        }
    });
}

window.initMap = initMap;

</script>
</html>
