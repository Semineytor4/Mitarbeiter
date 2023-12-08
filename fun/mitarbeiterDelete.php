<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        require "config/config.php";
        $sql = "DELETE FROM mitarbeiter WHERE id = $id";
    
        if ($db->query($sql) === TRUE) {
            header('Location: /');
            
        } else {
        echo "Error";
        }
    }

?>