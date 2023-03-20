<!-- traiter les données envoyées via le formulaire -->

<?php

session_start();

if (empty($_POST['email']) || empty($_POST['password'])) {        // Vérifier si l'email et le mot de passe ont été saisis  

    echo "le pseudo et le mot de passe doivent être forcement saisis";      // Afficher un message d'erreur si le champ email ou le champ mot de passe est vide

} else {
    
    $conn = mysqli_connect("localhost", "root", "root", "BuyECar");             // On se connecte à MySQL    
    $select = mysqli_select_db($conn,"BuyECar");                               // On selectionne la base de données 
    $email = $_POST['email'];                                                 // Récupérer les valeurs saisies dans les inputs : email et mot de passe
    $motDePasse = $_POST['password'];

    $rechercher = mysqli_query($conn,' SELECT motDePasse, email FROM Visiteurs WHERE email = email')       // Rechercher le visiteur dans la base de données
        or die (mysqli_error ($conn));            // Afficher un message d'erreur si la requête échoue
    $d = mysqli_fetch_assoc($rechercher);           // Récupérer la prochaine ligne de résultats d'une requête MySQL et la stocker dans la variable $d
    
    if (!empty($d) && $d['motDePasse'] == md5($motDePasse)) {  // Vérifier si le visiteur existe et si le mot de passe saisi correspond au mot de passe stocké dans la base de données

        $_SESSION['email'] = $email;                            // Ouvrir une session et stocker l'email et le mot de passe du visiteur
        $_SESSION['motDePasse'] = $d['motDePasse'];
        echo '<p>Bienvenue ' . $_SESSION['email'] . ', vous êtes maintenant connecté!</p>';       // Afficher un message de bienvenue avec l'email du visiteur
    } else {
        echo "Desolé! connexion echoué";                // Afficher un message d'erreur si la connexion a échoué
    }
}

?>