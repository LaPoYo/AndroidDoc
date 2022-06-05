<?php
include "connexion.php";
header ("content-type: application/json; charset=utf-8");
try {
  
    $req = $conn->prepare("select * from praticien");
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
