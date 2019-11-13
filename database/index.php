<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <title>PHP</title>
</head>

<body>

<?php
  $servername = "localhost";
  $username = "root";
  $password = "" ;
  $dbname = "test_database";

// Create database
  $conn = mysqli_connect($servername, $username, $password);
  $sql = "CREATE DATABASE $dbname";

// mysqli_query($conn, $sql);

  if  (mysqli_query($conn, $sql)) {
      echo "Database $dbname created successfully! \n" ."<br>";
  } else {
      echo "Error creating database $dbname: " . mysqli_error($conn) ."<br>";
  }

// Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
  if (!$conn) {
      die("Connection failed: "  . mysqli_connect_error() . "\n" ."<br>");
  }

  unset($sql); //clears variable

//sql to create table, here as a structure reference
  $sql = "CREATE TABLE Users (
          user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          firstname VARCHAR(20) NOT NULL,
          lastname VARCHAR(20) NOT NULL,
          email VARCHAR(50),
          reg_date TIMESTAMP
          )";

  if (mysqli_query($conn, $sql)) {
      echo "Table Users created successfully"  . "\n" ."<br>";
  } else {
      echo  "Error creating table: " . mysqli_error($conn) . "\n" ."<br>";
  }

  unset($sql); //clears variable

  $sql = "INSERT INTO Users (firstname, lastname, email)
          VALUES ('John', 'Doe', 'john@doe.com')";

  if (mysqli_query($conn, $sql)) {
      echo "New record created.\n" ."<br>";
  } else {
    echo  "Record creation error for: " . $sql . "\n" . mysqli_error($conn) ."<br>";
  }
  mysqli_close($conn);
?>

  <!--JQuery<--->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <!--popper.js--->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <!--bootstrap.js--->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <!--JS script.js-->
  <!-- <script src="../js/script.js" charset="utf-8"></script> -->
</body>

</html>