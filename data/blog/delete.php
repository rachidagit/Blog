<?php

$Name=$_POST['nom'];
$Surname=$_POST['surname'];
$Email=$_POST['email'];

// function user() {

// $name=$_POST['user'];

//****************************************************Ecriture dans la base de donnée//************************************ */
$connec = new PDO("mysql:dbname=user", 'root', 'azerty');
$connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$request = $connec->prepare("INSERT INTO user (nom, surname,email)
                             VALUES ('$Name', '$Surname','$Email');");

$request->execute();

echo $connec->deleteId();

function getAlluser(){
    $connec = new PDO("mysql:dbname=user", 'root', 'azerty');
    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $request = $connec->prepare("SELECT * FROM user;");
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
    
    }
    $user=getAlluser();


?>