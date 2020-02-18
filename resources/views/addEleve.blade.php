<!-- Page d'ajout  -->
@extends('master')
@section('content')
<h2><i class="fa fa-pencil"></i> ajouter un eleve</h2>

<!-- Formulaire de saisie  -->
<form class="generic-form" action="{{route('post_ajouter_Eleve')}}" method="post">
    @csrf
    <fieldset>
        <legend><i class="fa fa-sticky-note-o"></i> Nouveau eleve</legend>
        <ul>
            <li>
                <label for="FirstName">prenom :</label>
                <input type="text" value="{{old('FirstName')}}" required>
            </li>
            <li>
              <label for="LastName">nom :</label>
                <input type="text" value="{{old('LastName')}}"required>
            </li>
            <li>
            <label for="phone">phone :</label>
                <input type="text" value="{{old('phone')}}" required>
            </li>
            <li>
               <label for="etablissement">etablissement:</label>
                <input type="text" value="{{old('etablissement')}}" required>
            </li>
             <li>
               <label for="niveau">niveau :</label>
                <input type="text" value="{{old('niveau')}}" required>
            </li>
            <li>
                <button class="button button-primary" type="submit" value="ajouter">Enregistrer</button>
                <a class="button button-cancel" href="{{route('pageAcceuil')}}">Annuler</a>
            </li>
        </ul>
    </fieldset>
</form>
@endsection