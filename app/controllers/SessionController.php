<?php

class SessionController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function loginAction()
    {
        if ($this->request->isPost()) {
            $post = $this->request->getPost();
            $username = $post['namaUser'];
            $password = $post['passwordUser'];

            $pengguna = User::findFirstByNamaUser($username);
            if ($pengguna) {
                if ($pengguna->namaUser == $username && $pengguna->passwordUser == $password) {
                    $this->session->set("id", $pengguna->idUser);
                    $this->session->set("nama", $pengguna->namaUser);
                    $this->session->set("alamat", $pengguna->alamatUser);
                    $this->session->set("hak", $pengguna->hak_akses);
                    $this->flashSession->success("Halo Selamat Datang $pengguna->namaUser");
                    $this->response->redirect("index");
                } else {
                    $this->flashSession->warning("Username atau Password Salah");
                    $this->response->redirect('session/login');
                }
            } else {
                $this->flashSession->error("Akun tidak ada");
                $this->response->redirect("");
            }

        }
    }

    public function logoutAction()
    {
        $this->session->destroy();
        $this->response->redirect('session/login');
    }

}

