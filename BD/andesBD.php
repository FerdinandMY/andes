<?php

    function AddMessage()
    {   // initialisation de l'objet Pdo à la base de donnée
        $_config = require 'config.php';
        $sgbd = $_config['sgbd'];
        $host = $_config['host'];
        $bdname = $_config['bdname'];
        $user = $_config['user'];
        $password = $_config['password'];

        try {
            $userdb = $sgbd . ':dbname=' . $bdname . ';host=' . $host;
            $conn = new PDO($userdb, $user, $password, null);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO commentaire (nameC, emailC, messageC)
            VALUES ('".$_POST["nameC"]."','".$_POST["emailC"]."','".$_POST["messageC"]."')";
            if ($conn->query($sql)) {
                echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
                header("Location:http://localhost:82/thecharity/andes/");
            }
            else{
                echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
            }
            $conn = null;
        }
        catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }  
AddMessage();

