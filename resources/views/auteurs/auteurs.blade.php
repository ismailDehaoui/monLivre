@extends('layouts.master')
@Section('content')

<div class="row">
        <div class="col-12">
          <a class="btn btn-primary bg-gradient-success mb-0" href="{{ url('auteurs/créer') }}">
             <input type="hidden" name="ajouter">
            <i class="material-icons text-sm">add</i>&nbsp;&nbsp;Ajouter auteur
          </a>
        </br></br>
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Auteurss</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nom </th>
                      </tr>
                  </thead>
                  <tbody>
                  	 @foreach($auteurs as $auteur)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <!--img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1"-->
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                             <h6 class="mb-0 text-sm">{{$auteur->nom_auteur}}</h6>
                            </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$auteur->updated_at}}</p>
                      </td>
                      <!--td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Online</span>
                      </td-->
                 
                      <td class="align-middle">
                        <a href="{{url('mod/'.$auteur->id.'/edit')}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                         <h6> <i class="material-icons text-sm">update</i>Modifier
                        </h6></a>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                         <h6> <i class="material-icons text-sm">delete</i>
                          Supprimer
                        </h6></a>
                      </td>
                    </tr>
                 @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>


@endsection('content')