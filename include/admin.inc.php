<h1>admin/ affichier tous les utilisateurs</h1>

<?php

$tbl = "select * from utilisateurs";
$querySelect = array();
$querySlt = new Config();
$querySelect = $querySlt->lister($tbl);
print_r($querySelect[0]['nom']);
/* echo "itùs begere"."<br>";
echo count($querySelect); 
echo "itùs bere"."<br>"; */
if (count($querySelect)){
  //  echo "itqsfsqfdffffff"."<br>";
//            $messagetb = "<ul>";
    $messagetb = "<table>";
    $messagetb .= "<tr>";
    $messagetb .= "<th>";
    $messagetb .= "NOM";
    $messagetb .= "</th>";
    
    $messagetb .= "<th>";
    $messagetb .= "PRENOM";
    $messagetb .= "</th>";
    
    $messagetb .= "<th>";
    $messagetb .= "E-mail";
    $messagetb .= "</th>";
    
    $messagetb .= "<th>";
    $messagetb .= "Modifier";
    $messagetb .= "</th>";
    
    $messagetb .= "<th>";
    $messagetb .= "Suppremer";
    $messagetb .= "</th>";
    
    $messagetb .= "</tr>";
    for ($i=0; $i <count($querySelect) ; $i++) { 
        
        $messagetb .= "<tr>";
        $messagetb .= "<td>";
        //echo $messagetb."I am here";
        //var_dump($querySelect[$i]);
        $messagetb .=$querySelect[$i]['nom'];
        $messagetb .="</td>";
        $messagetb .="<td>";
        $messagetb .=$querySelect[$i]['prenom'];
        $messagetb .="</td>";
        $messagetb .="<td>";
        $messagetb .=$querySelect[$i]['mail'];
        $messagetb .="</td>";
        $messagetb .="<td>";
        $messagetb .="<a href=\"index.php?page=edit&id=";
        $messagetb .=$querySelect[$i]['id_utilisateur'];
        $messagetb .="\" class='btn'>Modifier</a>";
        $messagetb .="</td>";   
          
        $messagetb .="<td><a href=\"index.php?page=supp&id=";
        $messagetb .=$querySelect[$i]['id_utilisateur'] ;
        $messagetb .="\" class=\"btn btn-supp\" onclick=\"return confirm('Etes vous certain de supprimer cet utilisateur ?')\">Supprimer</a></td>";         
      
        $messagetb .="</tr>";
    }
    
    $messagetb .= "</table>";
    //var_dump($messagetb);
    //echo "Finaly!!!!!!!!!!!!!";
    echo $messagetb;
}
    //      


?>