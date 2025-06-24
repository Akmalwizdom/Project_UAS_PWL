<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ProdukController extends BaseController
{
public function index(): string
    {
        return view('v_produk');
    }
}
