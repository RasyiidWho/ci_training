<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Anyar_c extends ResourceController
{

    protected $modelName    = 'App\Models\Anyar_m';

    public function view() {
        $respond = $this->model->view();
            return $this->respond($respond);
    }

    public function insert() {
        $nama = $this->request->getVar('nama');
        $umur = $this->request->getVar('umur');

        $respond = $this->model->insertx($nama, $umur);
            return $this->respond($respond);
}
}