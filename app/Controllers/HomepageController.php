<?php

namespace App\Controllers;

use App\Models\BannerheadModel;
use App\Models\MdaftarModel;
use App\Models\MenuModel;
use App\Models\PembimbingModel;
use App\Models\ProdukModel;

class HomepageController extends BaseController
{
    protected $menuModel;
    protected $bannerheadModel;
    protected $mdaftarModel;
    protected $produkModel;
    protected $pembimbingModel;

    public function __construct()
    {
        $this->menuModel = new MenuModel();
        $this->bannerheadModel = new BannerheadModel();
        $this->mdaftarModel = new MdaftarModel();
        $this->produkModel = new ProdukModel();
        $this->pembimbingModel = new PembimbingModel();
    }

    public function index()
    {
        $menu = $this->menuModel->findAll();
        $bannerhead = $this->bannerheadModel->getBannerhead();
        $mdaftar = $this->mdaftarModel->findAll();
        $listProduk = $this->produkModel->findAll();
        $pembimbing = $this->pembimbingModel->findAll();

        $data = [
            'menu' => $menu,
            'bannerhead' => $bannerhead,
            'mdaftar' => $mdaftar,
            'listProduk' => $listProduk,
            'pembimbing' => $pembimbing,
        ];

        return view('homepage/index', $data);
    }

    public function detail($produk)
    {
        $detailProduk = $this->produkModel->getProduk($produk);
        $mdaftar = $this->mdaftarModel->findAll();

        $data = [
            'produk' => $detailProduk,
            'mdaftar' => $mdaftar,
        ];

        return view('homepage/detail', $data);
    }
}