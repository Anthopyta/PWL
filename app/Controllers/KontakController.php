<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class KontakController extends BaseController
{
    public function index()
    {
        return view('v_kontak');
    }
}
