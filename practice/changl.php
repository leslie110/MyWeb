<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
    print_r ($_POST);
    echo '<br>';
    $name =  $_POST['fname'];
    echo $name;
    echo '<br>';
    echo $_SERVER['SERVER_NAME'];
    echo '<br>';
    print_r($_SERVER) ;
    ?>
</body>
</html>