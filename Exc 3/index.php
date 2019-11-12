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

    <form method="post" action="index.php" class="form-inline">
    <div class="form-group mx-sm-3 m-4">
        <label class="sr-only">Value 1</label>
        <input type="text" class="form-control" placeholder="value1" name="value1">
        <label class="sr-only">Value 2</label>
        <input type="text" class="form-control" placeholder="value2" name="value2">
    </div>
    <button name="submit" type="submit" class="btn btn-primary m-4">Berechnen</button>
    </form>

    <?php
        if( isset($_POST['submit'])){
            $value1 = $_POST["value1"];
            $value2 = $_POST["value2"];
            $result = $value1/$value2;

          echo  "<p>Value1: $value1</p>
                <p>Value2: $value2</p>
                <p>Result: $result</p>";
        }
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