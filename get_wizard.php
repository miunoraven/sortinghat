<?php
    require "database/database_call.php";
    $id = $_GET["id"]; 

    $result = mysqli_query($conn, "SELECT * FROM wizard WHERE id like \"$id\""); 
    if($row = mysqli_fetch_array($result)) // get all data of every wizard
    {
        $firstname = $row["firstname"];
        $lastname = $row["lastname"];
        $age = $row["age"];
        $gender = $row["gender"];
        $description = $row["description"]; 

    } ?>
