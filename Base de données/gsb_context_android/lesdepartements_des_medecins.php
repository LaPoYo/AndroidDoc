<?php
include "connexion.php";
header ("content-type: application/json; charset=utf-8");
try {
    $sql = "SELECT DISTINCT DEPARTEMENT_CODE,DEPARTEMENT_NOM FROM praticien, departement WHERE PRA_CP LIKE CONCAT( DEPARTEMENT_CODE, '%%%' );";
    $req = $conn->prepare($sql);
    $req->execute();
  
    while ($ligne = $req->fetch(PDO::FETCH_ASSOC)){
        $resultat[]=$ligne;
    }
    print(json_encode($resultat));

} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage();
    die();
}

?>