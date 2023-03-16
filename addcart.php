<?php
@session_start();
$msg = '';

if (!isset($_SESSION['username'])) {
      $msg = 'กรุณาเข้าสู่ระบบ!';
}

if (isset($_POST['polo_qty'])) {        
      $username = $_SESSION['username'];
      $pqty = $_POST['polo_qty'];
      $fabric = $_POST['fabrictype'];

      $mysqli = new mysqli('localhost', 'webadmin', '1234', 'designpoloshirt');
      $sql = 'REPLACE INTO cart VALUES ( ?, ?, ?)';
      $stmt = $mysqli->stmt_init();
      $stmt->prepare($sql);
      $stmt->bind_param([$username, $pqty,$fabric]);
      $stmt->execute();
      $aff_row = $stmt->affected_rows;
      if ($stmt->error || $aff_row == 0) {
            $msg = 'เกิดข้อผิดพลาดในการหยิบสินค้าใส่รถเข็น';
      } else {
            $msg = 'หยิบสินค้าใส่รถเข็นเรียบร้อยแล้ว';
      }           
}


end:
echo <<<HTML
<div class="alert alert-danger mb-4" role="alert">
      $msg
</div>             
HTML;
?>