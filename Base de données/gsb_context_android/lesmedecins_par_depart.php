<?php
include "connexion.php";
header ("content-type: application/json; charset=utf-8");
try {
  	//$libelledepartement = urlencode($_GET['libelledepartement']);              ne fonctionne pas car perturbe l'accentuation
    $libelledepartement =$_GET['libelledepartement']; 
    //var_dump($libelledepartement)      ;
	
    $sql = "SELECT DISTINCT PRA_NUM,PRA_NOM,PRA_PRENOM,PRA_ADRESSE,PRA_VILLE,PRA_CP,PRA_TELEPHONE,PRA_COEFNOTORIETE,TYP_CODE,departement_code,departement_nom,NUM_REGION FROM praticien, departement WHERE PRA_CP LIKE CONCAT( departement_code, '%%%' ) and departement_nom='".$libelledepartement."';";


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
