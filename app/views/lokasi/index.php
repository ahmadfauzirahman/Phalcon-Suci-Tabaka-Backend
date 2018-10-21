<?php
/**
 * Created by PhpStorm.
 * User: ahmadfauzirahman
 * Date: 28/09/18
 * Time: 17:55
 */
?>

<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default border-panel card-view">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h6 class="panel-title txt-dark">Data Lokasi Pemadam Kebakaran Provinsi Riau</h6>
                        </div>
                        <div class="pull-right">
                            <a href="<?= $this->url->get('lokasi/tambah') ?>" class="btn btn-danger">
                                Tambah Data Lokasi <span class="fa fa-plus"></span></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table id="myTable1" class="table table-hover display  pb-30">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Edit</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Lat</th>
                                            <th>Longitude</th>
                                            <th>Deksripsi</th>
                                            <th>No</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Edit</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Lat</th>
                                            <th>Longitude</th>
                                            <th>Deksripsi</th>
                                            <th>No Hp</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php $no = 1;
                                        foreach ($dataLokasi as $lokasi): ?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <td><a href="<?= $this->url->get('lokasi/edit/' . $lokasi->id) ?>"
                                                       class="btn btn-warning">Edit</a>
                                                </td>
                                                <td><?= $lokasi->nama ?></td>
                                                <td><?= $lokasi->alamat ?></td>
                                                <td><?= $lokasi->lat ?></td>
                                                <td><?= $lokasi->lng ?></td>
                                                <td><?= $lokasi->deskripsi ?></td>
                                                <td><?= $lokasi->no_hp ?></td>
                                            </tr>
                                            <?php $no++; endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



