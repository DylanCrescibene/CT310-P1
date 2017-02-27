<?php
$pgTitle = "Log In";
include ('header.php');
?>

</head>

<?php include ('nav.php'); ?>

<!-- Start contents of main page here. -->

	
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<?php
function validateCredentials($user, $pass) {
	
	if($user=="dcresc" and md5($pass)=="482c811da5d5b4bc6d497ffa98491e38")	{
		return true;
	}
	else if($user=="bpowley" and md5($pass)=="aaa7d6afc57651e74da49e330a15041f") {
		return true;
	}
	else if($user=="ct310" and md5($pass)=="48f2f942692b08ec9de1ef9ada5230a3") {
		return true;
	}
	else {
		return false;
	}
}


if (isset($_POST['op'])) {
	$username     = $_POST['username'];
	$password  = $_POST['password'];
	
	date_default_timezone_set ( 'America/Denver' );
	
	if (validateCredentials($username, $password)){	
		$_SESSION["loggedIn"] = true;
		echo "Logged in";
	}
	else {
		$_SESSION["loggedIn"] = false;
		echo "Nah";
	}
}
else {
?>
	<div>
	   <h2 align="center">Please Log In</h2>
	   <p align="center">Enter your credentials below. </p>
	   <form method="post" action="login.php" align="center">
		  Username:    <input type="text" name="username"    size="30" align="center"><br/>
		  Password&nbsp;: <input type="password" name="password" size="30" align="center"><br/>
		 <input type="hidden" value="done" name="op">
		 <input type="submit" value="Send" align="center">
	   </form>
   </div>
<?php
}
?>
	
</div>	



<!-- End of contents -->
<?php include('footer.php'); ?>
