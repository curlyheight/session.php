<?php
    session_start();
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    HOME PAGE <br>
    <a href="real.php" >  Go to login page</a> <hr><hr>
    
</body>
</html>

<?php

echo "<br>" . $_SESSION["username"] . "<br>";
echo $_SESSION["password"] . "<br>";

?>