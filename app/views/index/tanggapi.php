<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 07/10/18
 * Time: 14.34
 */

?>
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1H72Fojan6yCxKf5DhNXD1Er4Y60ngWU&callback=myMap"></script>
<div class="row">
    <div class="col-lg-4">
        <div class="panel panel-default">
            <div class="panel-body">
                <h2 class="text-danger text-center">Lokasi Kebakaran</h2>
                <div id="map" style="width:350px; height: 400px;"></div>
                <hr>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Pelapor</th>
                        <td><?= $lokasi->id_user ?></td>
                    </tr>
                    <tr>
                        <th>Waktu Pelaporan</th>
                        <td><?= $lokasi->waktu_pelaporan ?></td>
                    </tr>
                    <tr>
                        <th>Lokasi</th>
                        <td><?= $lokasi->lokasi ?></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td><?= $lokasi->status ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-body">

                <?php
                $no = 1;
                foreach ($jarak as $jarak1):?>

                    <a href="<?= $this->url->get('index/balas/'.$jarak1[4]) ?>">
                        <div class="col-lg-12">
                            <div class="card-box">
                                <h5><?= $jarak1[1] ?></h5>
                                <h5>Latitude <?= $jarak1[2] ?></h5>
                                <h5>Longitude <?= $jarak1[3] ?></h5>
                                <h5 class="text-danger">Jarak <?= $jarak1[0] ?></h5>
                                <h4><?php $angka = (int)$pecah[0] ?></h4>
                            </div>
                        </div>
                    </a>
                    <!--  Modal content for the above example -->
                    <?php
                    $no++;
                endforeach; ?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var locations = [
        ['<?= $lokasi->deskripsi ?>', <?= $lokasi->lat ?>, <?= $lokasi->lng ?>],
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: new google.maps.LatLng(0.5139625, 101.3711348),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map
        });

        google.maps.event.addListener(marker, 'click', (function (marker, i) {
            return function () {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
            }
        })(marker, i));
    }
</script>
