<?php session_start(); ?>

<html>

<head>
</head>
<div id="bdy">

    <body>
        <?php include 'database.php';?>
        <?php $query="DELETE FROM users WHERE EMP_NAME= '$_SESSION[usrName]'" ;
        mysqli_query($connect,$query); 
        echo 'You have succesfully Deleted your account!!';
        header( 'Refresh: 2; URL=../html/Login.html'); 
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