<style type="text/css">
	table,tr,th,td{
		border: 1px solid gray;
	}
</style>
<?php 
$product = array('A','B','C','D','E','F','G','H','H','k');
echo "<table>";
	$count = 0;
	for($i = 0; $i<=count($product); $i++){
		if($count%3 == 0){
			echo "<tr>";
		}
			echo "<td>";
			echo $product[$i];
			echo "</td>";
		if(($count+1)%3 == 0){
			echo "</tr>";
		}
		$count++;
	}
echo "</table>";

?>