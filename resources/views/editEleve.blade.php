
<!-- Page d'édition d'un eleve -->
@extends('master')
@section('content')

<h2><i class="fa fa-pencil"></i> Editer un eleve</h2>

<!-- Formulaire de mise à jour d'un eleve -->
<form class="generic-form" action="editEleve.php" method="post">


    <input type="hidden" name="eleve_id" value="<?= $eleve['eleve_id'] ?>">

    <fieldset>
        <legend><i class="fa fa-sticky-note-o"></i> eleve</legend>
        <ul>
            <li>
                <label for="FirstName">prenom :</label>
                <input type="text" id="FirstName" name="FirstName" value="<?= htmlspecialchars($eleve['FirstName']) ?>"  required>
            </li>
            <li>
              <label for="LastName">nom :</label>
                <input type="text" id="LastName" name="LastName" value="<?= htmlspecialchars($eleve['LastName']) ?>" required>
            </li>
            <li>
            <label for="phone">phone :</label>
                <input type="text" id="phone" name="phone" value="<?= htmlspecialchars($eleve['phone']) ?>" required>
            </li>
            <li>
               <label for="etablissement">etablissement :</label>
                <input type="text" id="etablissement" name="etablissement" value="<?= htmlspecialchars($eleve['etablissement']) ?>" required>
            </li>
             <li>
               <label for="niveau">niveau :</label>
                <input type="text" id="niveau" name="niveau" value="<?= htmlspecialchars($eleve['niveau']) ?>" required>
            </li>
            <li>
                <button class="button button-primary" type="submit">Mettre à jour</button>
                <a class="button button-cancel" href="index.php">Annuler</a>
            </li>
        </ul>
    </fieldset>
</form>