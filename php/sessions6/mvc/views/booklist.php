<html> 
<head><title>Book List</title></head> 
<body> 
    <table> 
        <tr> 
			<td>Title</td> 
			<td>Content</td> 
			<td>Status</td> 
			</tr> 
			
			
<?php  
	foreach ($listBooks as $key => $book) 

//	 while($view=mysql_fetch_array($listBooks))
	{ // echo $key;
	   echo '<tr> 
			<td><a href="index.php?controller=book&action=view&id='.$key.'">'.$book["title"].'</a></td>
			<td>'.$book["content"].'</td>
	    	<td>'.$book["status"].'</td> 
			 </tr>'; 
	}
?> 
			<tr> 
				<td><a href="views/add.php" >AddNew</a></td> 
			</tr> 


    </table> 
</body> 
</html> 
