<?php

namespace App\Models;

use CodeIgniter\Model;

class PembimbingModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb01_pbm';
    protected $primaryKey       = 'id_pembimbing';
    protected $useAutoIncrement = false;
    protected $insertID         = 1;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_pembimbing', 'nama_pembimbing', 'pekerjaan', 'foto', 'created_at', 'updated_at'];

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
        $query = $this->db->query("SELECT id_pembimbing FROM tb01_pbm ORDER BY id_pembimbing DESC LIMIT 1")->getResult();

        if ($query != null) {
            $idBanner = $query[0]->id_pembimbing;
            $getNumber = intval(substr($idBanner, -6)) + 1;
            $newID = 'PB' . str_pad($getNumber, 6, '0', STR_PAD_LEFT);
        } else {
            $newID = 'PB000001';
        }

        return $newID;
    }
}