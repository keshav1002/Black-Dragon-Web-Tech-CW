<html>
<head>
    
    <title>Accessories</title>
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/style.css">

</head>
<div id= "bdy">
<body>
    <h1>Accessories</h1>
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
            <img src="../images/Razor%20BlackWidow%20x.png" width="50%" height = "47%"/>
            <div id="subbox1">
                <h1 align="center">Razor BlackWidow X Tournament Edition</h1>
                <?php
                include 'database.php';
                $result = mysqli_query($connect, "SELECT * FROM details WHERE Prod_Name = 'Razor BlackWidow X'");
                $row = mysqli_fetch_assoc($result);
                echo $row["Prod_Desc1"];
                echo '<br/> <br/>';
                echo $row["Prod_Desc2"];
                ?>
            </div>
            <br/><br/>
            <div id="subbox2">
                <form = "frm1" method="post" action="shoppingCart.php" onsubmit="return validate(document.getElementById('qty1'));">
	            <input type="hidden" name="product" value="Razor BlackWidow X">
	            <br>Quantity &nbsp <input type="text" name='qty' size="2" id="qty1" value="">
	            Unit Price &nbsp <input type="text" name='uPrice' size="2" value="129.99" readonly="readonly">	
	            <br><br><input type="submit" id="ShoppingCart" value ="Add to cart">
	           </form>
                <?php
                 echo 'Products left : ';
                 echo $row["Prod_Qty"];
                ?>
            </div>
        </div>
        
       
        <div id="box2">
            <img src="../images/Razor%20Adaro%20Wireless.jpg" width="50%" height = "47%"/>
            <div id="subbox1">
                <h1 align="center">Razor Adaro Wireless</h1>
                <?php
                include 'database.php';
                $result = mysqli_query($connect, "SELECT * FROM details WHERE Prod_Name = 'Razor Adaro Wireless'");
                $row = mysqli_fetch_assoc($result);
                
                echo $row["Prod_Desc1"];
                echo '<br/> <br/>';
                echo $row["Prod_Desc2"];
                ?>
            </div>
            <div id="subbox2">
                <form = "frm1" method="post" action="shoppingCart.php" onsubmit="return validate(document.getElementById('qty2'));">
	            <input type="hidden" name="product" value="Razor Adaro Wireless">
	            <br>Quantity &nbsp <input type="text" name='qty' size="2" id="qty2" value="">
	            Unit Price &nbsp <input type="text" name='uPrice' size="2" value="149.99" readonly="readonly">	
	           <br><br><input type="submit"  id="ShoppingCart" value ="Add to cart">
	           </form>
                <?php
                 echo 'Products left : ';
                 echo $row["Prod_Qty"];
                ?>
            </div>
        </div>
        
       
        <div id="box3">
            <img src="../images/Razor%20Ouroboros.png" width="50%" height = "47%"/>
            <div id="subbox1">
                <h1 align="center">Razor Ouroboros</h1>
                <?php
                include 'database.php';
                $result = mysqli_query($connect, "SELECT * FROM details WHERE Prod_Name = 'Razor Ouroboros'");
                $row = mysqli_fetch_assoc($result);
                echo $row["Prod_Desc1"];
                echo '<br/> <br/>';
                echo $row["Prod_Desc2"];
                ?>
            </div>
            <div id="subbox2">
                <form = "frm1" method="post" action="shoppingCart.php" onsubmit="return validate(document.getElementById('qty3'));">
	            <input type="hidden" name="product" value="Razor Ouroboros">
	            <br>Quantity &nbsp <input type="text" name='qty' size="2" id="qty3" value="">
	            Unit Price &nbsp <input type="text" name='uPrice' size="2" value="149.99" readonly="readonly">	
	           <br><br><input type="submit" id="ShoppingCart" value ="Add to cart">
	           </form>
                <?php
                 echo 'Products left : ';
                 echo $row["Prod_Qty"];
                ?>
            </div>
        </div>
        
       
        <div id="box4">
            <img src="../images/Razor%20WildCat.png" width="50%" height = "47%"/>
            <div id="subbox1">
                <h1 align="center">Razor WildCat</h1>
                <?php
                include 'database.php';
                $result = mysqli_query($connect, "SELECT * FROM details WHERE Prod_Name = 'Razor WildCat'");
                $row = mysqli_fetch_assoc($result);
                echo $row["Prod_Desc1"];
                echo '<br/> <br/>';
                echo $row["Prod_Desc2"];
                ?>
            </div>
            <br/><br/>
            <div id="subbox2">
                <form = "frm1" method="post" action="shoppingCart.php" onsubmit="return validate(document.getElementById('qty4'));">
	            <input type="hidden" name="product" value="Razor WildCat">
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