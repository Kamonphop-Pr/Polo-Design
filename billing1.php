<?php
  include('config.php');
$billing_id= $_POST['billing_id'];
if($_POST['filename']!="images/slip/" && $_POST['filename']!="images/slip/blob" ){
  $filename=$_POST['filename'];
  $sql = "UPDATE `billing` SET slip_img_2='$filename', billing_status=5, update_billing=CURRENT_TIMESTAMP() where billing_id =$billing_id";
  $conn->query($sql);

}
echo json_encode($billing_id);   
?>
