<?php

namespace App\Models;

use CodeIgniter\Model;

class TestimoniModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb00_tes';
    protected $primaryKey       = 'id_testimoni';
    protected $useAutoIncrement = false;
    protected $insertID         = 1;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_testimoni', 'foto', 'created_at', 'updated_at'];

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
        $query = $this->db->query("SELECT id_testimoni FROM tb00_tes ORDER BY id_testimoni DESC LIMIT 1")->getResult();

        if ($query != null) {
            $idTesti = $query[0]->id_testimoni;
            $getNumber = intval(substr($idTesti, -6)) + 1;
            $newID = 'TS' . str_pad($getNumber, 6, '0', STR_PAD_LEFT);
        } else {
            $newID = 'TS000001';
        }

        return $newID;
    }
}