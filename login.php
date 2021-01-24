<?php
	session_start ();
	if (isset ($_SESSION ["active_login"])) header ("Location:accettazione.php");
	if (isset ($_POST ["submit"])) {
    
    $utente = [
    	"user" => $_POST ["username"],
        "psw" => $_POST ["password"]
    ];
	if ($utente["user"] == "Daniele" && $utente["psw"] == "1234") { 
	$_SESSION ["active_login"] = $utente["user"]; 
    header ("Location:accettazione.php"); 
} else $error = "Riprovare le credienziali sono errate!";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
  </head>
  <body>
    <div class="signup-form">
      <form class="" action="#" method="POST">
        <h1>Log in</h1>
        <input type="name" placeholder="Username" class="txtb" name="nome">
        <input type="password" placeholder="Password" class="txtb" name="password">
        <input type="submit" value="Accedi" class="signup-btn" name="submit">
      </form>
    </div>
  </body>
</html>
