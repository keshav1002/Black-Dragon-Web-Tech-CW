<?php SESSION_START(); session_destroy(); ?>
<html>

<head>
    <title>You Have Logged Out</title>
</head>
<div id="bdy">

    <body>
        <?php echo 'You have successfully logged out'; header( 'Refresh: 2; URL=../html/Login.html'); ?>
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