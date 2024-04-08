<?php

namespace App\Controllers;

use agungsugiarto\boilerplate\Controllers;

class Dashboard extends BaseController
{
    public function index(): string
    {
      $data = [
            'title' => 'الصفحة الرئيسية',
        ];

        return view('dashboard', $data);
    }
}
