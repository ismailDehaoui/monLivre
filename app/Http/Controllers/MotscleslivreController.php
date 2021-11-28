<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motscleslivre;

class MotscleslivreController extends Controller
{
    public function store($motscles, $id_livre){
        foreach($motscles as $motcle){
            $motscleslivre = new Motscleslivre();
            $motscleslivre->livres_id = $id_livre;
            $motscleslivre->motscles_id = $motcle;
            $motscleslivre->save();
        }
    }
}
