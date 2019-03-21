<?php
/*echo('ok');*/


//Recupération depuis la base de donnée
function getAllArticle() {
    $connec = new PDO("mysql:dbname=Article", 'root', 'azerty');
    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $request = $connec->prepare("SELECT * FROM articles WHERE LIMIT 3");
    $request->execute();
 return $request->fetch(PDO::FETCH_ASSOC);
 }

 $article = getAllArticle();
 echo (json_encode($article));


 /*Recupération depuis la base de donnée
function getAlluser() {
    $connec = new PDO("mysql:dbname=user", 'root', 'azerty');
    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $request = $connec->prepare("SELECT * FROM user;");
    $request->execute();
 return $request->fetchAll(PDO::FETCH_ASSOC);
 }

 $comment = getAlluser();*/
