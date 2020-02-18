@extends('master')
@section('content')
@section("title","page d'acceuil")
  <!-- Chargement du template PHTML spécifié par le programme PHP -->


<h2><i class="fa fa-cogs"></i> Panneau des eleves</h2>

<nav>
    <a href="{{route('ajouter_Livre')}}">ajouter des eleves</a>
</nav>

<table class="standard-table">
    <caption>Liste des eleve</caption>
    <thead>
        <tr>
            <th>id</th>
            <th>nom</th>
            <th>prenom</th>
            <th>numero</th>
            <th>etablissement</th>
            <th>niveau</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($eleves as $eleve)
            <tr>
                <td>{{$livre->id}}</td>
                <td>{{$livre->LastName}} </td>
                <td>{{$livre->FirstName}}</td>
                <td>{{$livre->phone}}</td>
                <td>{{$livre->etablissement}}</td>
                <td>{{$livre->niveau}}</td>
                <td></td>
                <td></td>
                <td>
                  <a class="edit" href=""><i class="fa fa-pencil"></i></a>
                  <a class="remove" href="{{route('get_supprimer_Eleve',$eleve->id)}}"><i class="fa fa-remove"></i></a>
                  <a class="remove" href=""><i class="fa fa-eye"></i></a>
                </td>
            </tr>
         @endforeach 
    </tbody>
</table>

{{ $eleves->links() }}

@endsection