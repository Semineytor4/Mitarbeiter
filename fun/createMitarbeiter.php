<?php 

require "config/config.php";
$vorname =  $_REQUEST['vorname'];
$nachname =  $_REQUEST['nachname'];
$alter =  $_REQUEST['alter'];
$geb_datum =  $_REQUEST['geb_datum'];
$abteilung =  $_REQUEST['abteilung'];

$query = "INSERT INTO mitarbeiter(vorname, nachname, age, geburts_datum, abteilung) VALUES('$vorname','$nachname','$alter','$geb_datum','$abteilung')";

if(mysqli_query($db, $query)){
 header('Location: /');
 }else{
     echo "query error" . mysqli_error($db);
 }
?>

