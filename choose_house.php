<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include "font.php" ?>
        <link rel="stylesheet" href="assets/css/choose_house.css" type="text/css">
        <title>Choose house</title>
    </head>
    <body>
        <?php
            include "database/database.php";
            include "get_wizard.php";
            if($row){?>
            <div class="content">
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
                    ?>
                <form action="<?php echo "get_next.php?id=".$id?>" method="post" class="choose_house">
                    <div id="first">
                        <input type="submit" value="This is Gryffindor!" name="gryffindor" class="button"/>
                        <input type="submit" value="This is Slytherin!" name="slytherin" class="button"/>
                    </div>
                    <div id="second">
                        <input type="submit" value="This is Ravenclaw!" name="ravenclaw" class="button"/>
                        <input type="submit" value="This is Hufflepuff!" name="hufflepuff" class="button"/>
                    </div>
                </form>
            </div>
        <?php
        }
        else{ ?>
            <h1>There are no wizards yet</h1>
            <a href="create_account.php" id="no_wizards">Add wizards</a>
        <?php } ?>
    </body>
</html>