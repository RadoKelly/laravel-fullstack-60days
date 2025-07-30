<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about() {
        $name = 'Ratianarivelo Radonirina';
        $objectif = 'Devenir un développeur web full stack';
        $skills = [
            'HTML',
            'CSS',
            'JavaScript',
            'PHP',
            'Laravel',
            'MySQL'
        ];
        $date = now()->format('d/m/Y');

        return view('about', compact('name', 'objectif', 'skills', 'date'));
    }
}
