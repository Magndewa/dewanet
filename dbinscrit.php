<?php 
   
    $serveur="localhost";
    $login = "root";
    $pass = "";

    try {
        $connexion = new PDO("mysql:host=$serveur; dbname=fatimatou", $login, $pass);
        $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connexion reussie <br>";
    } catch (PDOException $e) {
        echo "Echec de Connexion <br>" .$e->getMessage();
    }

    if (isset($_POST['Name'])&& 
        isset($_POST['Email'])&&
        isset($_POST['phone'])&&
        isset($_POST['Subject'])&&
        isset($_POST['Level'])){
            $insertion = $connexion->prepare('INSERT INTO inscrit VALUES(NULL, 
            :myname, :email, :phone, :course, :niveau )');
            $insertion->bindValue(':myname',$_POST['Name']);
            $insertion->bindValue(':email',$_POST['Email']);
            $insertion->bindValue(':phone',$_POST['phone']);
            $insertion->bindValue(':course',$_POST['Subject']);
            $insertion->bindValue(':niveau',$_POST['Level']); 
            $verification = $insertion -> execute();
            if ($verification) {
                include "index.php";
            }else {
                echo "Echec de d'insertion <br>";
            }
            
        
    }else {
        echo "Error";
    }
?>