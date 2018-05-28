<?php
//fonction dbConnect(), pour lier le model à la base de données
//grâce à l'objet PDO
function dbConnect() {
    try {
//'root' : login phpMyAdmin
//'' : mot de passe phpMyAdmin
        $db = new PDO('mysql:host=localhost;dbname=blogmai;charset=utf8', 'sam', 'sam');
        return $db;
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
}

//postArticle() permet d'insérer des articles dans la base de données
function postArticle($article){
//connection à nouveau à la base de données car on fait
//une requète INSERT
    $bdd=dbConnect();
//-> prepare car la requète INSERT est exécutée plusieurs fois. 
//Elle est executée plusieurs fois car le paramêtre article est variable
//Dès que le paramètre article change de valeur, la requète INSERT est faite
    $req = $bdd->prepare('INSERT INTO maTable (maColonne) VALUES (:article)');
    $req->execute(array(
        'article' => $article
    ));
}

