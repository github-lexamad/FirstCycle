<?php
$l = $_POST["login"];
$p = md5($_POST["password"]);

include("cfg.php");
$result = $mysqli->query("SELECT * FROM users WHERE login='$l' AND password='$p'");
if(mysqli_num_rows($result) > 0){
    echo "Inside";
}
else{
    echo "Outside";
}
?>