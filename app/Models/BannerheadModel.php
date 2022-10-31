<?php

namespace App\Models;

use CodeIgniter\Model;

class BannerheadModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb00_bhead';
    protected $primaryKey       = 'id_banner_head';
    protected $useAutoIncrement = false;
    protected $insertID         = 1;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_banner_head', 'judul', 'subjudul', 'deskripsi', 'id_telp', 'created_at', 'updated_at'];

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

    public function getBannerhead()
    {
        $query =  $this->db->table('tb00_bhead')
            ->join('m_telp', 'tb00_bhead.id_telp = m_telp.id_telp')
            ->get();

        $array = $query->getResultArray();
        return $array;
    }

    public function getID()
    {
        $query = $this->db->query("SELECT id_banner_head FROM tb00_bhead ORDER BY id_banner_head DESC LIMIT 1")->getResult();

        if ($query != null) {
            $idBanner = $query[0]->id_banner_head;
            $getNumber = intval(substr($idBanner, -6)) + 1;
            $newID = 'BH' . str_pad($getNumber, 6, '0', STR_PAD_LEFT);
        } else {
            $newID = 'BH000001';
        }

        return $newID;
    }
}