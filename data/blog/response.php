<?php
class Response

{
	
	public $sucess;
    public $message;
    
    function __construct($sucess,$message){
    $this->sucess=$sucess;
	$this->message=$message;	
	}
}

?>
