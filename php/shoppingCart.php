<?php
   SESSION_START();

   $cartName = $_SESSION['usrName'].'cart';

   if(!isset($_SESSION[$cartName])){
	$_SESSION[$cartName]=array();
   }

   if(!isset($_SESSION['$products'])){
	$_SESSION['$products'] = array();
   }
?>
<html>
    
<head>
	<title>Bill</title>
</head>
    <div id="bdy">
<body>

	<?php
		$productName = $_POST['product'];
		$qty = $_POST['qty'];
		$uPrice = $_POST['uPrice'];

		if(!in_array($productName, $_SESSION['$products'], true)){
		array_push($_SESSION['$products'],$productName);
        }
    
		$_SESSION[$cartName][$productName] = array();
		$_SESSION[$cartName][$productName]['Quantity'] = $qty;
		$_SESSION[$cartName][$productName]['Unit Price'] = $uPrice;
		$_SESSION[$cartName][$productName]['Price'] = $qty * $uPrice;
    
        echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>".'<br/>';
	?>
    <a href="Cart.php">Proceed to Checkout</a>
	

</body>
        </div>
</html>

<style>
    #bdy{
        font-family: sans-serif;
        font-size: 30px;
        text-align: center;
        color:aliceblue;
    }

</style>