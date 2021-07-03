<?php if($errors): ?>
    <div class="alert alert-danger">
        Identifiants incorrect
    </div>
<?php endif; $lien = "Filiere"; $etudiant = "filiere.index";?>
<form method="post">
    <?= $form->input('username', 'Pseudo'); ?>
    <?= $form->input('password', 'Mot e Passe', ['type'=>'password']); ?>
    <button class="btn btn-primary">Envoyer</button>
</form>