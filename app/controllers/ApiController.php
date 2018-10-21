<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json ; charset = utf-8');

class ApiController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function loginAction()
    {
        $nomorTelepon = $this->request->getPost('nomor_telepon');
        $password = $this->request->getPost('password');
        $user = User::findFirstByNomorTelepon($nomorTelepon);

        $response = null;
        if ($user->nomorTelepon == $nomorTelepon && $user->passwordUser == $password) {
            $response['status'] = 'success';
            $response['data'] = $user;
            $response['success'] = true;     
        } else {
            $response['status'] = 'gagal';
            $response['success'] = false;
        }
        return json_encode($response);
    }

    public function addUserApiAction()
    {
        $namaUser = $this->request->getPost('namaUser');
        $passwordUser = $this->request->getPost('passwordUser');
        $alamatUser = $this->request->getPost('alamatUser');
        $nomorTelepon = $this->request->getPost('nomorTelepon');
        $foto = $this->request->getPost('foto');
        $status = "Belum Ditanggap";
        $perjanjian = $this->request->getPost('perjanjian');

        $user = new User();
        $user->namaUser = $namaUser;
        $user->passwordUser = $passwordUser;
        $user->alamatUser = $alamatUser;
        $user->nomorTelepon = $nomorTelepon;
        $user->foto = $foto;
        $user->perjanjian = $perjanjian;
        $response = null;

        if ($user->save()) {
            $data = User::findFirstByIdUser($user->idUser);
            $response = [
                "status" => "success",
                "data" => $data
            ];
        } else {
            $response = [
                'status' => 'fail'
            ];
        }
        return json_encode($response);
    }

    public function laporanAction()
    {
        $id_user = $this->request->getPost('id_user');
        $lokasi = $this->request->getPost('lokasi');
        $foto = $this->request->getPost('foto');
        $waktulaporan = date('Y-m-d H:i:s');
        $detail = $this->request->getPost('detail');
        $lat = $this->request->getPost('lat');
        $lng = $this->request->getPost('lng');
        $deskripsi = $this->request->getPost('deskripsi');

        $laporan = new Laporan();
        $laporan->id_user = $id_user;
        $laporan->lokasi = $lokasi;
        $laporan->foto = $foto;
        $laporan->waktu_pelaporan = $waktulaporan;
        $laporan->detail = $detail;
        $laporan->lat = $lat;
        $laporan->lng = $lng;
        $laporan->status = "Belum Ditanggapi";
        $laporan->deskripsi = $deskripsi;

        $response = null;
        if ($laporan->save()) {
            $data = Laporan::find(['conditions' => "id_user like '$id_user'"]);
            $response = [
                "status" => "success",
                "data" => $data
            ];
        } else {
            $response = [
                "status" => "fail"
            ];
        }
        return json_encode($response);
    }

    public function getsemualaporanAction()
    {
        $response = null;
        $data = Laporan::find(['order' => "id_laporan DESC"]);
        if ($data) {
            $response = [
                "status" => "success",
                "data" => $data
            ];
        } else {
            $response =[
                "status" => "success",
                "data" => false
            ];
        }
        return json_encode($response);
    }

    public function datadamkarAction()
    {
        $response = null;
        $data = LokasiPemkar::find(['order'=>"nama ASC"]);
        if ($data) {
           $response = [
                "status" => "success",
                "data" => $data
            ];
        }else{
            $response =[
                "status" => "success",
                "data" => false
            ];
        }
    return json_encode($response);

    }
}

