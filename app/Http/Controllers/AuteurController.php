<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Auteur;
class AuteurController extends Controller
{
    public function create(){

        return view('auteurs.create');
    }    
    /*
    public function profile($id){
        $abonnee = Abonnee::find($id);
        return view('abonnees.profile',['abonnee'=>$abonnee]); 
    }*/

    public function listAuteurs(){
    	
    	$auteur = Auteur::all();
        return view('auteurs.auteurs', ['auteurs'=>$auteur]);
    } 
    public function store(Request $request){
       
      //dd($request->all());
     
      if (Auteur::where('nom_auteur', $request->input('nom'))->exists()) {
             echo "Error";
        }else{
    	
          

        $auteur = new Auteur();
        
        $auteur->nom_auteur = $request->input('nom');
        $auteur->save();
    	  return redirect('/auteurs');
      }}

      public function edit($id){
    	$auteur = Auteur::find($id);
    	return view('auteurs.modifierauteur', ['auteur'=>$auteur]);
    }

      public function update(Request $request,$id){
        if (Auteur::where('nom_auteur', $request->input('nom'))->exists()) {
             echo "Error";
        }else{
    	$auteur = Auteur::find($id);
    	$auteur->nom_auteur = $request->input('nom');
    	$auteur->save();
    	return redirect('/');
      }
    }
}
