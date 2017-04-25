<?php
include "models/register_model.php"; 
class Register_Controller 
{
	public $model; 
	public $action = "lists";
    public function  __construct($act) 
    {
    	 $this->action = $act; 
       $this->model = new Register_Model();
    } 

	public function invoke($act) 
	{ 
		switch($act)
		{
		   case "view" : {
		       $id = $_GET["action"] || 0; 
		       $this->view($id);
		   } break;  
		   case "add" : {
		       $this->add($id);
		   } break;  
		   case "lists": 
		          $this->lists();break; 
		    default: 
		          $this->lists();
		} 
	} 

	public function lists() 
	{
		$listRegisters = $this->model->getListRegisters(); 
		include "views/registerlist.php";
	} 

	public function view($id) 
	{ 
	   $registerView = $this->model->getRegister($id); 
	   include "views/registerview.php"; 
	}
	public function add() 
	{ 
		if(isset($_POST["btn_submit"])) {
			$f_name = $_POST["f_name"];
			$l_name = $_POST["l_name"];
			$email	= $_POST["email"];
			$pass	= $_POST["pass"];
			$this->model->addNewUser($f_name, $l_name, $email, $pass); 
			include "views/success.php"; 
		} else
			include "views/register.php"; 
	}
}
?>
