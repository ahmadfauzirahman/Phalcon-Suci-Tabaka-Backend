<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $dataLokasi = Laporan::find(['order' => "id_laporan DESC"]);
        $this->view->lokasis = $dataLokasi;
    }

    public function tanggapiAction($id)
    {
        $lokasiKebakaran = Laporan::findFirstByIdLaporan($id);
        $latitude = $lokasiKebakaran->lat;
        $longitude = $lokasiKebakaran->lng;
        $idlaporan = $lokasiKebakaran->id_laporan;
        $datadamkar = LokasiPemkar::find();
        $jarak = [];
        foreach ($datadamkar as $data) {
            $daerah = $data->nama;
            $latitude1 = $data->lat;
            $longitude1 = $data->lng;
            $datakecelakan = $this->getDistanceBetween($latitude, $longitude, "$data->lat", "$data->lng") . " Km" . "<hr>";
            array_push($jarak, [$datakecelakan, $daerah, $latitude1, $longitude1, $idlaporan]);
        }

        $this->view->setVars([
            "lokasi" => $lokasiKebakaran,
            "jarak" => $jarak
        ]);
    }


    function getDistanceBetween($latitude1, $longitude1, $latitude2, $longitude2, $unit = 'Mi')
    {

        $theta = $longitude1 - $longitude2;
        $distance = (sin(deg2rad($latitude1)) * sin(deg2rad($latitude2))) +
            (cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * cos(deg2rad($theta)));
        $distance = acos($distance);
        $distance = rad2deg($distance);
        $distance = $distance * 60 * 1.1515;
        switch ($unit) {
            case 'Mi':
                break;
            case 'Km' :
                $distance = $distance * 1.609344;
        }
        return (round($distance, 2));
    }

    public function balasAction($id)
    {
        $id = Laporan::findFirstByIdLaporan($id);
        $id->status = "Sudah Ditanggapi";
        $save = $id->save();
        if ($save) {
            $this->flashSession->success("Berhasil Mengirim Damkar ke Pelapor $id->id_user");
            $this->response->redirect('index');
        } else {
            $this->flashSession->error("Tidak Berhasil");
            $this->response->redirect("inde");
        }

    }


    // pengguna

    public function penggunaAction()
    {
        $data = User::find(["order" => "namaUser ASC"]);
        $this->view->setVars(["data" => $data]);
    }

}

