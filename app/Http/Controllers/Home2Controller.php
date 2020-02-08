<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home2Controller extends Controller
{
    public function index() {
        $links = [
            'link01',
            'link02',
            'link03',
            'link04',
            'link05'
        ];

        return view('welcome2', [
            'links' => $links
        ]);

    }
}
