<html>
<head>
    <title>Laptops</title>
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/style.css">
</head>
<div id="bdy">
<body>
    <h1>Laptops</h1>
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
                    <li><a href="../php/Logout.php">Logout</a>
                    </li>
                </ul>
            </nav>
        </div>
   <div id="Cover">
        <div id="box1">
            <img src="../images/Alienware.jpg" width="50%" height = "47%"/>
            <div id="subbox1">
                <h1 align="center">Alienware 17</h1>
                <?php
                include 'database.php';
                $result = mysqli_query($connect, "SELECT * FROM details WHERE Prod_Name = 'Alienware 17'");
                $row = mysqli_fetch_assoc($result);
                echo $row["Prod_Desc1"];
                echo '<br/> <br/>';
                echo $row["Prod_Desc2"];
                ?>
            </div>
            <br/><br/>
            <div id="subbox2">
                <form = "frm1" method="post" action="shoppingCart.php" onsubmit="return validate(document.getElementById('qty1'));">
	            <input type="hidden" name="product" value="Alienware 17">
	            <br>Quantity &nbsp <input type="text" name='qty' size="2" id="qty1" value="">
	            Unit Price &nbsp <input type="text" name='uPrice' size="2" value="2550" readonly="readonly">	
	            <br><br><input type="submit" id="ShoppingCart" value ="Add to cart">
	           </form>
                <?php
                 echo 'Products left : ';
                 echo $row["Prod_Qty"];
                ?>
            </div>
        </div>
        
       
        <div id="box2">
            <img src="../images/Asus.jpg" width="50%" height = "47%"/>
            <div id="subbox1">
                <h1 align="center">Asus ROG G752</h1>
                <?php
                include 'database.php';
                $result = mysqli_query($connect, "SELECT * FROM details WHERE Prod_Name = 'Asus ROG G752'");
                $row = mysqli_fetch_assoc($result);
                echo $row["Prod_Desc1"];
                echo '<br/> <br/>';
                echo $row["Prod_Desc2"];
                ?>
            </div>
            <div id="subbox2">
                <form = "frm1" method="post" action="shoppingCart.php" onsubmit="return validate(document.getElementById('qty2'));">
	            <input type="hidden" name="product" value="Asus ROG G752">
	            <br>Quantity &nbsp <input type="text" name='qty' size="2" id="qty2" value="">
	            Unit Price &nbsp <input type="text" name='uPrice' size="2" value="1650" readonly="readonly">	
	           <br><br><input type="submit" id="ShoppingCart" value ="Add to cart">
	           </form>
                <?php
                 echo 'Products left : ';
                 echo $row["Prod_Qty"];
                ?>
            </div>
        </div>
        
       
        <div id="box3">
            <img src="../images/msi.jpg" width="50%" height = "47%"/>
            <div id="subbox1">
                <h1 align="center">MSI GS60 Ghost Pro</h1>
                <?php
                include 'database.php';
                $result = mysqli_query($connect, "SELECT * FROM details WHERE Prod_Name = 'MSI GS60 Ghost Pro'");
                $row = mysqli_fetch_assoc($result);
                echo $row["Prod_Desc1"];
                echo '<br/> <br/>';
                echo $row["Prod_Desc2"];
                ?>
            </div>
            <div id="subbox2">
                <form = "frm1" method="post" action="shoppingCart.php" onsubmit="return validate(document.getElementById('qty3'));">
	            <input type="hidden" name="product" value="MSI GS60 Ghost Pro">
	            <br>Quantity &nbsp <input type="text" name='qty' size="2" id="qty3" value="">
	            Unit Price &nbsp <input type="text" name='uPrice' size="2" value="1800" readonly="readonly">	
	           <br><br><input type="submit" id="ShoppingCart" value ="Add to cart">
	           </form>
                <?php
                 echo 'Products left : ';
                 echo $row["Prod_Qty"];
                ?>
            </div>
        </div>
        
       
        <div id="box4">
            <img src="../images/Gigabyte.png" width="50%" height = "47%"/>
            <div id="subbox1">
                <h1 align="center">Gigabyte P35X v5</h1>
                <?php
                include 'database.php';
                $result = mysqli_query($connect, "SELECT * FROM details WHERE Prod_Name = 'Gigabyte P35X v5'");
                $row = mysqli_fetch_assoc($result);
                echo $row["Prod_Desc1"];
                echo '<br/> <br/>';
                echo $row["Prod_Desc2"];
                ?>
            </div>
            <br/><br/>
            <div id="subbox2">
                <form = "frm1" method="post" action="shoppingCart.php" onsubmit="return validate(document.getElementById('qty4'));">
	            <input type="hidden" name="product" value="Gigabyte P35X v5">
	            <br>Quantity &nbsp <input type="text" name='qty' size="2" id="qty4" value="">
	            Unit Price &nbsp <input type="text" name='uPrice' size="2" value="1900" readonly="readonly">	
	           <br><br><input type="submit" id="ShoppingCart" value ="Add to cart">
	           </form>
                <?php
                 echo 'Products left : ';
                 echo $row["Prod_Qty"];
                ?>
            </div>
        </div>
    </div>
    <div id="poll">
            <h3>&nbsp Do you like our website so far?</h3>
            <form>
                &nbsp Yes:
                <input type="radio" name="vote" value="0" onclick="getVote(this.value)">
                <br>&nbsp No:
                <input type="radio" name="vote" value="1" onclick="getVote(this.value)">

            </form>
        </div>

   <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="../js/index.js"></script>
    
</body>
</div>
</html>

<style>

    #bdy{
        margin-left: 70px;
    }
    #Cover{
        height: 100%;
        width:90%;
        //border : 2px solid black;
    }    

    #box1,#box2,#box3,#box4{
        float: left;
        width: 49%;
        height: 600px;
        border: 1px solid white;
        margin: 0.3%;
    }
    #box3 {
        clear: left;
    }
    
    #subbox1{
       width:49%;
       height:100%;
       float:right;
       //border: 1px solid blue;
        font-size: 12px;
        color : aliceblue;
        margin-top: -70px;
        font-family: sans-serif;
    }
    #subbox1 h1{
        font-family: sans-serif;
        font-size: 15px;
        
    }
    #subbox2 h1{
        font-family: sans-serif;
        font-size: 15px;
        
    }
    
    #subbox2{
       position: relative;
      // top: 60%;
       width:49%;
       height:40%;
       //border:1px solid red;
        font-size: 12px;
        color : aliceblue;
        font-family: sans-serif;
        
    }
    #ShoppingCart {
  	font-family: cursive;
    font-size: 20px;   
    color:aliceblue;
	
   }
    
    #poll{
        margin-top: 10px;
    }

</style>

<script>
    
    function validate(obj){
        
        var qty = obj.value;
        
        if (qty==""||qty<=0){
            alert("Please enter a valid quantity");
            return false;
        }
        
      
    }
    
</script>

<script>
        function getVote(int) {
          if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
          } else {  // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
          xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState==4 && xmlhttp.status==200) {
              document.getElementById("poll").innerHTML=xmlhttp.responseText;
            }
          }
          xmlhttp.open("GET","../php/Poll.php?vote="+int,true);
          xmlhttp.send();
        }
</script>