<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        return view('backend/admin/v_dashboard', [
            'title' => 'Dashboard Admin'
        ]);
    }
}
