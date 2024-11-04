@extends('layouts.customer_layout')

@section('title', 'Edit Profile')

@section('contents')

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSV1H3B9U0Ze4jyL05cJliB9CR7Zk14d4&libraries=places">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <section class="section">
        <div class="container">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title mb-4">Edit Profile</h5>

                    <form action="{{ route('customer.updateProfile') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="first_name" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="first_name"
                                       name="first_name" value="{{ $user->first_name ?? '' }}"
                                       required placeholder="Enter your first name">
                            </div>

                            <div class="col-md-6">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="last_name"
                                       name="last_name" value="{{ $user->last_name ?? '' }}"
                                       required placeholder="Enter your last name">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="phone"
                                   name="phone" value="{{ $user->phone ?? '' }}"
                                   required placeholder="Enter your phone number">
                        </div>

                        <!-- Map Section -->
                        <div class="mb-3">
                            <label for="map" class="form-label">Pin Your Location on the Map</label>
                            <div id="map" style="height: 300px; width: 100%; border-radius: 8px;"></div>
                            <input type="hidden" id="latitude" name="latitude" value="{{ $user->latitude ?? '' }}">
                            <input type="hidden" id="longitude" name="longitude" value="{{ $user->longitude ?? '' }}">
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary" style="width: 150px;">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
<script>
    function initMap() {
        const initialPosition = { lat: 10.7202, lng: 122.5621 };  // Default location

        // Initialize the map
        const map = new google.maps.Map(document.getElementById('map'), {
            center: initialPosition,
            zoom: 13,
        });

        // Place a draggable marker on the map
        const marker = new google.maps.Marker({
            position: initialPosition,
            map: map,
            draggable: true,
        });

        // Update hidden inputs with new coordinates when marker is dragged
        marker.addListener('dragend', function (event) {
            document.getElementById('latitude').value = event.latLng.lat();
            document.getElementById('longitude').value = event.latLng.lng();
        });

        // Autocomplete for address search
        const autocomplete = new google.maps.places.Autocomplete(
            document.createElement('input'),
            { types: ['geocode'], componentRestrictions: { country: 'PH' } }
        );

        autocomplete.addListener('place_changed', () => {
            const place = autocomplete.getPlace();
            if (!place.geometry || !place.geometry.location) {
                alert("No details available for input: '" + place.name + "'");
                return;
            }
            // Reposition the map and marker to the selected place
            map.setCenter(place.geometry.location);
            marker.setPosition(place.geometry.location);
            document.getElementById('latitude').value = place.geometry.location.lat();
            document.getElementById('longitude').value = place.geometry.location.lng();
        });
    }

    // Initialize map on window load
    window.onload = initMap;
</script>
@endsection
