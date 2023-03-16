<?php  
session_start();
  if(!isset($_SESSION['username'])){
	session_destroy();
  }
?>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
		<a class="navbar-brand" href="index.php">N&C Polo Design</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link text-primary" >หน้าหลัก</a></li>
	          <li class="nav-item"><a href="fabric.php" class="nav-link" >ชนิดผ้า</a></li>
	          <li class="nav-item"><a href="design.php" class="nav-link">ออกแบบเสื้อ</a></li>
			  <li class="nav-item"><a href="finddesign.php" class="nav-link" >วิธีการสั่งซื้อ</a></li>
			  <li class="nav-item"><a href="find_status_billing.php" class="nav-link" >ตรวจสอบสถานะ</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link" >ติดต่อเรา</a></li>
            <?php if (isset($_SESSION['username'])) {   
              ?> <li class="nav-item active"><a class="nav-link text-primary"><?php echo substr_replace($_SESSION['username'],"...",5); ?></a></li>
              <?php
               ?> 
                  <li class="nav-item active"><a class="nav-link text-danger" href="logout.php">Logout <i class="bi bi-box-arrow-right"></i></a></li>
              <?php }
              else { ?>
			  <li class="nav-item active"><a href="admin/auth_login.php" class="nav-link text-primary">ลงชื่อเข้าใช้งาน</a></li>
             <?php }
              ?>
            <?php ?> 

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->