<?php
require_once('response.php');
require_once('response_fail.php');
require_once('response_success.php');



/*$Content=$_POST['content'];
$Title=$_POST['title'];


// function article() {

// $name=$_POST['article'];

//Ecriture dans la base de donnée
$connec = new PDO("mysql:dbname=Blog", 'root', 'azerty123');
$connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$request = $connec->prepare("INSERT INTO article (content, title)
                             VALUES ('$Content', '$Title'); ");
$request->execute();
//return $request->fetchAll(PDO::FETCH_ASSOC);
//Recuperation de la base de do*/


/*creation d'un objet*/
$response=new Responsefail(true,"Article  pas ok",null);
echo json_encode($response);

/*if (false){
    if(!empty($POST)){

        extract($POSTE);
        $title=htmlspecialchars($title);
        $content=htmlspecialchars($content);

if($title !=''&& $content !=''){
    /*creation dun nouvel objet Article
    $article=new Article();
}

      

    }
}
$response=new responseSucess(true."Article ok",null);
echo json_encode($response)*/
