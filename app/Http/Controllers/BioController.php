<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller; // Use this base Controller class

class BioController extends Controller
{
    // Biography page
    public function show()
    {
        return view('bio', [
            'fullName' => 'Kristine Amada Anfone',
            'birthDate' => 'October 30, 2004',
            'birthPlace' => 'Nagcasunog Bindoy, Negros Oriental, Philippines',
            'education' => 'Bachelor of Science in Information Technology - NORSU',
            'hobbies' => ['Reading Books', 'Singing', 'Guitar', 'Traveling'],
            'favoriteQuote' => '"Ayaw kahadlok masayop, kay didto ka makat-on unsaon paglambo."',
        ]);
    }

    // Skills page
    public function skills()
    {
        return view('skills'); // Make sure skills.blade.php exists in views/
    }
}
