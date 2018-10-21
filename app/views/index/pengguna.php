<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 18/10/18
 * Time: 23.22
 */
?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="myTable1" class="table table-hover display  pb-30">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama User</th>
                            <th>Alamat User</th>
                            <th>Nomor Telepon</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama User</th>
                            <th>Alamat User</th>
                            <th>Nomor Telepon</th>
                            <th>Aksi</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php $no = 1;
                        foreach ($data as $pengguna): ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $pengguna->namaUser ?></td>
                                <td><?= $pengguna->alamatUser ?></td>
                                <td><?= $pengguna->nomorTelepon ?></td>
                                <td><a href="" class="btn btn-primary btn-lg">Edit</a></td>
                            </tr>
                            <?php $no++; endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>