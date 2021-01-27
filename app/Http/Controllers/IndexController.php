<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index ()
    { $nume= "Dicusara";
       $prenume = "Edelmira";
      
        return view ('index') -> with ('nume', $nume ) -> with ('prenume', $prenume );
    }
}
