<?php

namespace App\Models;

use CodeIgniter\Model;

class LokasiModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'lokasi';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['kota'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules  = [
        'kota' => [
            'rules' => 'required', 
            'errors' => [
                'required' => '{field} wajib diisi*'
            ]
        ],
    ];

    protected $skipValidation = true; 

    public function saveLokasi($data){
        // dd($this->insert($data));
        $this->insert($data); 
    }

    public function getLokasi($id = null){
        if($id != null){
            return $this->select('lokasi.*')->find($id); 
        }
        
        return $this->select('lokasi.*')->findAll();
    }

    public function updateLokasi($data, $id){
        return $this->update($id, $data); 
    }

    public function deleteLokasi($id){
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
