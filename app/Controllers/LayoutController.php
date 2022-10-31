<?php

namespace App\Controllers;

use App\Models\BannerheadModel;
use App\Models\MdaftarModel;
use App\Models\TelpModel;
use App\Models\TestimoniModel;

class LayoutController extends BaseController
{
    protected $bannerheadModel;
    protected $mpendaftaranModel;
    protected $testimoniModel;
    protected $telpModel;

    public function __construct()
    {
        $this->bannerheadModel = new BannerheadModel();
        $this->mpendaftaranModel = new MdaftarModel();
        $this->testimoniModel = new TestimoniModel();
        $this->telpModel = new TelpModel();
    }

    // ------------------------------------------------------//
    //----------------- HEADER-DESC--------------------------//
    // ------------------------------------------------------//

    public function index()
    {
        $headerList = $this->bannerheadModel->findAll();

        $data = [
            'headerlist' => $headerList
        ];

        return view('dashboard/header-desc', $data);
    }

    public function newHeader()
    {
        return view('insert/new-header-desc');
    }

    public function saveHeader()
    {
        $idHeader = $this->bannerheadModel->getID();

        $data_post = [
            'id_banner_head' => $idHeader,
            'judul' => $this->request->getVar('judul'),
            'subjudul' => $this->request->getVar('subjudul'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'id_telp' => 'TL000001',
            'created_at' => date('Y-m-d H:m:s')
        ];

        $save = $this->bannerheadModel->save($data_post);

        if ($save) {
            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');
            return redirect()->to(base_url() . '/dashboard/header-desc');
        } else {
            session()->setFlashdata('gagal', 'Data Gagal Ditambahkan.');
            return redirect()->to(base_url() . '/dashboard/header-desc');
        }
    }

    public function editHeader($id)
    {
        $data = [
            'dataHeader' => $this->bannerheadModel->find($id)
        ];

        return view('edit/edit-header-desc', $data);
    }

    public function updateHeader()
    {
        $data_post = [
            'id_banner_head' => $this->request->getVar('idBanner'),
            'judul' => $this->request->getVar('judul'),
            'subjudul' => $this->request->getVar('subjudul'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'id_telp' => 'TL000001',
            'updated_at' => date('Y-m-d H:m:s')
        ];

        $save = $this->bannerheadModel->save($data_post);

        if ($save) {
            session()->setFlashdata('pesan', 'Data Berhasil Diubah.');
            return redirect()->to(base_url() . '/dashboard/header-desc');
        } else {
            session()->setFlashdata('gagal', 'Data Gagal Diubah.');
            return redirect()->to(base_url() . '/dashboard/header-desc');
        }
    }

    public function deleteHeader($id)
    {
        if ($this->bannerheadModel->delete($id)) {
            session()->setFlashdata('gagal', 'Data Berhasil Dihapus.');
            return redirect()->to(base_url() . '/dashboard/header-desc');
        } else {
            session()->setFlashdata('gagal', 'Data Gagal Dihapus.');
            return redirect()->to(base_url() . '/dashboard/header-desc');
        }
    }

    // ------------------------------------------------------//
    //------------------ PENDAFTARAN ------------------------//
    // ------------------------------------------------------//
    public function pendaftaran()
    {
        $pendaftaranList = $this->mpendaftaranModel->findAll();

        $data = [
            'pendaftaranList' => $pendaftaranList
        ];

        return view('dashboard/pendaftaran', $data);
    }

    public function newPendaftaran()
    {
        return view('insert/new-pendaftaran');
    }

    public function savePendaftaran()
    {
        $idPendaftaran = $this->mpendaftaranModel->getID();

        $data_post = [
            'id_mdaftar' => $idPendaftaran,
            'judul' => $this->request->getVar('judul'),
            'icon' => $this->request->getVar('icon'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'created_at' => date('Y-m-d H:m:s')
        ];

        $save = $this->mpendaftaranModel->save($data_post);

        if ($save) {
            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');
            return redirect()->to(base_url() . '/dashboard/pendaftaran');
        } else {
            session()->setFlashdata('gagal', 'Data Gagal Ditambahkan.');
            return redirect()->to(base_url() . '/dashboard/pendaftaran');
        }
    }

    public function deletePendaftaran($id)
    {
        if ($this->mpendaftaranModel->delete($id)) {
            session()->setFlashdata('gagal', 'Data Berhasil Dihapus.');
            return redirect()->to(base_url() . '/dashboard/pendaftaran');
        } else {
            session()->setFlashdata('gagal', 'Data Gagal Dihapus.');
            return redirect()->to(base_url() . '/dashboard/pendaftaran');
        }
    }

    public function editPendaftaran($id)
    {
        $dataPendaftaran = $this->mpendaftaranModel->find($id);

        $data = [
            'dataPendaftaran' => $dataPendaftaran
        ];

        return view('edit/edit-pendaftaran', $data);
    }

    public function updatePendaftaran()
    {
        $data_post = [
            'id_mdaftar' => $this->request->getVar('idPendaftaran'),
            'judul' => $this->request->getVar('judul'),
            'icon' => $this->request->getVar('icon'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'updated_at' => date('Y-m-d H:m:s')
        ];

        $save = $this->mpendaftaranModel->save($data_post);

        if ($save) {
            session()->setFlashdata('pesan', 'Data Berhasil Diubah.');
            return redirect()->to(base_url() . '/dashboard/pendaftaran');
        } else {
            session()->setFlashdata('gagal', 'Data Gagal Diubah.');
            return redirect()->to(base_url() . '/dashboard/pendaftaran');
        }
    }


    // ------------------------------------------------------//
    //------------------ TESTIMONI --------------------------//
    // ------------------------------------------------------//
    public function testimoni()
    {
        $testimoniList = $this->testimoniModel->findAll();

        $data = [
            'testimoniList' => $testimoniList
        ];

        return view('dashboard/testimoni', $data);
    }

    public function newTestimoni()
    {
        return view('insert/new-testimoni');
    }

    public function saveTestimoni()
    {
        $foto = $this->request->getFile('fotoTestimoni');

        if ($foto->getError() == 4) {
            $namaFoto = 'default.png';
        } else {
            $namaFoto = $foto->getRandomName();

            $foto->move('images/upload', $namaFoto);
        }

        $data_post = [
            'id_testimoni' => $this->testimoniModel->getID(),
            'foto' => $namaFoto,
            'created_at' => date('Y-m-d H:m:s')
        ];

        $save = $this->testimoniModel->save($data_post);
        if ($save) {
            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');
            return redirect()->to(base_url() . '/dashboard/testimoni');
        } else {
            session()->setFlashdata('gagal', 'Data Gagal Ditambahkan.');
            return redirect()->to(base_url() . '/dashboard/testimoni');
        }
    }

    public function deleteTestimoni($id)
    {
        $testimoni = $this->testimoniModel->find($id);

        if ($testimoni['foto'] != 'default.png') {
            unlink('images/upload/' . $testimoni['foto']);
        }

        if ($this->testimoniModel->delete($id)) {
            session()->setFlashdata('gagal', 'Data Berhasil Dihapus.');
            return redirect()->to(base_url() . '/dashboard/testimoni');
        } else {
            session()->setFlashdata('gagal', 'Data Gagal Dihapus.');
            return redirect()->to(base_url() . '/dashboard/testimoni');
        }
    }

    public function editTestimoni($id)
    {
        $dataTestimoni = $this->testimoniModel->find($id);

        $data =  [
            'dataTestimoni' => $dataTestimoni
        ];

        return view('edit/edit-testimoni', $data);
    }

    public function updateTestimoni()
    {
        $foto = $this->request->getFile('fotoTestimoni');

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
            'id_testimoni' => $this->request->getVar('idTestimoni'),
            'foto' => $namaFoto,
            'updated_at' => date('Y-m-d H:m:s')
        ];

        $save = $this->testimoniModel->save($data_post);
        if ($save) {
            session()->setFlashdata('pesan', 'Data Berhasil Diubah.');
            return redirect()->to(base_url() . '/dashboard/testimoni');
        } else {
            session()->setFlashdata('gagal', 'Data Gagal Diubah.');
            return redirect()->to(base_url() . '/dashboard/testimoni');
        }
    }


    // ------------------------------------------------------//
    //------------------ NO TELP ----------------------------//
    // ------------------------------------------------------//
    public function notelp()
    {
        $telpData = $this->telpModel->find();

        $data = [
            'telpData' => $telpData[0]
        ];

        return view('dashboard/notelp', $data);
    }

    public function updateNotelp()
    {
        $getTelp = $this->request->getVar('no-telp');
        $noTelp = substr($getTelp, 1);

        $data_post = [
            'id_telp' => $this->request->getVar('idTelp'),
            'no_telp' => $getTelp,
            'link_telp' => 'https://wa.me/62' . $noTelp,
            'updated_at' => date('Y-m-d H:m:s')
        ];

        $save = $this->telpModel->save($data_post);
        if ($save) {
            session()->setFlashdata('pesan', 'Data Berhasil Diubah.');
            return redirect()->to(base_url() . '/dashboard/no-telp');
        } else {
            session()->setFlashdata('gagal', 'Data Gagal Diubah.');
            return redirect()->to(base_url() . '/dashboard/no-telp');
        }
    }
}