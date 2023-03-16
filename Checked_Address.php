<?php
  include('config.php');
// รับค่าจาก jQuery
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$net_price = $_POST['net_price'];
$deposit = $_POST['deposit'];
$design_id = $_POST['design_id'];
$frabic_id = $_POST['frabic_id'];

$sql="INSERT INTO 
`billing`(`billing_id`, `fname`, `lname`, `email`, `address`, 
`phone_number`, `net_price`, `deposit`,  `slip_img_1`, `slip_img_2`,
`create_billing`, `update_billing`, `billing_status`, `design_id`, `frabic_id`) 
VALUES (replace(replace(replace(replace(CURRENT_TIMESTAMP(),'/',''),'-',''),' ',''),':',''),'$fname','$lname','$email','$address',
'$phone',$net_price,$deposit,NULL,NULL,CURRENT_TIMESTAMP(),CURRENT_TIMESTAMP(),0,'$design_id',$frabic_id)";


if($conn->query($sql)===TRUE){
  $last_id=$conn->insert_id;
  $a=$last_id ;
}
else{
  $a="failure";
}
echo json_encode($a);
?>
