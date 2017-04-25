<table>
	<tr>
		<th>ID</th>
		<th>Title</th>
		<th>Content</th>
		<th>Authors</th>
	</tr>
<?php
while($row = mysqli_fetch_array($listReports))
{
	//echo "<pre>";	var_dump($row);	exit();
?>
	<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['title']; ?></td>
		<td><?php echo $row['content']; ?></td>
		<td><?php echo $row['email']; ?></td>
	</tr>
<?php	
}
?>
</table>