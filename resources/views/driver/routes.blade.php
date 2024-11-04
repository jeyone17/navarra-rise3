@extends('layouts.driver_layout')

@section('title', 'Routes')


@section('contents')

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSV1H3B9U0Ze4jyL05cJliB9CR7Zk14d4&libraries=places">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>




    <div id="map"></div>
    <div id="controls">
        <input id="start-input" type="text" placeholder="Enter start location">
        <input id="waypoint-input" type="text" placeholder="Enter waypoint">
        <button id="add-waypoint">Add Waypoint</button>
        <ul id="waypoints-list"></ul>
        <input id="end-input" type="text" placeholder="Enter end location">
        <button id="find-route">Find Route</button>
        <button id="clear-fields">Clear Fields</button>
    </div>
    <div id="directions-panel"></div>
    <script src="{{ asset('js/maps.js') }}"></script>





@endsection
