@extends('layouts.master')
@Section('content')
   <div class="container d-flex">
    <div class="row align-self-center">
    <div class="col-xl-12 col-lg-5 col-md-2 d-flex flex-column ms-auto me-auto ms-lg-auto  me-lg-1">
            <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder">Modifier Catégorie</h4>
                <p>Entrer une catégorie qui n'existe pas déja</p>  
                </div>
                <p class="card-body">
                  <form action="{{url('modifier/'.$cat->id)}}" method="POST" >
                    <input type="hidden" name="_method" value="PUT">
                  	{{ csrf_field()}}
                    <p class="input-group input-group-outline mb-3">
                      <label class="form-label">Nom_Catégorie</label>
                      <input type="text" class="form-control" name="nom" value="{{$cat->nom_categorie}}" required="true">
                    </p>
                    
                    <div class="text-center">
                      <input type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0" name="" value="Modifier">
                    </div>
                  </form>
                </p>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    <a href="{{url('/')}}" class="text-primary text-gradient font-weight-bold">Retournez aux catégories</a>
                  </p>
                </div>
              </div>
            </div>
    </div></div></div>
@endsection('content')