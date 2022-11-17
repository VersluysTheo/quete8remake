<?php $title = 'Admin Home' ?>
<?php ob_start(); ?>

<a class="text-dark" href="index.php?debogage">Debogage</a>
<hr class="my-4">
<a class="text-dark" href="index.php?concatenation">Concatenation</a>
<hr class="my-4">
<a class="text-dark" href="index.php?boucle">Boucle</a>
<hr class="my-4">
<a class="text-dark" href="index.php?fonction">Fonction</a>
<hr class="my-4">
<a class="text-dark" href="index.php?supprimer">Supprimer</a>

<?php $content = ob_get_clean() ?>
<?php require 'view/template.php'; ?>