<?php

namespace App\Models;

use CodeIgniter\Model;

class MdaftarModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb00_dtr';
    protected $primaryKey       = 'id_mdaftar';
    protected $useAutoIncrement = false;
    protected $insertID         = 1;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_mdaftar', 'judul', 'icon', 'deskripsi', 'created_at', 'updated_at'];

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

    public function getID()
    {
        $query = $this->db->query("SELECT id_mdaftar FROM tb00_dtr ORDER BY id_mdaftar DESC LIMIT 1")->getResult();

        if ($query != null) {
            $idBanner = $query[0]->id_mdaftar;
            $getNumber = intval(substr($idBanner, -6)) + 1;
            $newID = 'MD' . str_pad($getNumber, 6, '0', STR_PAD_LEFT);
        } else {
            $newID = 'MD000001';
        }

        return $newID;
    }
}