<?php
/**
 * Created by PhpStorm.
 * User: ahmadfauzirahman
 * Date: 02/10/18
 * Time: 7:44
 */
?>
<div class="row">
    <div class="col-xs-6">
        <div class="panel panel-default">
            <div class="panel-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label mb-10 text-left">Nama Pemadam</label>
                        <input type="text" class="form-control" name="1">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10 text-left" for="example-email">Alamat </label>
                        <input type="text" id="example-email" name="2" class="form-control"
                               placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10 text-left" for="example-email">Lat </label>
                        <input type="text" id="latitude" name="3" class="form-control"
                               placeholder="lat">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10 text-left" for="example-email">Longitude</label>
                        <input type="text" id="longitude" name="4" class="form-control"
                               placeholder="long">
                    </div>
                    <button class="btn btn-warning btn-block" type="button" onclick="resetMarker()">
                        Cek Marker <i class="glyphicon glyphicon-map-marker"></i>
                    </button>
                    <hr>
                    <div class="form-group">
                        <label class="control-label mb-10 text-left" for="example-email">Deksripsi Tempat Pemadam
                        </label>
                        <input type="text" id="example-email" name="5" class="form-control"
                               placeholder="Deksripsi">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10 text-left" for="example-email">No Hp</label>
                        <input type="text" id="example-email" name="2" class="form-control"
                               placeholder="No Hp">
                    </div>
                     <div class="form-group">
                        <label class="control-label mb-10 text-left" for="example-email">Foto Damkar</label>
                        <input type="file" id="example-email" name="2" class="form-control"
                               placeholder="No Hp">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-danger btn-block" type="submit">Simpan Data Pemadam</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-xs-6">
        <div class="panel panel-default">
            <div class="panel-body">
                <label>Map</label>
                <div class="map" id="map"></div>
                <p class="small">
                <hr>
                <h4 class="text-capitalize text-danger">cek marker : digunakan untuk cek posisi marker, berdasarkan
                    nilai
                    longitude dan
                    latitude yang di inputkan secara manual</h4>
                </p>
            </div>
        </div>
    </div>
</div>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1H72Fojan6yCxKf5DhNXD1Er4Y60ngWU&callback=initMap">
</script>
<script>
    var map;
    var center = ({lat: 0.508111, lng: 101.4477539});
    var markers = [];
    var inputLng = $("#longitude");
    var inputLat = $("#latitude");

    function setMarker(center) {
        removeMarkers();
        var marker = new google.maps.Marker({position: center, map: map});
        inputLng.val(center.lng);
        inputLat.val(center.lat);
        markers.push(marker);
    }

    function removeMarkers() {
        for (i = 0; i < markers.length; i++) {
            markers[i].setMap(null);
        }
    }

    function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            zoom: 8,
            center: center
        });
        setMarker(center);

        google.maps.event.addListener(map, 'click', function (event) {
            center = {lat: event.latLng.lat(), lng: event.latLng.lng()};
            setMarker(center);
        })
    }

    function resetMarker() {

        var longitude = $("#longitude").val();
        var latitude = $("#latitude").val();

        var center = {
            lat: parseFloat(latitude),
            lng: parseFloat(longitude)
        };

        setMarker(center);
    }

</script>
