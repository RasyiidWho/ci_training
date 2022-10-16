<?php

namespace App\Models;

use CodeIgniter\Model;

class Anyar_m extends Model
{
    protected $table = 'anyar_tabel';
    protected $allowedFields = ['nama', 'umur'];

    public function view() {
        return $this->findAll();
        
    }

    public function insertx($nama, $umur) {
        $data = [
            'nama' => $nama,
            'umur'    => $umur,
        ];
        
        return $this->insert($data);

    }

}