<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $listUser = $this->userModel->listUser();

        $data = [
            'listUser' => $listUser
        ];

        return view('dashboard/user', $data);
    }

    public function newUser()
    {
        return view('insert/new-user',);
    }

    public function saveUser()
    {
        $username = $this->request->getVar('username');

        $cekUser = $this->userModel->cekUsername($username);

        if ($cekUser == true) {
            session()->setFlashdata('gagal', 'Username Telah Terdaftar Mohon Pilih Username Yang Lain.');
            return redirect()->to(base_url() . '/dashboard/user/new');
        } else {
            $foto = $this->request->getFile('fotoUser');

            if ($foto->getError() == 4) {
                $namaFoto = 'default.png';
            } else {
                $namaFoto = $foto->getRandomName();

                $foto->move('images/upload', $namaFoto);
            }

            $password = $this->request->getVar('password');

            $data_post = [
                'id_user' => $this->userModel->getID(),
                'nama' => $this->request->getVar('nama_user'),
                'username' => $this->request->getVar('username'),
                'password' => sha1(md5($password)),
                'level' => $this->request->getVar('level_user'),
                'no_telp' => $this->request->getVar('no_telp'),
                'foto' => $namaFoto,
                'created_at' => date('Y-m-d H:m:s')
            ];

            $save = $this->userModel->save($data_post);
            if ($save) {
                session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');
                return redirect()->to(base_url() . '/dashboard/user');
            } else {
                session()->setFlashdata('gagal', 'Data Gagal Ditambahkan.');
                return redirect()->to(base_url() . '/dashboard/user');
            }
        }
    }

    public function deleteUser($id)
    {
        $user = $this->userModel->find($id);

        if ($user['foto'] != 'default.png') {
            unlink('images/upload/' . $user['foto']);
        }

        if ($this->userModel->delete($id)) {
            session()->setFlashdata('gagal', 'Data Berhasil Dihapus.');
            return redirect()->to(base_url() . '/dashboard/user');
        } else {
            session()->setFlashdata('gagal', 'Data Gagal Dihapus.');
            return redirect()->to(base_url() . '/dashboard/user');
        }
    }
}