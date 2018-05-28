<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <title>Forum</title>
</head>
<body>
<div class="jumbotron jumbotron-fluid">
<div class="container">
    <h1 class="display-4 col-md-10 col-md-offset-1">Forum</h1>
    <form class="form-inline col-md-6 col-md-offset-3" action="index.php" method="post">
    <div class="form-group">
        <label for="article"><strong>Article</strong></label>
        <textarea type="text" name="article" class="form-control" id="article" required></textarea>
     </div>


    <button class="btn btn-primary" type="submit" >Valider</button>
    </form>
</div>
</div>





<?php
//on require le controller, car index.php
//a besoin des fonctions du controller pour fonctionner
require('controller.php');

//si le $_POST['article'] existe, on appelle la fonction
//addArticle() du controller
if(isset($_POST['article']) && $_POST['article'] !== null) {
    addArticle($_POST['article']);
};

?>



</body>
</html>




