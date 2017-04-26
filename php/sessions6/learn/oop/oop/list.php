<a href="?action=add">Add new member</a>
<br/>
<?php
require_once 'user.php';
$user = new User();
$allUsers = $user->getAllMembers();

foreach($allUsers as $allUser):
	echo $allUser['id'].' '.$allUser['name'].' '
		.$allUser['username'].' '.$allUser['password'].'<br/>';
endforeach;
