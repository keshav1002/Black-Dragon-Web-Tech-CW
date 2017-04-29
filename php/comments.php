
<html>
<head>
</head>
<div id="bdy">
<body>
	<?php include 'database.php';?>
	<?php
	$comment = $_POST['comments'];
	
	mysqli_query($connect,"INSERT INTO comments(Comment) VALUES ('$comment')");
    echo 'Your feedback has been successfully submitted!!!';
    header('Refresh: 2; URL=../html/Home.html');
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