<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Abonnee;

class AbonneeController extends Controller
{
    public function create(){

        return view('abonnees.create');
    }    
    
    public function profile($id){
        $abonnee = Abonnee::find($id);
        return view('abonnees.profile',['abonnee'=>$abonnee]); 
    }

    public function listAbonnees(){
    	
    	$abonnee = Abonnee::paginate(3);
        return view('abonnees.abonnee', ['abonnees'=>$abonnee]);
    } 
    public function store(Request $request){
       
      if (Abonnee::where('email_abonnee', $request->input('email'))->exists()) {
             echo "Error";
        }else{
        $abonnee = new Abonnee();
        $abonnee->nom_abonnee = $request->input('nom');
    	  $abonnee->prenom_abonnee = $request->input('prenom');
        $abonnee->email_abonnee = $request->input('email');
        $abonnee->adresse_abonnee = $request->input('adresse');
        $abonnee->date_naissance_abonnee = $request->input('date_naissance');       
        $filenameWithExt = $request->file('image')->getClientOriginalName();
        // Get just filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // Get just ext
        $extension = $request->file('image')->getClientOriginalExtension();
        // Filename to store
        $fileNameToStore= $filename.'_'.time().'.'.$extension;
        // Upload Image
        $path = $request->file('image')->storeAs('public/Admin', $fileNameToStore);
        $abonnee->image = $fileNameToStore;
        $abonnee->date_expiration = date(NOW());
        $abonnee->created_at = date(NOW());
        $abonnee->save();
    	  return redirect('/abonnées');
      }}

      public function edit($id){
    	$abonnee = Abonnee::find($id);
    	return view('abonnees.modifier', ['abonnee'=>$abonnee]);
    }

      public function update(Request $request,$id){
        if (Abonnee::where('email_Abonnee', $request->input('email'))->exists()) {
             echo "Error";
        }else{
    	$abonnee = Abonnee::find($id);
    	$abonnee->nom_Abonnee = $request->input('nom');
    	$abonnee->prenom_Abonnee = $request->input('prenom');
      $abonnee->email_Abonnee = $request->input('email');
      $abonnee->adresse_Abonnee = $request->input('adresse');
      $abonnee->date_de_naissance_Abonnee = $request->input('date_de_naissance');
      $abonnee->updated_at =date(NOW());
    	$abonnee->save();
    	return redirect('/');
      }
    }
}
