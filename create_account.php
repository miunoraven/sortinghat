<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include "font.php" ?>
        <link rel="stylesheet" href="assets/css/create_account.css" type="text/css">
        <title>Create Account</title>
    </head>
    <body>
        <div class="content">
            <h1>Create account</h1>
            <form method="POST" action="database/database.php">
                <div class="pair">
                    <div class="input_comb">
                        <label for="firstname">Your firstname</label> <br>
                        <input type="text" name="firstname" id="firstname"> 
                    </div>
                    <div class="input_comb">
                        <label for="lastname">Your lastname</label> <br>
                        <input type="text" name="lastname" id="lastname"> 
                    </div>
                </div>
    
                <div class="pair">
                    <div class="input_comb">
                        <label for="gender">Gender</label> 
                        <select name="gender" id="gender"> 
                            <option value="m">Male</option>
                            <option value="f">Female</option>
                            <option value="x">X</option>
                        </select> 
                    </div>

                    <div class="input_comb">            
                        <label for="age">Age</label> <br>
                        <input type="number" name="age" id="age"> <br>
                    </div>
                </div>
                
                <div class="input_description">
                    <label for="description">Describe yourself in a sentence!</label> <br>
                    <textarea name="description" rows="10" cols="30" id="description"></textarea>
                </div>
                <br>
                <input type="submit" value="Add wizard" name="submit" id="submit">
            </form> 
            <a href="index.php">Back to main</a>
        </div>
    </body>
</html>