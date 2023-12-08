<?php 
 function getMitarbeiter($query){
        require "config/config.php";
        $queryRun = $db -> query($query);
        if($queryRun -> num_rows > 0){
            return $queryRun;
        }else{
            return $queryRun = "Kein Antwort";
        }
    }
?>