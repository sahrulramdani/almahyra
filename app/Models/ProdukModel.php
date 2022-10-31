<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb02_prk';
    protected $primaryKey       = 'id_produk';
    protected $useAutoIncrement = false;
    protected $insertID         = 1;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_produk', 'nama_produk', 'jenis_produk', 'tanggal_berangkat', 'tanggal_pulang', 'pembimbing', 'catatan', 'foto', 'created_at', 'updated_at'];

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getProduk($produk)
    {
        $getProduk = $this->db->query("SELECT * FROM `tb02_prk` a LEFT JOIN `tb01_pbm` b ON a.pembimbing = b.id_pembimbing WHERE a.id_produk = '$produk'")->getRowArray();

        return $getProduk;
    }

    public function listProduk()
    {
        $getProduk = $this->db->query("SELECT a.*, b.nama_pembimbing FROM `tb02_prk` a LEFT JOIN `tb01_pbm` b ON a.pembimbing = b.id_pembimbing")->getResultArray();

        return $getProduk;
    }

    public function getID()
    {
        $query = $this->db->query("SELECT id_produk FROM tb02_prk ORDER BY id_produk DESC LIMIT 1")->getResult();

        if ($query != null) {
            $idBanner = $query[0]->id_produk;
            $getNumber = intval(substr($idBanner, -6)) + 1;
            $newID = 'PR' . str_pad($getNumber, 6, '0', STR_PAD_LEFT);
        } else {
            $newID = 'PR000001';
        }

        return $newID;
    }
}