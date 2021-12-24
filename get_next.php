<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include "font.php" ?>
        <link rel="stylesheet" href="assets/css/choose_house.css" type="text/css">
        <title>Percentage</title>
    </head>
    <body>
        <div class="content">
        <?php
            require "database/database.php";
            include "get_wizard.php"; ?>

            <h1> <?php echo $firstname . " " . $lastname;?></h1>
                <p> 
                <?php 
                    if($gender == "f"){
                        echo "female " . $age; ?></p>
                <?php
                    }
                    else{
                        echo "male " . $age; ?></p>
                <?php
                    }
                    echo "<p>" . $description . "</p>";
                    

            if (isset($_POST["gryffindor"])) {
                changeData($id, "gryffindor");
            }
            else if (isset($_POST["slytherin"])) {
                changeData($id, "slytherin");
            }
            else if (isset($_POST["ravenclaw"])) {
                changeData($id, "ravenclaw");
            }
            else if (isset($_POST["hufflepuff"])) {
                changeData($id, "hufflepuff");
            }   

            include "calc_percent.php";
            $next = mysqli_query($conn, "SELECT * FROM wizard WHERE id>\"$id\" order by id ASC");

            if($row = mysqli_fetch_array($next))
            {
                
                echo '<a href="choose_house.php?id='. $row["id"] . '" class="next_button">Next wizard</a>';  
            }
            else echo '<a href="index.php" class="next_button">Back to main</a>';  
        ?>

        </div>
        
    </body>
</html>

