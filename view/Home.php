<?php $title = 'Home'; ?>
<?php ob_start(); ?>

<p> Bienvenue n'hesitez pas a ajouter des données pour accéder aux fonctions. </p>

<?php $content = ob_get_clean(); ?>
<?php require 'view/template.php'; ?>