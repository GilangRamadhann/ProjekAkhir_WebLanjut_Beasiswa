<?php

namespace App\Models;

use CodeIgniter\Model;

class FakultasModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'fakultas';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['fakultas'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules  = [
        'fakultas' => [
            'rules' => 'required', 
            'errors' => [
                'required' => '{field} wajib diisi*'
            ]
        ],
    ];

    protected $skipValidation = true; 

    public function saveFakultas($data){
        // dd($this->insert($data));
        $this->insert($data); 
    }

    public function getFakultas($id = null){
        if($id != null){
            return $this->select('fakultas.*')->find($id); 
        }
        
        return $this->select('fakultas.*')->findAll();
    }

    public function updateFakultas($data, $id){
        return $this->update($id, $data); 
    }

    public function deleteFakultas($id){
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
