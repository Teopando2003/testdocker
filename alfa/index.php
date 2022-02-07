<?php
$num = explode(".", ($_SERVER["SERVER_ADDR"]));
 
if($num[3] == "3"){
    echo "App2";
}else{
    echo "App1";
}
?>