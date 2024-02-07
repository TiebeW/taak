<?php
$cn=mysqli_connect('127.0.0.1', 'root', 'usbw') or die('Connectie met server mislukt');
mysqli_select_db($cn, 'csv_db') or die('Selectie databank mislukt');

$query1="SELECT date FROM `table 3` WHERE item_type = 'Fastfood';"
$query2="SELECT item_name, transaction_amount FROM `table 3` WHERE transaction_type = 'Cash';"
$query3="UPDATE `table 3` SET time_of_sale = 'Afternoon' WHERE order_id = 1;"
$query4="INSERT INTO  `table 3` (order_id, date, item_name, item_type, item_price, quantity, transaction_amount, transaction_type, received_by, time_of_sale) VALUES('2', '7/4/2023', 'Sandwich', 'Fastfood', '60', '10', '600', 'Online', 'Mr.', 'Night');"
$query5="DELETE FROM `table 3` WHERE order_id = 2 AND date = '7/4/2023';"

    $query = "SELECT date FROM `table 3` WHERE item_type = 'Fastfood'";

    $result = mysqli_query($cn, $query);
    

  


?>
