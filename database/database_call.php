<?php
$dbServername = "ID366454_wizards.db.webhosting.be";
$dbUsername = "ID366454_wizards";
$dbPassword = "harrypotter1";
$dbName = "ID366454_wizards";

$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}