<?php

class LokasiController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $dataLokas = LokasiPemkar::find(['order' => "id Desc"]);
        $this->view->setVars(["dataLokasi" => $dataLokas]);


    }

    public function tambahAction()
    {
        if ($this->request->isPost()) {
            $post = $this->request->getPost("");
            $nama = $post['1'];
            $alamat = $post['2'];
            $lat = $post['3'];
            $lng = $post['4'];
            $deskripsi = $post['5'];
            $no_hp = $post['6'];

            $newModel = new LokasiPemkar();
            $newModel->nama = $nama;
            $newModel->alamat = $alamat;
            $newModel->lat = $lat;
            $newModel->lng = $lng;
            $newModel->deskripsi = $deskripsi;
            $newModel->no_hp = $no_hp;
            $save = $newModel->save();
            if ($save) {
                $this->flashSession->success("Berhasil Menambahkan data");
                $this->response->redirect("lokasi");
            } else {

                $this->flashSession->error("Tidak Berhasil Menambahkan data");
                $this->response->redirect("lokasi/tambah");
            }
        }
    }

    public function editAction($id)
    {
        $data = LokasiPemkar::findFirstById($id);
        $this->view->setVars(["data" => $data]);
        if ($this->request->isPost()) {
            $post = $this->request->getPost("");
            $nama = $post['1'];
            $alamat = $post['2'];
            $lat = $post['3'];
            $lng = $post['4'];
            $deskripsi = $post['5'];
            $no_hp = $post['6'];

            $newModel = LokasiPemkar::findFirstById($id);
            $newModel->nama = $nama;
            $newModel->alamat = $alamat;
            $newModel->lat = $lat;
            $newModel->lng = $lng;
            $newModel->deskripsi = $deskripsi;
            $newModel->no_hp = $no_hp;
            $save = $newModel->save();
            if ($save) {
                $this->flashSession->success("Berhasil Mengubah data");
                $this->response->redirect("lokasi");
            } else {
                $this->flashSession->error("Tidak Berhasil Mengubah data");
                $this->response->redirect("lokasi/edit");
            }
        }
    }

}

