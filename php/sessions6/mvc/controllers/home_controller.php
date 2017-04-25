<?php
#include "models/home_model.php"; 
class Home_Controller 
{
	public $model; 
	public $action = "index";
	public function  __construct() 
	{
		if(isset($_GET["action"])) $this->action = $_GET["action"];
		$this->{$this->action}();
	}

	public function index() 
	{
		include "views/home.php";
	} 
}
?>
