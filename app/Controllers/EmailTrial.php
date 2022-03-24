<?php

namespace App\Controllers;

use CodeIgniter\Database\Database;

class EmailTrial extends BaseController
{
    public function index()
    {
        $data["title"] = 'Halaman Email';
        $this->load->view('email', $data);
    }

    //--------------------------------------------------------------------

}
