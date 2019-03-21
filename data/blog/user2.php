<?php/*
require_once('user1.php');
require_once('user.add.php');
require_once('');



user =new user();
user->name = $_POST['name'];
user->surname = $_POST['surname'];
user->email=$_POST['email'];



$user=new user();
$user->name=$name;
$user->surname=$surname;
$user->email=$email;
var_dump($user);


//recuper les user
$dbh=$getDBH('DNS','USER','PASSWORD');

$req=$dbh->prepare('SELECT * FROM user');
$req->setFetchMode(PDO::FETCH_class,user);
$req->execute();
$article = $req->fetchAll();

foreach ($users as $user)
{
    $users->$user->getString();

}

//charger la vue
require_once('user.php');*/