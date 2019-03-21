<?php
$id=$_POST['id'];
$Name=$_POST['nom'];
$Surname=$_POST['surname'];
$Email=$_POST['email'];

// function user() {

// $name=$_POST['user'];

//****************************************************Ecriture dans la base de donnée//************************************ */
$connec = new PDO("mysql:dbname=user", 'root', 'azerty');
$connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$request = $connec->prepare("UPDATE user set nom='$Name' ,surname='$surname',email='$email'
                             WHERE id='$id'");

$request->execute();

?>