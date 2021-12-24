<?php

//adds a new user to the database
function addData($users){
    //connecting to database
    require "database_call.php"; //calls database

    //gets all values from form input
    $id = count($users);

    //get last index from database by counting users array
    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $age =  $_POST["age"];
    $gender = $_POST["gender"];
    $description = $_POST["description"];
    $sql = "INSERT INTO wizard VALUES (\"$id\",\"$fname\", \"$lname\", $age, \"$gender\", \"$description\", 0, 0, 0, 0);";

    //display completionpage if succeeded
    if ($conn->query($sql) === TRUE) {
        header('Location: http://sortinghat.miunoraven.be/added_account.php');
    } 
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}

function changeData($id, $house){ //puts the votes in the houses

    require "database_call.php";
    $number_sql = "SELECT $house FROM wizard WHERE id = \"$id\";";
    $result1 = mysqli_query($conn, $number_sql);
    $number = mysqli_fetch_array($result1);
    $new_result = $number[0]+1;
    $sql = "UPDATE wizard SET $house = $new_result WHERE id = \"$id\";";
    $result2 = mysqli_query($conn, $sql);
    
    $conn->close();

}

function getAllData(){ //gets all the wizards

    require "database_call.php";
    $users = [];
    $sql = "SELECT * FROM wizard;";
    $result = mysqli_query($conn, $sql);   
    foreach ($result->fetch_all(MYSQLI_ASSOC) as $witch) {
        array_push($users, $witch);
    }
    $conn->close();
    return $users;
}

function getHouseVote($house, $id){ //get the votes
    require "database_call.php";
    $sql = "SELECT $house FROM wizard WHERE id = \"$id\";";
    $votes = mysqli_query($conn, $sql)->fetch_all(MYSQLI_ASSOC);
    return $votes[0][$house];
}


$users = getAllData();
if(isset($_POST["submit"]))
{
    addData($users);
}

?>



