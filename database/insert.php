<?php

include "connect.php";

//insert userdata into db
$firstname = $_POST[ 'firstname'];
$lastname = $_POST[ 'lastname'];
$email = $_POST[ 'email'];

$sql = "INSERT INTO Users (firstname, lastname, email)
VALUES ('$firstname', '$lastname', '$email')"; //first "" then ''


if( isset($_POST['submit'])){
    if (mysqli_query($conn, $sql)) {
        echo "New record created.\n" ."<br>";
    } else {
    echo  "Record creation error for: " . $sql . "\n" . mysqli_error($conn) ."<br>";
    }
}
unset($sql); //clears variable
mysqli_close($conn);

header('location: index2.php');
?>