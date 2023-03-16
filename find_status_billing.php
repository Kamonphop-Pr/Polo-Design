<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">


<?php
  include_once('config.php');
  require __DIR__.'../views/header.php';
  session_start();
  if(isset( $_GET['billing_id'])){
    $billingId= $_GET['billing_id'];
  }
 
?>
    <script type="text/javascript" src="https://earthchie.github.io/jquery.Thailand.js/jquery.Thailand.js/dependencies/JQL.min.js"></script>
    <script type="text/javascript" src="https://earthchie.github.io/jquery.Thailand.js/jquery.Thailand.js/dependencies/typeahead.bundle.js"></script>
    <link rel="stylesheet" href="https://earthchie.github.io/jquery.Thailand.js/jquery.Thailand.js/dist/jquery.Thailand.min.css">
    <script type="text/javascript" src="https://earthchie.github.io/jquery.Thailand.js/jquery.Thailand.js/dist/jquery.Thailand.min.js"></script>	

<style>
  .timeline-wrapper {
  margin-left: 1.5rem;
  border-left: 3px solid #ddd;
}
.node {
  padding-left: .8rem;
  padding-bottom: 1.5rem;
  position: relative;
}
.node h3, .node p {
  margin: 0;
}
.node::before {
  content: "";
  width: .9rem;
  height: .9rem;
  background: #fff;
  border: 2px solid #ccc;
  border-radius: 50%;
  position: absolute;
  top: 0rem;
  left: -.5rem;

} 
.start-34 {
  left: 33.33% !important;
}
.start-67 {
  left: 66.67% !important;
}
.start-60 {
  left: 60% !important;
}
.start-80 {
  left: 80% !important;
}

.btn-cyan {
  color: #fff;
  background-color: #17a2b8;
  border-color: #17a2b8; }
  .btn-cyan:hover {
    color: #fff;
    background-color:#108699;
    border-color: #108699;}
    .btn-cyan.disabled, .btn-cyan:disabled {
    color: #fff;
    background-color: #158799;
    border-color: #158799; }

.btn-warning {
  color: #fff;
  background-color: #ffc107;
  border-color: #ffc107;}
  .btn-warning:hover {
    color: #fff;
    background-color:#ffc107;
    border-color: #ffc107;}
    .btn-warning.disabled, .btn-warning:disabled {
    color: #fff;
    background-color: #dba607;
    border-color: #dba607; }
.btn-orange {
  color: #fff;
  background-color: #fd7e14;
  border-color: #fd7e14;}
  .btn-orange:hover {
    color: #fff;
    background-color:#fd7e14;
    border-color: #fd7e14;
}
.btn-success {
  color: #fff;
  background-color:  #20c997;
  border-color:  #20c997;}
  .btn-success:hover {
    color: #fff;
    background-color: #20c997;
    border-color:  #20c997;
}

  
</style>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">N&C Polo Design</a>
	      <button class="navbar-toggler" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="index.php" class="nav-link" >หน้าหลัก</a></li>
              <li class="nav-item"><a href="fabric.php" class="nav-link" >ชนิดผ้า</a></li>
              <li class="nav-item"><a href="design.php" class="nav-link">ออกแบบเสื้อ</a></li>
              <li class="nav-item"><a href="finddesign.php" class="nav-link" >วิธีการสั่งซื้อ</a></li>
              <li class="nav-item active"><a href="find_status_billing.php" class="nav-link text-primary" >ตรวจสอบสถานะ</a></li>
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
<?php if (isset($_SESSION['username'])) {  ?>  
  <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
        <h2 class="text-center">ตรวจสอบสถานะของสินค้า</h2>
        <div class="col-md-12 pt-5">
          <form class="subscribe-form" action="create_invoice.php" method="GET">
            <div class="form-group d-flex">
              <input type="text" class="form-control" name="billing_id" id="design" placeholder="กรุณาใส่หมายเลขคำสั่งซื้อของคุณ" value="<?php if(isset($_GET['billing_id'])) {echo $_GET['billing_id']; }?>" required>
              <button id="showd" class="submit px-5 text-nowrap">ตรวจสอบสถานะของสินค้า</button>
            </div>
              </form>
        </div>
        </div>
        
      </div>
    </section>
    <div class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
              <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>ข้อมูลการสั่งซื้อทั้งหมด</h3>
                            <p class="text-subtitle text-muted">สำหรับลูกค้าที่ทำการสั่งซื้อ</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item text-primary" aria-current="page"><a href="find_status_billing.php">ข้อมูลคำสั่งซื้อทั้งหมด</a></li>
                                    <li class="breadcrumb-item text-secondary" aria-current="page"><a class="text-secondary" href="find_status_design.php">ประวัติการออกแบบ</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            หมายเลขรายการคำสั่งซื้อทั้งหมด
                        </div>
                        <div class="card-body" style="overflow-x:auto;">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th class="text-left">#</th>
                                        <th  class="text-center">หมายเลขคำสั่งซื้อ</th>
                                        <th  class="text-center">หมายเลขการออกแบบ</th>
                                        <th  class="text-center">ชื่อ-นามสกุล</th>
                                        <th  class="text-center">สถานะ</th>
                                        <th  class="text-center">การกระทำ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                               
                                  $user_id=$_SESSION['user_id'];

                                  $sql1 = "SELECT * FROM billing natural join design where user_id=$user_id";
                                  $stmt1 = $conn->prepare($sql1);
                                  $stmt1->execute();
                                  $res1 = $stmt1->get_result();
                                  $conn->close();
                                  $index=0;
                                ?>
                                <?php foreach($res1 as $key=>$value){
                                  $index++;?>
                                  <tr>
                                    <td> <?php echo $index; ?></td>
                                    <td><?php echo $value['billing_id']; ?></td>
                                    <td><?php echo $value['design_id']; ?></td>
                                    <td><span>คุณ<?php echo $value['fname'];?></span>
                                        <span><?php echo $value['lname'];  ?></span>
                                    </td>
                                    <td>
                                      <?php if( $value['billing_status']==0){?>
                                          <span  class="badge bg-warning">รอการชำระค่ามัดจำ</span>
                                      <?php } if( $value['billing_status']==1){?> 
                                          <span class="badge bg-primary">รอการตรวจสอบค่ามัดจำ</span>
                                      <?php } if( $value['billing_status']==2){?> 
                                          <span class="badge bg-secondary">กรุณาชำระค่ามัดใหม่</span>
                                      <?php } if( $value['billing_status']==3){?> 
                                          <span class="badge bg-info">กำลังจัดเตรียมสินค้า</span>
                                      <?php } if( $value['billing_status']==4){?> 
                                          <span  class="badge bg-warning">รอการชำระเงินคงเหลือ</span>
                                      <?php } if( $value['billing_status']==5){?> 
                                          <span  class="badge bg-primary">รอการตรวจสอบชำระเงินคงเหลือ</span>
                                      <?php } if( $value['billing_status']==6){?> 
                                          <span class="badge bg-secondary">กรุณาชำระเงินคงเหลือใหม่</span>   
                                      <?php } if( $value['billing_status']==7){?> 
                                          <span   class="badge bg-success">สินค้าของคุณจัดส่งแล้ว</span>     
                                      <?php } if( $value['billing_status']>=8){?>
                                          <span  class="badge bg-danger">ยกเลิกคำสั่งซื้อ</span>
                                      <?php } ?>
                                    </td>
                                    <td><a class="btn bg-warning btn-warning" href="create_invoice.php?billing_id=<?php echo $value['billing_id']; ?>"><i class="bi bi-info-circle"></i>ข้อมูลการสั่งซื้อ</a>
                                    </td>
                                  </tr>
                                <?php
                                }
                                ?>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
              </div>
              </div>
            </div>
                <?php }
                else { ?>
                <h1 class="pt-5 py-5 text-danger text-center">กรุณาลงชื่อเข้าใช้หากต้องการตรวจสอบสถานะทั้งหมด</h1>
              <?php } ?>
            
    <script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>    
   
<?php
	require __DIR__.'../views/footer.php';
?>