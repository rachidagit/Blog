<?php
class Responsefail extends Response
{
    
    function __construct($sucess,$message){
        parent::__construct($sucess,$message);

/*$this->_sucess=$sucess;
$this->_message=$message;*/
}
}
?>