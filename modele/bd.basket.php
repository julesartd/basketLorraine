<?php

include "bd_connexion.php";


function getArbitres() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select num_arbitre,nom_arbitre, prenom_arbitre, adresse_arbitre, cp_arbitre, 
        ville_arbitre, date_naiss_arbitre, tel_fixe_arbitre,tel_port_arbitre, mail_arbitre, nom_club, 
        nom_equipe from arbitre a
        inner join equipe e on a.num_equipe=e.num_equipe
        inner join club c on a.num_club=c.num_club ");
        $req->execute();

        $resultat = $req->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


function updateArbitres($num,$nom,$prenom,$adresse,$cp,$ville,$naiss,$telFix,$telPort,$mail,$club,$equipe) {
   
    try {
        $cnx = connexionPDO();
        $prep = $cnx->prepare("UPDATE arbitre SET nom_arbitre=:nomArb, prenom_arbitre=:prenomArb, adresse_arbitre=:adrArb, 
        cp_arbitre=:cpArb, ville_arbitre=:villeArb, date_naiss_arbitre=:naissArb, tel_fixe_arbitre=:telFixArb,
        tel_port_arbitre=:telPortArb, mail_arbitre=:mailArb, num_club=:numClub, num_equipe=:numEqp
        WHERE num_arbitre=:numArb");
       
        $prep->bindValue('nomArb',$nom);
        $prep->bindValue('prenomArb',$prenom);
        $prep->bindValue('adrArb',$adresse);
        $prep->bindValue('cpArb',$cp);
        $prep->bindValue('villeArb',$ville);
        $prep->bindValue('naissArb',$naiss);
        $prep->bindValue('telFixArb',$telFix);
        $prep->bindValue('telPortArb',$telPort);
        $prep->bindValue('mailArb',$mail);
        $prep->bindValue('numClub',$club);
        $prep->bindValue('numEqp',$equipe);
        $prep->bindValue('numArb',$num);

        $prep->execute();

     

    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
  
}

function getArbitreById($id) {
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from arbitre a 
        inner join equipe e on a.num_equipe=e.num_equipe
        inner join club c on a.num_club=c.num_club  
        where num_arbitre=:id");
        $req->bindValue(':id', $id);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


function deleteArbitre($id){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("delete from arbitre where num_arbitre=:id");
        $req->bindValue(':id', $id);

        $req->execute();

        

    } catch (PDOException $e) {
        echo " <div style='left:0;' id='msgErr' class='alert alert-danger mx-auto' role='alert'>
            Impossible de supprimer cet arbitre
      </div>";
        die();
    }
    
}

function deleteDeplacement($id){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("delete from deplacement where num_arbitre=:id");
        $req->bindValue(':id', $id);

        $req->execute();

        

    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    
}


function addArbitre($num,$nom,$prenom,$adresse,$cp,$ville,$naiss,$telFix,$telPort,$mail,$club,$equipe){
    try {
        
        $cnx = connexionPDO();
        $req = $cnx->prepare("insert into arbitre values (null, :nom, :prenom, :adresse, :cp, :ville, :naiss, :telFix, :telPort, :mail, 
        :club, :equipe)");
        $req->bindValue(':nom', $nom );
        $req->bindValue(':prenom', $prenom );
        $req->bindValue(':adresse', $adresse );
        $req->bindValue(':cp', $cp );
        $req->bindValue(':ville', $ville );
        $req->bindValue(':naiss', $naiss);
        $req->bindValue(':telFix', $telFix );
        $req->bindValue(':telPort', $telPort);
        $req->bindValue(':mail', $mail );
        $req->bindValue(':club', $club );
        $req->bindValue(':equipe', $equipe );

        $req->execute();

        

    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    
}

function getDateMatch(){
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select date_match from matchb");
    
      
        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
    
}


function getMatchs($date){
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select num_match, adresse_salle, date_match, heure_match, 
        e1.nom_equipe as equipe1, e2.nom_equipe as equipe2, a1.nom_arbitre as arbitreP, 
        a2.nom_arbitre as arbitreS, montant_deplt_p, montant_deplt_s from matchb 
        inner join arbitre a1 on matchb.num_arbitre_p=a1.num_arbitre 
        inner join arbitre a2 on matchb.num_arbitre_s=a2.num_arbitre
        inner join equipe e1 on matchb.num_equipe_1=e1.num_equipe 
        inner join equipe e2 on matchb.num_equipe_2=e2.num_equipe 
        inner join salle on matchb.num_salle=salle.num_salle where date_match=:date");
        $req->bindValue(':date', $date );
      
        $req->execute();

        $resultat = $req->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
    
}

function getMatchsById($id){
    

    try {
        $cnx = connexionPDO();
        
        $req = $cnx->prepare("select num_match, adresse_salle, date_match, heure_match, 
        e1.nom_equipe as equipe1, e2.nom_equipe as equipe2, a1.nom_arbitre as arbitreP, 
        a2.nom_arbitre as arbitreS, montant_deplt_p, montant_deplt_s from matchb
        inner join arbitre a1 on matchb.num_arbitre_p=a1.num_arbitre 
        inner join arbitre a2 on matchb.num_arbitre_s=a2.num_arbitre 
        inner join equipe e1 on matchb.num_equipe_1=e1.num_equipe inner join equipe e2 on matchb.num_equipe_2=e2.num_equipe 
        inner join salle on matchb.num_salle=salle.num_salle where num_match=:id");
        $req->bindValue(':id', $id );
      
        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
    
}

function getClub() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from club where num_club ");
        $req->execute();

        $resultat = $req->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


function getEquipe() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from equipe");
        $req->execute();

        $resultat = $req->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}



?>
