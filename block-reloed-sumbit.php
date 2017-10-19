<?php
	session_start();
	
	$token  = isset($_POST['token']) ? $_POST['token'] : ''; 
	$save   = isset($_SESSION['token']) ? $_SESSION['token'] : '';
	unset($_SESSION['token']);
	if ($token ==='') echo "error";
	
	$msg = ($token === $save) ? "sucess" : "it's reload submit.";
	echo $msg;
?>
<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript"></script>
		<script>
			$( document ).ready(function() {
			});
		</script>
	</head>
	<body>
		<form name="" method="POST">
			<input type="hidden" name="token" value="<?php $token = md5(uniqid(rand(), true)); $_SESSION['token'] = $token; echo $token; ?>">
			<input type="submit" value="SUBMIT">
		</form>
	</body>
</html> 		
