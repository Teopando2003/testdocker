<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="generator" content="AlterVista - Editor HTML"/>
  <title>Registrazione</title>
</head>
<body>
<?php 
$registerbutton = $_POST['registrazione']; 
 $mail="";
 $password="";
if (isset($registerbutton)) {
    $mail= $_POST['mail'];
    $password= $_POST['password'];

$array = Array (
        "mail"=> $mail,
        "password"=> password_hash($password, PASSWORD_BCRYPT)
  );
  
// encode array to json
$file = file_get_contents("utenti.json");
$data = json_decode($file, true);
$data[] = $array;
$bytes = file_put_contents("utenti.json", json_encode($data)); 
}
?>
<form class="box" method="post">
<h1>Registrati</h1>
<input type="text" name="mail" placeholder="Email">
<input type="Password" name="password" placeholder="Password">
<input type="submit" name="registrazione" value="Registrati">
<p> Se hai già un account Accedi</p>
<button type="button" onclick="location.href='accedi.php'">Accedi</button>
</form>
</body>
</html>