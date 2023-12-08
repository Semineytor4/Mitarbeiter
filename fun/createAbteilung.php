<?php
    require "config/config.php";
       $abteilung =  $_REQUEST['abteilung'];

       $query = "INSERT INTO abteilung(abteilung) VALUES('$abteilung')";

       if(mysqli_query($db, $query)){
        header('Location: /abteilung');
        }else{
            echo "query error" . mysqli_error($db);
        }

?>