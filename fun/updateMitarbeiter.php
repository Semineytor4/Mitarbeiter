<?php 

require "config/config.php";

$id = $_GET['id'];
$vorname =  $_REQUEST['vorname'];
$nachname =  $_REQUEST['nachname'];
$alter =  $_REQUEST['alter'];
$geb_datum =  $_REQUEST['geb_datum'];
$abteilung =  $_REQUEST['abteilung'];

$query = "
    UPDATE mitarbeiter
    SET vorname = '$vorname', 
        nachname = '$nachname',
        age = $alter,
        geburts_datum = '$geb_datum',
        abteilung = $abteilung
    WHERE id=$id;
";

if(mysqli_query($db, $query)){
 header('Location: /');
// var_dump($query);
 }else{
     echo "query error" . mysqli_error($db);
 }
?>