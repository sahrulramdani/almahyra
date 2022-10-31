<?php

namespace App\Controllers;

use App\Models\PembimbingModel;

class PembimbingController extends BaseController
{
    protected $pembimbingModel;

    public function __construct()
    {
        $this->pembimbingModel = new PembimbingModel();
    }

    public function index()
    {
        $listPembimbing = $this->pembimbingModel->findAll();

        $data = [
            'listPembimbing' => $listPembimbing
        ];

        return view('dashboard/pembimbing', $data);
    }

    public function newPembimbing()
    {
        return view('insert/new-pembimbing');
    }

    public function savePembimbing()
    {
        $foto = $this->request->getFile('fotoPembimbing');

        if ($foto->getError() == 4) {
            $namaFoto = 'default.png';
        } else {
            $namaFoto = $foto->getRandomName();

            $foto->move('images/upload', $namaFoto);
        }

        $data_post = [
            'id_pembimbing' => $this->pembimbingModel->getID(),
            'nama_pembimbing' => $this->request->getVar('nama_pembimbing'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
            'foto' => $namaFoto,
            'created_at' => date('Y-m-d H:m:s')
        ];

        $save = $this->pembimbingModel->save($data_post);
        if ($save) {
            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');
            return redirect()->to(base_url() . '/dashboard/pembimbing');
        } else {
            session()->setFlashdata('gagal', 'Data Gagal Ditambahkan.');
            return redirect()->to(base_url() . '/dashboard/pembimbing');
        }
    }

    public function deletePembimbing($id)
    {
        $pembimbing = $this->pembimbingModel->find($id);

        if ($pembimbing['foto'] != 'default.png') {
            unlink('images/upload/' . $pembimbing['foto']);
        }

        if ($this->pembimbingModel->delete($id)) {
            session()->setFlashdata('gagal', 'Data Berhasil Dihapus.');
            return redirect()->to(base_url() . '/dashboard/pembimbing');
        } else {
            session()->setFlashdata('gagal', 'Data Gagal Dihapus.');
            return redirect()->to(base_url() . '/dashboard/pembimbing');
        }
    }

    public function editPembimbing($id)
    {
        $dataPembimbing = $this->pembimbingModel->find($id);

        $data = [
            'dataPembimbing' => $dataPembimbing,
        ];

        return view('edit/edit-pembimbing', $data);
    }

    public function updatePembimbing()
    {
        $foto = $this->request->getFile('fotoPembimbing');

        if ($foto->getError() == 4) {
            $namaFoto = $this->request->getVar('fotoLama');
        } else {
            $namaFoto = $foto->getRandomName();

            $foto->move('images/upload/', $namaFoto);

            if ($this->request->getVar('fotoLama') != 'default.png') {
                unlink('images/upload/' . $this->request->getVar('fotoLama'));
            }
        }


        $data_post = [
            'id_pembimbing' => $this->request->getVar('idPembimbing'),
            'nama_pembimbing' => $this->request->getVar('nama_pembimbing'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
            'foto' => $namaFoto,
            'updated_at' => date('Y-m-d H:m:s')
        ];

        $save = $this->pembimbingModel->save($data_post);
        if ($save) {
            session()->setFlashdata('pesan', 'Data Berhasil Diubah.');
            return redirect()->to(base_url() . '/dashboard/pembimbing');
        } else {
            session()->setFlashdata('gagal', 'Data Gagal Diubah.');
            return redirect()->to(base_url() . '/dashboard/pembimbing');
        }
    }
}