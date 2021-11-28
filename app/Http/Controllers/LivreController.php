<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Livres; 

use App\Models\Auteurslivre;

use App\Models\Motscleslivre;

use App\Models\Categorie;

use App\Models\Auteur;

use App\Models\Motscle;

class LivreController extends Controller
{
    //
    //Lister les livres
    public function index(){
        $livres = Livres::paginate(3);
        return view('livres.index', ['livres'=>$livres]);
    }

    //Affiche le formulaire d'ajout de livres
    public function create(){
        $categories = Categorie::orderBy('nom')->get();
        $auteurs    = Auteur::orderBy('nom')->get();
        $motscles   = Motscle::orderBy('motcle')->get();
        return view('livres.add', ['categories'=>$categories, 'auteurs'=>$auteurs, 'motscles'=>$motscles]);
    }

    //Enregistrer un livre
    public function store(Request $request){

        $motsClesLivreController = new MotscleslivreController();
        $auteursLivreController = new AuteurslivreController();

        $livre = new Livres();
        
        $livre->titre = $request->input('titre');
        $livre->isbn = $request->input('isbn');
        $livre->editeur = $request->input('éditeur');
        $livre->langue = $request->input('langue');
        $livre->categories_id = $request->input('catégorie');
        $livre->nombre_exemplaires_disponibles = $request->input('nombre-exemplaires-disponibles');
        $livre->annee = $request->input('année');
        $livre->photo = $request->input('image');
        $livre->resume = $request->input('résumé');
        $livre->save();

        $motsClesLivreController->store($request->input('motcle'), $livre->id);
        $auteursLivreController->store($request->input('auteur'), $livre->id);

        return redirect('/livres');
    }

    //Recuperer un livre puis le saisir dans le formulaire
    public function edit(){

    }

    //Modifier un livre
    public function update(){

    }

    //Supprimer un livre
    public function destroy(){

    }

}
