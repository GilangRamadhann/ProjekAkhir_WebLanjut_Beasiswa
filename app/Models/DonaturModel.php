<?php

namespace App\Models;

use CodeIgniter\Model;

class DonaturModel extends Model
{
    protected $table            = 'donatur';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_user', 'deskripsi', 'no_telp', 'status', 'logo', 'alamat', 'id_lokasi', 'instagram', 'facebook'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

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

    public function getDonatur(){
        return $this->findAll();
    }
    public function saveDonatur($data){
        $this->insert($data);
    }

    public function updateApplicant($data, $id){
        return $this->update($id, $data);
    }
    
    public function user()
    {
        return $this->belongsTo('App\Models\UserModel', 'id_user', 'id');
    }
}
