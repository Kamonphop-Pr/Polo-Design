<?php
  include('config.php');
// รับค่าจาก jQuery
$size_id = $_POST['size_id'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$billing_id = $_POST['billing_id'];
$sql="INSERT INTO `billing_detail` (`billing_id`,`size_id`, `quantity`, `price`) VALUES ($billing_id ,$size_id,$quantity,$price)";

if($conn->query($sql)===TRUE){
  $a="success";
}
else {
  $a="failure";
}

echo json_encode($a);
?>
