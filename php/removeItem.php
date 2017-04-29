<?php
   SESSION_START();
?>
<html>
    
<head>
    <title>Item Removed</title>
</head>
    
<body>
    <?php
    $cartName = $_SESSION["usrName"].'cart';
    
    $removeProductName = $_GET['remove'];
    
    echo $removeProductName;
    
    unset($_SESSION[$cartName][$removeProductName]);
    
    if (($key = array_search($removeProductName, $_SESSION['$products'])) !== false) {
    unset($_SESSION['$products'][$key]);
    }
    
    header('Refresh: 0; URL=Cart.php');
    
    ?>
</body>
</html>