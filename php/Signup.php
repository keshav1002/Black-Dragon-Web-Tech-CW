<html>
<head>
</head>
<div id="bdy">
<body>
	<?php include 'database.php';?>
	<?php
	$usrName = $_POST['usrName'];
	$passWord = $_POST['passWd'];
	
    
    $result = mysqli_query($connect, "SELECT * FROM users WHERE EMP_NAME = '$usrName'");
    $row = mysqli_fetch_assoc($result); 
    
    if($row["EMP_NAME"]==$usrName){
        echo 'Username already in use please try again';
        header('Refresh: 2; URL=../html/Signup.html');
    }else{
	mysqli_query($connect,"INSERT INTO users(EMP_NAME, EMP_PASSWD) VALUES ('$usrName','$passWord')");
    echo 'You have succesfully signed up!!!';
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