let map;
let autocompleteStart;
let autocompleteEnd;
let autocompleteWaypoint;
let directionsService;
let directionsRenderer;
let waypoints = [];
let userMarker;

function initMap() {
    // Initialize the map with default center
    map = new google.maps.Map(document.getElementById("map"), {
        zoom: 13,
        center: { lat: -34.397, lng: 150.644 },
    });

    // Initialize directions service and renderer
    directionsService = new google.maps.DirectionsService();
    directionsRenderer = new google.maps.DirectionsRenderer();
    directionsRenderer.setMap(map);

    // Initialize the autocomplete inputs
    autocompleteStart = new google.maps.places.Autocomplete(document.getElementById("start-input"));
    autocompleteEnd = new google.maps.places.Autocomplete(document.getElementById("end-input"));
    autocompleteWaypoint = new google.maps.places.Autocomplete(document.getElementById("waypoint-input"));

    // Get the user's current location and set the map center
    getCurrentLocation((currentLocation) => {
        map.setCenter(currentLocation);

        // Add a marker for the user's location
        userMarker = new google.maps.Marker({
            position: currentLocation,
            map: map,
            title: 'Your location',
        });
    });

    // Watch the user's location for updates
    watchLocation((newLocation) => {
        userMarker.setPosition(newLocation);
        map.setCenter(newLocation);
    });
}

function getCurrentLocation(callback) {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition((position) => {
            const pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude,
            };
            callback(pos);
        }, () => {
            alert('Error: The Geolocation service failed.');
        });
    } else {
        alert('Error: Your browser doesn\'t support geolocation.');
    }
}

function watchLocation(callback) {
    if (navigator.geolocation) {
        navigator.geolocation.watchPosition((position) => {
            const pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude,
            };
            callback(pos);
        }, (error) => {
            console.error('Error watching position:', error);
        });
    } else {
        alert('Error: Your browser doesn\'t support geolocation.');
    }
}

function addWaypoint() {
    const waypointInput = document.getElementById("waypoint-input");
    const waypoint = waypointInput.value;

    if (waypoint) {
        const li = document.createElement("li");
        li.textContent = waypoint;
        document.getElementById("waypoints-list").appendChild(li);

        waypoints.push({
            location: waypoint,
            stopover: true,
        });

        waypointInput.value = '';
    }
}

function clearFields() {
    document.getElementById("start-input").value = '';
    document.getElementById("end-input").value = '';
    document.getElementById("waypoint-input").value = '';
    document.getElementById("waypoints-list").innerHTML = '';
    waypoints = [];
    directionsRenderer.set('directions', null);
}

function findRoute() {
    const startPlace = autocompleteStart.getPlace();
    const endPlace = autocompleteEnd.getPlace();

    if (!startPlace || !endPlace) {
        alert('Please enter both a start location and an end location.');
        return;
    }

    const startLocation = startPlace.geometry.location;
    const endLocation = endPlace.geometry.location;

    const request = {
        origin: startLocation,
        destination: endLocation,
        waypoints: waypoints,
        optimizeWaypoints: true,
        travelMode: 'DRIVING',
    };

    directionsService.route(request, (result, status) => {
        if (status === 'OK') {
            directionsRenderer.setDirections(result);

            const route = result.routes[0];
            const summaryPanel = document.getElementById('directions-panel');
            summaryPanel.innerHTML = '';
            for (let i = 0; i < route.legs.length; i++) {
                const routeSegment = i + 1;
                summaryPanel.innerHTML += '<b>Route Segment: ' + routeSegment +
                    '</b><br>';
                summaryPanel.innerHTML += route.legs[i].start_address + ' to ';
                summaryPanel.innerHTML += route.legs[i].end_address + '<br>';
                summaryPanel.innerHTML += route.legs[i].distance.text + '<br><br>';
            }
        } else {
            alert('Directions request failed due to ' + status);
        }
    });
}

document.getElementById('add-waypoint').addEventListener('click', addWaypoint);
document.getElementById('clear-fields').addEventListener('click', clearFields);
document.getElementById('find-route').addEventListener('click', findRoute);

google.maps.event.addDomListener(window, 'load', initMap);
