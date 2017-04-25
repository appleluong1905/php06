<?php
include "models/report_model.php"; 
class Report_Controller 
{
	public $model; 
	public $action = "lists";
    public function  __construct() 
    {
		$this->model = new Report_Model();
		if(isset($_GET["action"])) $this->action = $_GET["action"];
		$this->{$this->action}();
    }

	public function add() 
	{
		if(isset($_POST["btn_submit"])) {
			$title = $_POST["title"];
			$content = $_POST["content"];
			$this->model->addReport($title, $content); 
			include "views/success.php"; 
		} else
			include "views/addreport.php"; 
	}

	public function lists() 
	{
		$listReports = $this->model->getListReports(); 
		include "views/reportlist.php";
	}

	public function view($id) 
	{  $listReports = $this->model->getListReports();
	   $buffer = array_slice($listReports,$id,1);
	   $reportView = array();
	   foreach ($buffer as $key =>$value)
	   {
	     $reportView[]=$value['title'];
		 $reportView[]=$value['content'];
		 $reportView[]=$value['status'];
	   }
	   include "views/reportview.php"; 
	}
}
?>