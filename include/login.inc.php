
<h1>login</h1>

<?php

if (isset($_POST['frmLogin'])) {

    $message = "Je viens du submit";

    $email = htmlentities(trim($_POST['email']));
    $password = htmlentities(trim($_POST['password']));

    $erreurs = array();

    if (mb_strlen($email) === 0) {
        array_push($erreurs, "Il manque vore E-mail");
    };

    if (mb_strlen($password) === 0) {
        array_push($erreurs, "Il manque vore mot de pass");
    };

    if (count($erreurs)) {
        $messageErreur = "<ul>";
        for ($i = 0; $i < count($erreurs); $i++) {
            $messageErreur .= "<li>";
            $messageErreur .= $erreurs[$i];
            $messageErreur .= "</li>";
        }
        $messageErreur .= "</ul>";
        echo $messageErreur;
        include './includes/frmLogin.php';
    } else {
        $requeteLogin = " SELECT * FROM utilisateurs WHERE mail='$email';";
        $sqlLogin = new Sql();
        //var_dump($requeteLogin);
        $resultatLogin = $sqlLogin->slt($requeteLogin);
        if (count($resultatLogin)>0) {
            //Traitement pur vérifier le mot de passe
            $resultatLoginPassword = $resultatLogin[0]['password'];
            if (password_verify($password,$resultatLoginPassword)) {
                $message = "vous etes connecté";
                $_SESSION['loginUser']=true;
                
            }else {
                $message = "Erreur d'authentication";
                $_SESSION = false;
            }
        } else {
            $message= "Votre adress n'est pas dans la base";
        }
        
        /*  $_SESSION['loginUser'] = $email;
        $toEmail = $email;
        $fromEmail = 'contact@ceppic-php-fil-rouge.fr';
        $sujetEmail = 'Login Sucess!';
        $messageEmail = $email.'Vous étes bien connecté !'; 
        
        sendEmail($toEmail,$fromEmail,$sujetEmail,$messageEmail);*/
        
        // header('location: index.php?page=membre');
        echo $message;
        echo "you will be redirected to accueil in <span id=seconds>5</span>";
 echo " 
 <script>
 var seconds = 5;
 setInterval(
   function(){
     if (seconds <= 1) {
       location.replace('$url?page=acceuil');
     }
     else {
       document.getElementById('seconds').innerHTML = --seconds;
     }
   },
   1000
 );
</script>";
        //var_dump($_SERVER[HTTP_ORIGIN]);
        $url = $_SERVER['HTTP_ORIGIN'] . dirname($_SERVER['REQUEST_URI']) . "/";
        
        echo redirection($url, 55000);
        echo "<p><a href=\"$url\">Revenir à la page d'accueil</a></p>";
        //echo '<script type="text/javascript">document.location.href="index.php?page=accueil";</script>';
        //echo "<script>location.replace('$url')</script>";
        
        //echo "<script>setTimeout(\"location.href = '$url';\", 2000);</script>";
        //echo "<p><a href=\"$url\">Revenir à la page d'accueil</a></p>";
        
          
    }
}else{
    
    $username ="";
    include './includes/frmLogin.php';
    
}
/* 
else{
}
 */






?>