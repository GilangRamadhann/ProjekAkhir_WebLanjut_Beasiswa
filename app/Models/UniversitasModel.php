<?php

namespace App\Models;

use CodeIgniter\Model;

class UniversitasModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'universitas';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['universitas'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules  = [
        'universitas' => [
            'rules' => 'required', 
            'errors' => [
                'required' => '{field} wajib diisi*'
            ]
        ],
    ];

    protected $skipValidation = true; 

    public function saveUniversitas($data){
        // dd($this->insert($data));
        $this->insert($data); 
    }

    public function getUniversitas($id = null){
        if($id != null){
            return $this->select('universitas.*')->find($id); 
        }
        
        return $this->select('universitas.*')->findAll();
    }

    public function updateUniversitas($data, $id){
        return $this->update($id, $data); 
    }

    public function deleteUniversitas($id){
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
