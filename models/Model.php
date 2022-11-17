<?php function CreateSession(){
            $admin = $_SESSION['admin']=[
            'prenom' => $_POST['prenom'],
            'nom' => $_POST['nom'],
            'age' => $_POST['age'],
            'taille' => $_POST['taille'],
            'type' => $_POST['type']
        ];
        return $admin;
}

function SessionDestroy(){
    session_destroy();
    home();
}

function debogage(){
    home();
    echo '<br>';
    print_r($_SESSION['admin']);
}

function concatenation(){
    home();
    $nom = $_SESSION['admin']['nom'];
    $prenom = $_SESSION['admin']['prenom'];
    $age = $_SESSION['admin']['age'];
    $taille = $_SESSION['admin']['taille'];
    $classe = $_SESSION['admin']['type'];
    echo '<br>';
    echo "$prenom $nom";
    echo '<br>' ;
    echo "j'ai $age ans, je mesure $taille m et je fais partie des $classe de AFCI";
    echo '<br>';
    echo strtoupper($prenom) . ' ';
    echo strtoupper($nom);
    echo '<br>';
    echo "j'ai $age ans, je mesure $taille m et je fais partie des $classe de AFCI";
    echo '<br>';
    echo strtoupper($prenom) . ' ';
    echo strtoupper($nom);
    echo '<br>';
    echo str_replace(".",",","j'ai $age ans, je mesure $taille m et je fais partie des $classe de AFCI");
}

function boucle(){
    home();
    $nom = $_SESSION['admin']['nom'];
    $prenom = $_SESSION['admin']['prenom'];
    $age = $_SESSION['admin']['age'];
    $taille = $_SESSION['admin']['taille'];
    $classe = $_SESSION['admin']['type'];

    $k = 0;
    while ($k < 10) {
        echo '<br>' . "$prenom $nom" . '<br>' . "j'ai $age ans, je mesure $taille m et je fais partie des $classe de AFCI";
        $k++;
}}

function fonction(){
    home();
    foreach($_SESSION['admin'] as $clef => $valeur){
        echo " <br> Cette ligne correspond à la clé $clef et contient $valeur. <br> ";
    }
}

?>