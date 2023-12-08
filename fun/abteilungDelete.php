<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        require "config/config.php";
        $sql = "DELETE FROM abteilung WHERE id = $id";
    
        if ($db->query($sql) === TRUE) {
            header('Location: /abteilung');
            
        } else {
        echo "Error";
        }
    }

?>