<?php
   SESSION_START();
?>
<html>
    
<head>
    <title>Checkout</title>
        <link rel="stylesheet" href="../css/style.css">
</head>
    <div id="bdy">
<body>
    The Order Has Been Placed!!!<br/>
    The Products in your cart will now be processed and shipped 
    
    
    <?php
    
     $cartName = $_SESSION['usrName'].'cart';
    
    $uId = rand(1000,9999);
    $fName = $_POST['fullName'];
    $address = $_POST['address1'].$_POST['address2'];
    $pCode = $_POST['pCode'];
    $country = $_POST['country'];
    $pNum = $_POST['pNum'];
    $email = $_POST['eMail'];
    
    
    $total = 0;
    include 'database.php';
    echo '<br/>';
        
    $prodDetails =  "<table id=\"table12\" border=1><tr><th>Product Name</th><th>Quantity</th><th>Unit Price</th><th>Price</th></tr>";
    
    foreach($_SESSION['$products'] as $product){
        $prodDetails =  $prodDetails. '<tr><td>'.$product.'</td>';
        $quantity = 0;
        $result = mysqli_query($connect, "SELECT * FROM details WHERE Prod_Name = '$product'");
        $row = mysqli_fetch_assoc($result);
        $stock = $row["Prod_Qty"];
		$count = 0;
            foreach ($_SESSION[$cartName][$product]  as $value){
                    if ($count==0){
                       $prodDetails =  $prodDetails."<td>".$value."</td>";
                        $newQty = $stock - $value;
                        mysqli_query($connect, "UPDATE details SET Prod_Qty=$newQty WHERE Prod_Name='$product'");
                    } else if ($count==1){
                      $prodDetails =  $prodDetails."<td>".$value."</td>";
                    }else if ($count==2){
                      $prodDetails =  $prodDetails."<td>".$value."</td>"; 
                     $total += $value;
                    }
                $count++;
            }
        }
        $prodDetails = $prodDetails."<tr><td>The Total is</td><td></td><td></td><td>".$total."</td></tr></table>";
    
    echo "<h2><u>Reciept</u></h2><hr/>";
    echo $prodDetails;
    mysqli_query($connect,"INSERT INTO orders(u_Id,Product_Details, fName, address, p_Code, country, p_Num, e_mail) VALUES ($uId,'$prodDetails','$fName','$address',$pCode,'$country',$pNum,'$email')");
    echo "<br/><br/>";
    echo "Shipping Details<hr/>";
    echo "Full Name : ".$fName;
    echo "<br/>Shipping Address : ".$address;
    echo "<br/>Post Code : ".$pCode;
    echo "<br/>Country : ".$country;
    echo "<br/><br/>Contact Details<hr/>";
    echo "Phone Number : ".$pNum;
    echo "<br/>E-Mail : ".$email;
    
    echo"<br/><br/><br/>";
    echo"The tracking number for above order is ".$uId.'<br/>';
    echo"You can later use this number to check the shipping status of your products <br/>";
    echo"Thank you for shopping with Black Dragon Gaming!!!<br/><br/><br/>";
    
    echo"<a href=../html/Home.html>GO BACK HOME</a>";
    ?>
    
    <?php
  
    ?>
    
    
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
    
    a:link{
        color:white;
    }
    a:visited{
        color:white;
    }
    a:hover{
        color: orange;
    }
    
</style>