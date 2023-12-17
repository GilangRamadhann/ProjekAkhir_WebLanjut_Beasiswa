<?php

namespace App\Models;

use CodeIgniter\Model;

class PengeluaranModel extends Model
{
    protected $table = 'pengeluaran';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id_beswan',
        'id_program',
        'beasiswa',
        'orang_tua',
        'upah',
        'bulan',
        'makan',
        'kos',
        'internet',
        'transportasi',
        'buku',
        'kursus',
        'lainlain',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;

    // Add your custom methods or validations if needed
}
