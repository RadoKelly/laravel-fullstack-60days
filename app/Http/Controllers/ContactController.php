<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact () {
        $email = 'rratianarivelo@gmail.com';
        $telephone = '0337453917';
        $date = now()->format('Y/m/d');

        return view('contact', compact('email', 'telephone', 'date'));
    }
}
