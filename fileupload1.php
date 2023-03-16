<?php
  include('config.php');
$filename = $_FILES["file"]["name"];
$tempname = $_FILES["file"]["tmp_name"];


  $folder = "images/slip/".$filename[0];
if($folder!='images/slip/blob'){
  move_uploaded_file($tempname[0], $folder);  
}
   
  //$sql = "UPDATE `billing` SET slip_img_1='$filename[0]', update_billing=CURRENT_TIMESTAMP() where design_id='$billingId'";
  //$conn->query($sql);
echo json_encode($folder);   
?>
