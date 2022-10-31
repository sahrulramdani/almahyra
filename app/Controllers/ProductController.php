<?php

namespace App\Controllers;

use App\Models\PembimbingModel;
use App\Models\ProdukModel;

class ProductController extends BaseController
{
    protected $produkModel;
    protected $pembimbingModel;

    public function __construct()
    {
        $this->produkModel = new ProdukModel();
        $this->pembimbingModel = new PembimbingModel();
    }

    public function index()
    {
        $listProduk = $this->produkModel->listProduk();

        $data = [
            'listProduk' => $listProduk
        ];

        return view('dashboard/product', $data);
    }

    public function newProduct()
    {
        $listPembimbing = $this->pembimbingModel->findAll();

        $data = [
            'listPembimbing' => $listPembimbing,
            'tanggal' => date('Y-m-d'),
        ];
        return view('insert/new-product', $data);
    }

    public function saveProduct()
    {
        $foto = $this->request->getFile('fotoProduct');

        if ($foto->getError() == 4) {
            $namaFoto = 'default.png';
        } else {
            $namaFoto = $foto->getRandomName();

            $foto->move('images/upload', $namaFoto);
        }

        $data_post = [
            'id_produk' => $this->produkModel->getID(),
            'nama_produk' => $this->request->getVar('nama_produk'),
            'jenis_produk' => $this->request->getVar('jenis_produk'),
            'tanggal_berangkat' => $this->request->getVar('tanggal_berangkat'),
            'tanggal_pulang' => $this->request->getVar('tanggal_pulang'),
            'pembimbing' => $this->request->getVar('nama_pembimbing'),
            'catatan' => $this->request->getVar('catatan'),
            'foto' => $namaFoto,
            'created_at' => date('Y-m-d H:m:s')
        ];

        $save = $this->produkModel->save($data_post);
        if ($save) {
            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');
            return redirect()->to(base_url() . '/dashboard/product');
        } else {
            session()->setFlashdata('gagal', 'Data Gagal Ditambahkan.');
            return redirect()->to(base_url() . '/dashboard/product');
        }
    }

    public function deleteProduct($id)
    {
        $product = $this->produkModel->find($id);

        if ($product['foto'] != 'default.png') {
            unlink('images/upload/' . $product['foto']);
        }

        if ($this->produkModel->delete($id)) {
            session()->setFlashdata('gagal', 'Data Berhasil Dihapus.');
            return redirect()->to(base_url() . '/dashboard/product');
        } else {
            session()->setFlashdata('gagal', 'Data Gagal Dihapus.');
            return redirect()->to(base_url() . '/dashboard/product');
        }
    }

    public function editProduct($id)
    {
        $listPembimbing = $this->pembimbingModel->findAll();
        $dataProduk = $this->produkModel->find($id);


        $data = [
            'listPembimbing' => $listPembimbing,
            'dataProduk' => $dataProduk,
        ];

        return view('edit/edit-product', $data);
    }

    public function updateProduct()
    {
        $foto = $this->request->getFile('fotoProduct');

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
            'id_produk' => $this->request->getVar('idProduk'),
            'nama_produk' => $this->request->getVar('nama_produk'),
            'jenis_produk' => $this->request->getVar('jenis_produk'),
            'tanggal_berangkat' => $this->request->getVar('tanggal_berangkat'),
            'tanggal_pulang' => $this->request->getVar('tanggal_pulang'),
            'pembimbing' => $this->request->getVar('nama_pembimbing'),
            'catatan' => $this->request->getVar('catatan'),
            'foto' => $namaFoto,
            'updated_at' => date('Y-m-d H:m:s')
        ];

        $save = $this->produkModel->save($data_post);
        if ($save) {
            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');
            return redirect()->to(base_url() . '/dashboard/product');
        } else {
            session()->setFlashdata('gagal', 'Data Gagal Ditambahkan.');
            return redirect()->to(base_url() . '/dashboard/product');
        }
    }
}