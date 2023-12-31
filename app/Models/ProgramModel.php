<?php

namespace App\Models;

use CodeIgniter\Model;

class ProgramModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'program';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama', 'id_user', 'deskripsi', 'ketentuan', 'syarat', 'no_telp', 'tgl_buka', 'tgl_tutup'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

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

    public function getProgram($id = null)
    {
        if ($id != null) {
            return $this->select('program.*, users.usernam')
                ->join('users', 'users.id = program.id_user')
                ->find($id);
        }
    
        return $this->select('program.*, users.username')
            ->join('users', 'users.id = program.id_user')
            ->findAll();
    }

    public function createProgram($data){
        return $this->insert($data);
    }
    public function updateProgram($data, $id){
        return $this->update($id, $data);
    }
    public function deleteProgram($id){
        return $this->delete($id);
    }
}
