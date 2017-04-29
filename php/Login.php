<?php
session_start();
?>

<html>
<head>
</head>
<div id = "bdy">
<body>
	<?php include 'database.php';?>
    <?php
	$usrName = $_POST['usrName'];
	$passWord = $_POST['passWd'];
    
    $result = mysqli_query($connect, "SELECT * FROM users WHERE EMP_NAME = '$usrName' AND EMP_PASSWD ='$passWord'");
    $row = mysqli_fetch_assoc($result); 
    
    if(($row["EMP_NAME"]==$usrName) &&($row["EMP_PASSWD"]==$passWord)){
        echo 'Hello '.$row["EMP_NAME"].', You have successfully Logged in!!';
        $_SESSION["usrName"]=$row["EMP_NAME"];
        header('Refresh: 2; URL=../html/Home.html');
    } else {
        echo 'Username or Password not found!! Please Sign up!';
        header('Refresh: 2; URL=../html/Login.html');
    }
    
    ?>
</body>
</div>
</html>

<style>
    #bdy{
        background-color: ivory;
        text-align: center;
        backface-visibility: hidden;
        font-family: sans-serif;
        font-size: 30px;
        color : black;
    }

</style>