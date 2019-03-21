<?
$date_create=date("Y-m-d H:i:s");

// function blog() {

// $name=$_POST['blog'];

//Ecriture dans la base de donnée
$connec = new PDO("mysql:dbname=Blog", 'root', 'azerty123');
$connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$request = $connec->prepare("INSERT INTO commentaire (date_create, comment)
                             VALUES ('$date_create', '$comment'); ");
$request->execute();
//return $request->fetchAll(PDO::FETCH_ASSOC);


//Recuperation de la base de donnée


// connexion à la base de données

function getAllComments(){

$connec = new PDO("mysql:dbname=Blog", 'root', 'azerty123');
$connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// la requete pour recuperer les commentaires
$request = $connec->prepare("SELECT * FROM commentaire" );
$request->execute();


return $request->fetchAll(PDO::FETCH_ASSOC);
}

$article=getAllarticle();
//var_dump($commentaires);

//pour afficher toute la base donné
// if (isset($_POST['comment']))
// {
// //
// foreach($comments as $key => $comment):    
//     echo $comment['comment'].'<br>';
//    echo $date_create;
// endforeach;
// }

if (isset($_POST['comment']))
{
//    //  //  echo ('ok').'<br>';
    echo $date_create.'<br>';
//    //    //echo $id.'<br>';
  echo $comment.'<br>';
}