<?php

namespace App\Models;

use CodeIgniter\Model;

class JurusanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'jurusan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['jurusan'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules  = [
        'jurusan' => [
            'rules' => 'required', 
            'errors' => [
                'required' => '{field} wajib diisi*'
            ]
        ],
    ];

    protected $skipValidation = true; 

    public function saveJurusan($data){
        // dd($this->insert($data));
        $this->insert($data); 
    }

    public function getJurusan($id = null){
        if($id != null){
            return $this->select('jurusan.*')->find($id); 
        }
        
        return $this->select('jurusan.*')->findAll();
    }

    public function updateJurusan($data, $id){
        return $this->update($id, $data); 
    }

    public function deleteJurusan($id){
        return $this->delete($id);
    }

    // // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];
}
