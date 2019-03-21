<?php
class ResponseSucess extends Response
{
public $objet;

function __construct($sucess,$message,$objet){
    parent::__construct($sucess,$message);
/*$this->sucess=$sucess;
$this->message=$message;*/
$this->objet=$message;
}
}
?>