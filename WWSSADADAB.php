<?PHP
$_head = '<TITLE>HORSE</TITLE';
$_content = '<img src="pics/HORSE.jpg" style="position: fixed; height: 100vh; width: 100vw;'
?>

<?PHP
	require_once('session.php');
	require_once('class.user.php');
	$user_state = new USER();
	
	if($user_state->is_loggedin()=="")
	{
		$user_state->redirect('index.php');
	}
?>

<!DOCTYPE HTML>
<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<TITLE>HORSE</TITLE>
</HEAD>
</BODY>
<img src="pics/HORSE.jpg" style="position: fixed; height: 100vh; width: 100vw;">
</BODY>
</HTML>