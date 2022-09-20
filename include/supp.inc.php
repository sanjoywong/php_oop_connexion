<?php
if (!isset($_GET['id']))
{
    header('Location:./index.php');
}
$idUser = $_GET['id'];


$requeteSupp = new Utilisateur();
$requeteSupp->supprimerUtilisateur($idUser);

header('Location: ./index.php?page=admin');