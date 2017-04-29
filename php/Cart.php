<?php
   SESSION_START();
?>
<html>
    
<head>
    <title>Total Bill</title>
        <link rel="stylesheet" href="../css/style.css">
</head>
    <div id = "bdy">
<body>
    
    <h1>Cart</h1>
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
                    <li><a href="Logout.php">Logout</a>
                    </li>
                </ul>
            </nav>
        </div>
    <div id ="table12">
    <?php
        $cartName = $_SESSION['usrName'].'cart';
    
        $total = 0;
		
    
        echo '<br/>';
    
        echo "<table border='1' id='table1' style='border: 1px solid white;'>
           <tr>
               <th>Product Name</th>
               <th>Quantity</th>
               <th>Unit Price</th>
               <th>Price</th>
           </tr>";
        	
		foreach($_SESSION['$products'] as $product){
		echo '<tr><td>'.$product.'</td>';
        $quantity = 0;
		$count = 0;
            foreach ($_SESSION[$cartName][$product]  as $value){
                    if ($count==0){
                       echo '<td>'.$value.'</td>';
                    } else if ($count==1){
                       echo'<td>'.$value.'</td>';
                    }else if ($count==2){
                       echo'<td>'.$value.'</td>';
                     $total += $value;
                    }
                $count++;
            }
         ?>
        </div>
    <td>
      <form method="get" action="removeItem.php">
        <input type="submit" name="action" value="Remove"/>
        <input type="hidden" name='remove' value="<?php echo $product; ?>"/>
      </form>
    </td>
    <?php    
        }
		echo '<tr><td>The Total is</td><td></td><td></td><td>'.$total.'</td></tr></table>';
    ?>
    <div id= "details">
    <br/><br/>
    <h2>Card Details</h2> <hr/>
        <form method="post" action="Bill.php">
	       <label>Card Number :</label>&nbsp&nbsp&nbsp&nbsp<input type="text" name='cardNum' id="cardNum" value="" required> *
	       <br/><br/>
	       <label>Payment Type :</label>&nbsp&nbsp 
            <select name="drpType" id="drpType" required>
		    <option value="0">----Select Type----</option>
  		    <option value="VISA">VISA</option>
  		    <option value="MAST">MasterCard</option>
	       </select> *
	       <br/><br/>
	      <label>Expiration Date:</label> &nbsp mm &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp yy<br/>
           &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
           <input type="text" size="2" id="expMonth" value="">
            /&nbsp
           <input type="text" size="2" id="expYear" value="" required> *
	       <br/><br/><br/>
            <h2>Shipping Details</h2> <hr/>
            <label>Full Name :</label>&nbsp&nbsp <input type="text" name='fullName' id="fullName" value="" required> *
            <br/><br/>
            <label>Address 1 :</label>&nbsp&nbsp&nbsp <input type="text" name='address1' id="address1" size="100" value="" required> *
            <br/><br/>
            <label>Address 2 :</label>&nbsp&nbsp&nbsp <input type="text" name='address2' id="address2" size="100" value="" required>
            <br/><br/>
            <label>Postal Code :</label> <input type="text" name='pCode' id="pCode" size="10" value="" required> *
            <br/><br/>
            <label>Country :</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name='country' id="country" size="10" value="" required> *
            <br/><br/><br/> 
            <h2>Contact Details</h2> <hr/> 
            <label>Phone Number :</label> <input type="text" name='pNum' id="pNum" value="" required> *
            <br/><br/>
            <label>E-mail address :</label> <input type="email" name='eMail' id="eMail" value="" required placeholder="Enter a valid email address"> *
            <br/><br/>
	       <input type="submit" value="Place Order">
	   </form>
        </div>
            <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="../js/index.js"></script>
</body>
    </div>
</html>

<style>
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