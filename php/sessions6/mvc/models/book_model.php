<?php
include 'connect.php';
class Book_Model 
{
	public function  __construct() 
	{	
	} 
	
	public function getListBooks() 
	{  
	    session_start();
		$email=$_SESSION['useremail'];
		//exit($email);
		$selstatus="SELECT priority FROM user WHERE email='$email'";
	//	var_dump($selstatus);
		$rs=mysql_query($selstatus);
		$ro=mysql_fetch_array($rs);
		switch ($ro['0']){
		case '1': $tt="status=1"; break;
		case '2': $tt="status=1 OR status=0"; break;
		case '3': $tt="status=0"; break;
		default: $tt="status=0"; break;
		}
		$getpriority="SELECT * FROM report WHERE $tt";
        $rs_pri=mysql_query($getpriority);
		$arr=array();
        while($row=mysql_fetch_array($rs_pri))
		{
		   $arr[]=$row;
		}
		return $arr;	
	} 
	
	/*public function getBook($id)
	{         $getpriority="SELECT * FROM report WHERE id='$id'";
			  $rs_pri=mysql_query($getpriority);
			  $row=mysql_fetch_array($rs_pri);
			  return $row;
    }  */
	
	
}	
?>