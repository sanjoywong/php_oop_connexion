<?php
if (!isset($_GET['id'])) {
     header('Location:./index.php');
}
//var_dump($_GET['id']);

//$query = new Sql();
$requete = 'SELECT * FROM utilisateurs where id_utilisateur = '.$_GET['id'] ;
//echo $requete;
// $query->prepare($requeteUser);

$querySelect = new Sql();
$users = $querySelect->slt($requete);

dump($users);
?>
<form action="index.php?page=update" method="post">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" value="<?=$users[0]['nom']?>" />
    </div>
    <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" value="<?=$users[0]['prenom'] ?>" />
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="text" id="mail" name="mail" value="<?=$users[0]['mail'] ?>" />
    </div>
    <div>
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" />
    </div>
    <div>
        <label for="password1">Mot de passe (vérification) :</label>
        <input type="password" id="password1" name="password1" />
    </div>
    <div>
        <input type="reset" value="Effacer" />
        <input type="submit" value="Update" />
    </div>
    <input type="hidden" name="id" id="id" value=<?=$users[0]['id_utilisateur']?>>
    <input type="hidden" name="frmUpdate" />
</form>