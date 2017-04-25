<?php
include '../models/user_model.php';
/*session_start();
$email=$_SESSION['useremail'];
//exit($email);


exit($report->getIdpriority($email));
exit($selstatus);

if ($selstatus=3) $status=0;
else $status=1;
exit($status);*/
$report= new User_Model();
if(isset($_GET['title'])){
$title=$_GET['title'];
$content=$_GET['content'];

if($report->insert($title,$content)==true){
	exit("Your report had been added");
}

}

?>
<html>
<body>
	<form action="add.php" method="get">
	<table>
	
	<tr>
		<td> Title</td>
		<td> <input type="text" name="title"></td>
	</tr>
	
	<tr>
		<td> Content</td>
		<td> <input type="textarea" name="content"></td>
	</tr>	
	
    <tr>
		<td> </td>
		<td> <input type="submit" name="add"></td>
	</tr>
	</table>
	</form>	

</body>
</html>