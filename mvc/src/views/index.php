<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../../css/web.css" rel="stylesheet"> 
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <script src="../../js/app.js" defer></script>
    <title>Document</title>
</head>
<body>
holaa
<a href="index.php?r=login">Login</a>
<a href="index.php?r=register">Register</a>

<p>  <?php

if (!$logged) {
    // Mostrar botones si no has inicado sesion
    echo 'aslkdjfalskñdfj';
    echo 'fasdkfjñasd';
} else {
    echo '<li><a  href="index.php?r=dologout">Tancar sessió</a></li>';

}

?> </p>
</body>
</html>