<?php

include_once("user1.php");
$id=$_POST['id'];

    $connec = new PDO("mysql:dbname=user", 'root', 'azerty');
    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $request = $connec->prepare("SELECT * FROM user where id=$id");

    $request->execute();
    


?>