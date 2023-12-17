<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarModel extends Model
{
    protected $table = 'daftar_terima';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id_beswan',
        'id_program',
        'status',
        'id_univ',
        'berkas',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $useTimestamps = true;
    protected $useSoftDeletes = true;

    protected $returnType = 'array';

  
}
