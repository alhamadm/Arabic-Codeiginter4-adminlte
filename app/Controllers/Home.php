<?php

namespace App\Controllers;

use agungsugiarto\boilerplate\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
      $data = [
            'title' => 'Home',
        ];

        return view('home', $data);
    }
}
