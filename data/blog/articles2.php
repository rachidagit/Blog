<?php
require_once('articles1.php');
require_once('articles.add.php');

article= new Article;
article->title = $_post['title'];
article->content = $_post['content'];




$article=new Article;
$article->title=$title;
$article->content=$content;

var_dump($article);


//recuper les article
$dbh=$getDBH('DNS','USER','PASSWORD');

$req=$dbh->prepare('SELECT * FROM articles');
$req->setFetchMode(PDO::FETCH_class,article);
$req->execute();
$article = $req->fetchAll();

foreach ($articles as $article)
{
    $articles->$article->getString();

}

//charger la vue
require_once('article.php');