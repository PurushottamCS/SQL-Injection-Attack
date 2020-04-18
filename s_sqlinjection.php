<?php

$db = new PDO('mysql:host=127.0.0.1;dbname=phpsearch', 'puru', 'puru');

if (isset($_POST['email'])) { 
	$email = $_POST['email'];

	$user = $db->prepare("SELECT * FROM users WHERE  email = :email");

	$user->execute([
		'email'=> $email,
	]);

	if ($user->rowCount()) {
	die ('Login Successful!!');
	}
	else{
		die ('Warning: Login Unsuccessful');
	}
}

?>

<!DOCTYPE html>

<html lang="en"> 
<head>

<meta charset="UTF-8"> <title>Welcome to Secured NetBanking</title>
<link rel="stylesheet" href="/styles.css">
</head> 
<body>

<div>
	<h1><center>Welcome To Secured NetBanking<center></h1>
</div>
<form action="s_sqlinjection.php" method="post" autocomplete="off" class="mainpage">
	<center>


 <div class="group">      
      <input type="text" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Name</label>
 </div>

 <div class="group">      
      <input type="password" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Password</label>
 </div>

 <div class="group">      
      <input type="number" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Mobile</label>
 </div>

 <div class="group">      
 	  <input type="text" name="email" id="email" required> 
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Email ID</label>
 </div>
 
 

 <input class='button' type="submit" value="Login">

</form>
</center>
</body>

</html>