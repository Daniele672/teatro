<?php
	session_start();
	if (isset ($_POST ["logout"])) unset ($_SESSION ["active_login"]);
	if (!isset ($_SESSION ["active_login"])) header ("Location: login.php"); 
	$user = $_SESSION ["active_login"]; 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $posto = $_POST['posto'];
    
    $utente = [
      	"nome" => $_POST["nome"],
      	"cognome" => $_POST["cognome"]
    ];
    
    $posti = [
      	"Balconata" => 25,
      	"Loggione" => 50,
      	"Platea" => 100
    ];
            
	echo $utente["nome"];
    echo $utente["cognome"];
    echo $posti[$posto];
	}
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="style1.css">
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
</head>
<body>
  <form action="posto" method="POST" >
  <div class="signup-form">

      <h1>Inerici i tuoi dati</h1>
      <input type="nome" placeholder="Nome" class="txtb" name="nome">
      <input type="cognome" placeholder="cognome" class="txtb" name="cognome">
      <select name="posto">
      	<option value='1'>balconata</option>
        <option value='2'>loggione</option>
	    <option value='3'>platea</option>
      </select>
      <input type="submit" value="Prenota" class="signup-btn" name="submit">
    </div>
    </form>
  


</body>
</html>
