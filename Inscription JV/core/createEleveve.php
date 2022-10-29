<?php 
    require_once("../config/dbConfig.php");

    extract($_POST);

    $nom = (isset($nom) && !empty($nom)) ? $nom : "";
    $prenom = (isset($prenom) &&!empty($prenom))? $prenom: "";
    $telephone = (isset($telephone) &&!empty($telephone))? $telephone: "";
    $mail = (isset($mail) &&!empty($mail))? $mail: "";
    $salle = (isset($salle) &&!empty($salle))? $salle: "";
    $jeux = (isset($jeux) &&!empty($jeux))? $jeux : "";

    $query = "insert into eleve (nom,prenom,telephone,mail,salle,jeux) values (:nom,:prenom,:telephone,:mail,:salle,:jeux)";
    $prepare = $conn->prepare($query);
    $prepare->bindValue(":nom", $nom);
    $prepare->bindValue(":prenom", $prenom);
    $prepare->bindValue(":telephone", $telephone);
    $prepare->bindValue(":mail", $mail);
    $prepare->bindValue(":salle", $salle);
    $prepare->bindValue(":jeux", $jeux);

    $result = $prepare->execute();

    if($result){
        $mess='<b class="succes">Insertion réussie !</b>';  
        header("Location: ../Index.php?message=$mess");
    }else
    {
        $mess="<b class='erreur'>Impossible d'inserer !</b>";
        header("Location: ../Index.php?message=$mess");
    }
?>