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
    This is login page <br>
    <a href="two.php">This is goes to the home page </a>

    <h1>LOGIN This Website</h1>
    <form action="real.php" method="post">
        username : <br>
        <input type="text" name="username"> <br>
        Password : <br>
        <input type="password" name="password" ><br> <br>
        <input type="submit" name="login" value="login"> <br>
    

    </form>
    
</body>
</html>

<?php
    // $_SESSION["username"] = "Salman " ;
    // $_SESSION["password"] = "123 " ;

    // echo "<br>" . $_SESSION["username"] . "<br>";
    // echo $_SESSION["password"] . "<br>";

        if(isset($_POST["username"])){
            if(!empty($_POST["username"]) && 
                !empty($_POST["password"])){
            
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];                
                    
            echo $_SESSION["username"] . "<br>" ;
            echo $_SESSION["password"] . "<br>";
        }else{
            echo"You Missed the USER/PASSWord";
        }

        }


?>




























<!-- 

if(isset($_POST["login"])){ 

if(!empty($_POST["username"])&&
!empty($_POST["password"])){
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];

    echo $_SESSION["username"] . "<br>";
    echo $_SESSION["password"] . "<br>";
}else{
    echo"Missing username/ password";
}



} -->