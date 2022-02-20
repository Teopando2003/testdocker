<?php
echo "ciao";
  include("Account/CheckConn.php");
  $num = explode(".", ($_SERVER["SERVER_ADDR"]));
  if($num[3] == "3"){ //APP1
    /*$query="INSERT INTO request(appname, indirizzo, tempo) VALUES('app1','".$_SERVER["SERVER_ADDR"]."','".date("Y-m-d H:i:s")."')";
    if (mysqli_query($con,$query)) {
    } else {
      echo mysqli_error($con);
      echo "Errore inserimento della richiesta";
    }*/
    echo "cia1o";
    include('registrazione.php');
  }else{  //APP2
    /*$query="INSERT INTO request(appname, indirizzo, tempo) VALUES('app2','".$_SERVER["SERVER_ADDR"]."','".date("Y-m-d H:i:s")."')";
    if (mysqli_query($con,$query)) { 
    } else {
      echo mysqli_error($con);
      echo "Errore inserimento della richiesta"; 
    }*/
    echo "ciasa1o";
  }
  /*
    $query="select * from request;";
    $result = mysqli_query($con,$query);
    if (mysqli_num_rows($result) > 0) {
      for($i=0;$i<mysqli_num_rows($result);$i++){
        $row = mysqli_fetch_assoc($result);
        echo " - " . $row["appname"] . " - " . $row["indirizzo"] . " - " . $row["tempo"] . "<br/>";
      }
    } else {
      echo "Nessuna richiesta salvata";
    }*/
?>