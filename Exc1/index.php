<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php
        $viewer = getenv( "HTTP_USER_AGENT" );
        
        if (preg_match('/Chrome/i' , "$viewer")) {
            $css = 'chrome.css';
        } elseif (preg_match( "/Mozilla/i", "$viewer")) {
            $css = "mozilla.css";
        }
    ?>

    <?= "<link rel='stylesheet' type='text/css' href=$css>" ?>
  
    <title>PHP</title>
</head>

<body >


    <div id="box"></div>

</ body>
</html>