<h1>Update</h1>
<?php

//var_dump(isset($_POST['frmUpdate']));

if (isset($_POST['frmUpdate'])) {
   // $message = "Je viens du formulaire";

    $nom = htmlentities(trim($_POST['nom']));
    $prenom = htmlentities(trim($_POST['prenom']));
    $mail = htmlentities(trim($_POST['mail']));
    $password = htmlentities(trim($_POST['password']));
    $password1 = htmlentities(trim($_POST['password1']));
    $id = htmlentities(trim($_POST['id']));

//   var_dump($_POST['nom']);
//   var_dump($_POST['id']);

    $erreurs = array();

    if (mb_strlen($nom) === 0) {
        array_push($erreurs, "Il manque vore nom");
    };
    if (mb_strlen($prenom) === 0)
        array_push($erreurs, "Il manque vore prénom");
    if (mb_strlen($mail) === 0)
        array_push($erreurs, "Il manque vore e-mail");
        elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL))
        array_push($erreurs, "votre adress mail n'est pas conforme");
    if (mb_strlen($password) === 0 | mb_strlen($password1 === 0)) {

        array_push($erreurs, "Il manque vore password");
    }
    if ($password !== $password1) {
        // password_verify($password1, $password_hash);
        array_push($erreurs, "Ce ne sont pas le meme password, input again");
    }
    if (count($erreurs)) {

        $messageErreur = "<ul>";
        for ($i = 0; $i < count($erreurs); $i++) {
            $messageErreur .= "<li>";
            $messageErreur .= $erreurs[$i];
            $messageErreur .= "</li>";
        }
        $messageErreur .= "</ul>";
        echo $messageErreur;
        include './includes/frmInscription.php';
    } else {


        $password = password_hash($password, PASSWORD_DEFAULT);
       // $requete = "INSERT INTO utilisateurs (id_utilisateur,nom,prenom,mail,password) VALUES(NULL,'$nom','$prenom','$mail','$password');";
      /*  $requete = "UPDATE utilisateurs set nom='$nom', prenom ='$prenom', mail='$mail', password ='$password'
            where id_utilisateur = '$id';";
           
        
        $sqlUpdate = new Sql();
        $sqlUpdate->udt($requete); */
        $updateUtilisateur = new Utilisateur();
        $updateUtilisateur->modifierUtilisateur($nom, $prenom, $mail, $password,$id);
        displayMessage("update ok!");
    }


} else {

    //var_dump(($_POST['frmUpdate']));

    // $nom = $prenom = $mail = "";
     include './includes/accueil.php';
    //echo $message;
}

//   displayMessage("!");
?>