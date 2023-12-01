<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'username',
        'password',
        'email',
        'name',
        'role',
    ];

    public function saveUser($data){
        $this->insert($data); 
    }

    public function get_data($email, $password){
        return $this->db->table('users')->where(array('email' => $email, 'password' => $password))->get()->getRowArray();
	}
    
}
