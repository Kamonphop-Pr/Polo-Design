<?php

  include('config.php');
//Define the query
$data=array();
$iduser= $_POST['Frontpolo'];
$data[0]=$iduser;
$iduser1= $_POST['BackPolo'];
$data[1]=$iduser1;
echo json_encode($data);
// echo"$iduser1";
?>