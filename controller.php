<?php
//on require le model, car controller.php
//a besoin des fonctions du model pour fonctionner
require('model.php');


//la fonction addArticle() appele la fonction
//postArticle() du model
function addArticle($article){
$article =  postArticle($article);
//si la fonction postArticle ne fonctionne pas
//c'est à dire que les articles n'ont pas pu s'insérer
//une erreur est renvoyée
    if ($todo === false) {
        die('Impossible d\'ajouter le todo !');
    }
}