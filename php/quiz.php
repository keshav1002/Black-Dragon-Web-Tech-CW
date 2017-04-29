
<html>
<head>
    <title>Answers</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<div id = "bdy">
<body>
    <h1>Answers</h1>
    
    <div class="menu-collapsed">
            <div class="bar"></div>
            <nav>
                <ul>
                    <li><a href="../html/Home.html">Home</a>
                    </li>
                    <li><a href="../Shop.html">Shop</a>
                    </li>
		            <li><a href="../html/Comments.html">Contact Us</a>
                    </li>
                    <li><a href="../html/AboutUs.html">About Us</a>
                    </li>
                    <li><a href="../html/quiz.html">Quiz</a></li>
                    <li><a href="php/Logout.php">Logout</a>
                    </li>
                </ul>
            </nav>
        </div>
    <hr/>
	<?php
    
        error_reporting(0);
		
		$ans1 = $_GET['1'];
		$ans2 = $_GET['2'];
		$ans3 = $_GET['3'];
		$ans4 = $_GET['4'];
		$ans5 = $_GET['5'];
		$ans6 = $_GET['6'];
		$ans7 = $_GET['7'];
		$ans8 = $_GET['8'];
		$ans9 = $_GET['9'];
		$ans10 = $_GET['10'];

		$count=0;
		if($ans1 == 5){

			echo"Question 1 : You were correct! The answer is Defence of The Ancients 2<br>";
			$count = $count + 2;
	
		}else{

			echo"Question 1 : You were wrong! The answer was Defence of The Ancients 2<br>";
			$count = $count - 1;

		}


		if($ans2 == 2){

			echo"Question 2 : You were correct! The answer is AGP<br>";
			$count = $count + 2;
	
		}else{

			echo"Question 2 : You were wrong! The answer was AGP<br>";
			$count = $count - 1;

		}

		if($ans3 == 5){

			echo"Question 3 : You were correct! The answer is Madden<br>";
			$count = $count + 2;
	
		}else{

			echo"Question 3 : You were wrong! The answer was Madden<br>";
			$count = $count - 1;

		}


		if($ans4 == 2){

			echo"Question 4 : You were correct! The answer is Federation Internationale de Football Association <br>";
			$count = $count + 2;
	
		}else{

			echo"Question 4 : You were wrong! The answer was Federation Internationale de Football Association <br>";
			$count = $count - 1;

		}


		if($ans5 == 1){

			echo"Question 5 : You were correct! The answer is Witcher 3<br>";
			$count = $count + 2;
	
		}else{

			echo"Question 5 : You were wrong! The answer was Witcher 3<br>";
			$count = $count - 1;

		}


		if($ans6 == 2){

			echo"Question 6 : You were correct! The answer is Tetris<br>";
			$count = $count + 2;
	
		}else{

			echo"Question 6 : You were wrong! The answer was Tetris<br>";
			$count = $count - 1;

		}


		if($ans7 == 2){

			echo"Question 7 : You were correct! The answer is Carpenter<br>";
			$count = $count + 2;
	
		}else{

			echo"Question 7 : You were wrong! The answer was Carpenter<br>";
			$count = $count - 1;

		}


		if($ans8 == 4){

			echo"Question 8 : You were correct! The answer is Q*bert<br>";
			$count = $count + 2;
	
		}else{

			echo"Question 8 : You were wrong! The answer was Q*bert<br>";
			$count = $count - 1;

		}

		if($ans9 == 1){

			echo"Question 9 : You were correct! The answer is The Death Star<br>";
			$count = $count + 2;
	
		}else{

			echo"Question 9 : You were wrong! The answer was The Death Star<br>";
			$count = $count - 1;

		}

		if($ans10 == 4){

			echo"Question 10 : You were correct! The answer is 4<br>";
			$count = $count + 2;
	
		}else{

			echo"Question 10 : You were wrong! The answer was 4<br>";
			$count = $count - 1;

		}


		echo"Your score is : ".$count;


		
	?>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="../js/index.js"></script>
</body>
</div>

</html>


<style>
    #bdy{
        margin-top: 20px;
        font-family: sans-serif;
        font-size: 20px;
        color : white;
        margin-left: 150px;
    }


</style>
