<html>

<head>
    <title>Tracking</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<div id="bdy">

    <body>
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
                    <li><a href="../html/quiz.html">Quiz</a>
                    </li>
                    <li><a href="php/Logout.php">Logout</a>
                    </li>
                </ul>
            </nav>
        </div>
        <h1>Details</h1>
        <?php $tNum=$_POST[ 'tNum']; include 'database.php';
        $result=mysqli_query($connect, "SELECT * FROM orders WHERE u_Id = $tNum"); 
        $row=mysqli_fetch_assoc($result); 
        if($row[ "Product_Details"]!=""){
        echo $row[ "Product_Details"]; 
        echo "<br/><br/>"; 
        echo "Shipping Details<hr/>"; 
        echo "Full Name : ".$row[ "fName"]; 
        echo "<br/>Shipping Address : ".$row[ "address"]; 
        echo "<br/>Post Code : ".$row[ "p_Code"]; 
        echo "<br/>Country : ".$row[ "country"]; 
        echo "<br/><br/>Contact Details<hr/>"; 
        echo "Phone Number : ".$row[ "p_Num"]; 
        echo "<br/>E-Mail : ".$row[ "e_mail"]; 
        echo "<br/>Shipping Status : Shipped"; 
        }else{
            echo "Incorrect or invalid tracking number please try again!!";
        }
        ?>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="../js/index.js"></script>
    </body>
</div>

</html>

<style>
    #bdy{
            font-family: sans-serif;
            font-size: 17px;
            color:white;
            margin-left: 150px;
        }
    #bdy{
        margin-left: 150px;
    }
    #table12 {
        border-color: white;
        font-family: sans-serif;
        color: aliceblue;
    }
    #table12 th{
        font-family: sans-serif;
        color: aliceblue;
    }
    
    #details label{
        font-family: sans-serif;
        font-size: 20px;
        color:aliceblue;
    }
</style>