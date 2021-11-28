<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Emprunt;


class EmpruntController extends Controller{

    public function create(){

        return view('abonnees.create');
    }
    public function listEmprunts(){

    	$emprunt = Emprunt::paginate(3);
        return view('emprunts.emprunt', ['emprunts'=>$emprunt]);
    } 
      
}
