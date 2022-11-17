<?php session_start(); ?>

<?php require 'controllers/controller.php';

if (isset($_SESSION['admin'])){
        if (isset($_GET['home'])){
            homeadmin();
        } elseif (isset($_GET['supprimer'])){
           SessionDestroy(); 
        } elseif (isset($_GET['debogage'])){
            debogage();
        } elseif (isset($_GET['concatenation'])){
            concatenation();
        } elseif (isset($_GET['boucle'])){
            boucle();
        } elseif (isset($_GET['fonction'])){
            fonction();
        }  else {
            home();
        }
}

elseif (empty($_SESSION['admin'])){
    if (isset($_GET['home'])){
        homefonction();
    } elseif (isset($_GET['form'])){
        form();
    } else {
        home();
    }
}


if (isset($_POST['submit'])){
    if (isset($_POST['prenom']) && !empty($_POST['prenom']) && isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['age']) && !empty($_POST['age']) && isset($_POST['taille']) && !empty($_POST['taille']) && isset($_POST['type']) && !empty($_POST['type'])){
        CreateSession();
    }
}


?>