<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='stylesheet' type='text/css' href="style.css">
  
    <title>PHP</title>
</head>

<body >

    <form method="POST" action="Exc 2.php">
        <label for="firstname">Firstname:
        <input type="text" name="firstname" id="firstname"><br>
        </label><br>
        <label for="lastname">Lastname:
        <input type="text" name="lastname" id="lastname"><br>
        </label><br>
        <input type="submit" name="submit" value="Press Button">
    </form>

    <?php
        if( isset($_POST['submit'])){
            if( !$_POST["firstname" ] || !$_POST["lastname"] ){
                echo "Please provide first and lastname!";
            } else {
                echo "Welcome ". $_POST[ 'firstname'] ." ".$_POST['lastname']. "<br />";
            }
        }
    ?>

</body>
</html>