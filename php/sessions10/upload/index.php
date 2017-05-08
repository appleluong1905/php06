<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Image Upload</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<h1 style="margin-bottom: 0px">Submit an image</h1>
	<form action="resize_action.php" method="post" enctype="multipart/form-data" name="image_upload_form" id="image_upload_form" style="margin-bottom:0px;">
	<label>Image file, maximum 4MB. it can be jpg, gif,  png:</label><br />
	    <input name="image_upload_box" type="file" id="image_upload_box" size="40" />
	           
	    <label>Scale down image? (2592 x 1944 px max):</label>
	    <br />
	    <input name="max_width_box" type="text" id="max_width_box" value="1024" size="4">
	      x      
	    <input name="max_height_box" type="text" id="max_height_box" value="768" size="4">
	      px.
	    <br />
	    <br />
		<input name="submitted_form" type="hidden" id="submitted_form" value="image_upload_form" />
		<input type="submit" name="submit" value="Upload image" />  
	</form>
</body>
</html>


