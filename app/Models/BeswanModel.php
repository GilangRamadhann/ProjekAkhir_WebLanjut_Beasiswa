<?php

namespace App\Models;

use CodeIgniter\Model;

class BeswanModel extends Model
{
    protected $table            = 'beswan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_user', 'nama', 'npm', 'id_univ', 'id_fakultas', 'id_jurusan', 'akt', 'agama', 'tgl_lahir', 'no_telp', 'foto', 'alamat', 'id_lokasi'];

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

    public function getBeswan(){
        return $this->findAll();
    }
    public function saveBeswan($data){
        $this->insert($data);
    }

    public function updateBeswan($data, $id){
        return $this->update($id, $data);
    }
    
    public function user()
    {
        return $this->belongsTo('App\Models\UserModel', 'id_user', 'id');
    }
}
