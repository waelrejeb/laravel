<h2><i class="fa fa-file-text-o"></i>notre eleve</h2>


<section class="eleve">
    <h3><?= htmlspecialchars($eleve['FirstName']) ?> <?= htmlspecialchars($eleve['LastName']) ?>:</h3>
    
    <h4>
       <small>etait dans l'etablissement</small> <?= htmlspecialchars($eleve['etablissement']) ?> <small>et de niveau </small><?= htmlspecialchars($eleve['niveau']) ?>
    </h4>
</section>