<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb03_usr';
    protected $primaryKey       = 'id_user';
    protected $useAutoIncrement = false;
    protected $insertID         = 1;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_user', 'nama', 'username', 'password', 'level', 'no_telp', 'foto'];

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

    public function listUser()
    {
        $getUser = $this->db->query("SELECT *, IF(level = '1', 'Superadmin', 'Admin' ) AS level_user FROM `tb03_usr`")->getResultArray();

        return $getUser;
    }

    public function getID()
    {
        $query = $this->db->query("SELECT id_user FROM tb03_usr ORDER BY id_user DESC LIMIT 1")->getResult();

        if ($query != null) {
            $idUser = $query[0]->id_user;
            $getNumber = intval(substr($idUser, -5)) + 1;
            $newID = 'USR' . str_pad($getNumber, 5, '0', STR_PAD_LEFT);
        } else {
            $newID = 'USR00001';
        }

        return $newID;
    }

    public function cekUsername($username)
    {
        $query = $this->db->query("SELECT * FROM `tb03_usr` WHERE username = '$username'")->getResult();

        if ($query != null) {
            $cek = true;
        } else {
            $cek = false;
        }

        return $cek;
    }
}