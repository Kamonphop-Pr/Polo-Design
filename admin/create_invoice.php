<link rel="stylesheet" href="../assets/css/bootstrap.css">
<?php

  include_once('../config.php');
  $billingId= $_GET['billing_id'];
  $sql1 = "SELECT *,DATE_FORMAT(create_billing,'%e %b %Y')as cdate FROM billing natural join design where billing_id=$billingId";
  $stmt1 = $conn->prepare($sql1);
  $stmt1->execute();
  $res1 = $stmt1->get_result();

  $sql2 = "SELECT billing_id,size_id,size_name,price,quantity,size_gender,TotalPrice from size natural join (Select billing_id,size_id,SUM(price*quantity) as TotalPrice 
  from billing_detail group by billing_id,size_id) as Tsum natural join billing_detail where billing_id='$billingId'
  order by size_id asc";
  $stmt2 = $conn->prepare($sql2);
  $stmt2->execute();
  $res2 = $stmt2->get_result();

  $sql3="SELECT * FROM frabic";
  $stmt3 = $conn->prepare($sql3);
  $stmt3->execute();
  $res3 = $stmt3->get_result();
  $conn->close();

?>
<!DOCTYPE html>
<html lang="th">
  <head>
    <title>N&C Polo Design</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../images/polo/Logo.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">


  <script src="../js/jquery.min.js"></script>
	<style>
<style>
            /* reset */
body{
    margin-top:20px;
    color: #484b51;
}
.text-secondary-d1 {
    color: #728299!important;
}
.page-header {
    margin: 0 0 1rem;
    padding-bottom: 1rem;
    padding-top: .5rem;
    border-bottom: 1px dotted #e2e2e2;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -ms-flex-align: center;
    align-items: center;
}
.page-title {
    padding: 0;
    margin: 0;
    font-size: 1.75rem;
    font-weight: 300;
}
.brc-default-l1 {
    border-color: #dce9f0!important;
}

.ml-n1, .mx-n1 {
    margin-left: -.25rem!important;
}
.mr-n1, .mx-n1 {
    margin-right: -.25rem!important;
}
.mb-4, .my-4 {
    margin-bottom: 1.5rem!important;
}

hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid rgba(0,0,0,.1);
}

.text-grey-m2 {
    color: #888a8d!important;
}

.font-bolder, .text-600 {
    font-weight: 600!important;
}

.text-110 {
    font-size: 110%!important;
}
.text-blue {
    color: #478fcc!important;
}
.pb-25, .py-25 {
    padding-bottom: .75rem!important;
}

.pt-25, .py-25 {
    padding-top: .75rem!important;
}
.bgc-default-tp1 {
    background-color: rgba(121,169,197,.92)!important;
}
.bgc-default-l4, .bgc-h-default-l4:hover {
    background-color: #f3f8fa!important;
}
.page-header .page-tools {
    -ms-flex-item-align: end;
    align-self: flex-end;
}

.btn-light {
    color: #757984;
    background-color: #f5f6f9;
    border-color: #dddfe4;
}
.w-2 {
    width: 1rem;
}

.align-bottom {
    vertical-align: bottom!important;
}
.ftco-navbar-light .navbar-nav > .nav-item > .nav-link {
    font-size: 16px;
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
    padding-left: 20px;
    padding-right: 20px;
    font-weight: 400;
    color: #000000;
    text-transform: uppercase;    
	letter-spacing: 0px!important;
    opacity: 1 !important;
}
.table tbody tr td {
    text-align: center !important;
    vertical-align: middle;
    padding: 10px 10px !important;
    border: 1px solid transparent !important;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05) !important;
}

@page { margin: 0; }
</style>
</head>
  
  <body class="goto-here">
		<div class="py-1 bg-black">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text"></span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text"></span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">ระยะเวลาขึ้นอยู่กับจำนวนที่สั่ง</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<link rel="stylesheet" href="../assets/vendors/toastify/toastify.css">
<div class="page-content container">
    <div class="page-header text-blue-d2">
        <h1 class="page-title text-secondary-d1 ">
            เลขที่ใบเสร็จ
            <small class="page-info">
                <i class="fa fa-angle-double-right text-80"></i>
                :  <?php echo $_GET['billing_id']; ?>
            </small>
        </h1>
        <div class="action-buttons">
            <a class="btn bg-success btn-success mx-1px text-95" href="index.php" data-title="PDF">
                <i class="mr-1 fa fa-arrow-left text-danger-m1 text-120 w-2"></i>
                ย้อนกลับ
            </a>
            <a class="btn bg-danger btn-danger mx-1px text-95 "  onclick="printContent('Receipt');" href="#" data-title="Print">
                <i class="mr-1 fa fa-print text-light-m1 text-120 w-2"></i>
                ปริ้นท์ใบเส็รจ
            </a>
            <a class="btn bg-info btn-info mx-1px text-95 pb-2" href="#" data-toggle="modal" data-target="#myModal<?php echo  $billingId; ?>">
            <i class="bi bi-wallet-fill"></i> ชำระเงิน</a>
            <!-- The Modal -->
            <div class="modal fade" id="myModal<?php echo  $billingId;  ?>">
                <div class="modal-dialog modal-xl">
                <div class="modal-content">
                
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">แจ้งการชำระเงินของหมายเลขคำสั่งซื้อ : <?php echo  $billingId;  ?></h4>
                    <button type="button" class="close" data-dismiss="modal">X</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                    <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">สำหรับค่ามัดจำ</h5>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <p class="card-text">ชำระเงินผ่านทางธนาคารกรุงไทย
                                        <code>เลขที่บัญชี : </code> 
                                    </p>
                                        <p class="card-text">ชำระเงินผ่านพร้อมเพย์<code> พร้อมเพย์ : </code>
                                    </p>
                                    <label> ยอดเงินที่ต้องชำระ ณ ตอนนี้ เป็นจำนวน </label>
                                    <code><?php foreach($res1 as $a){echo number_format($a['deposit'],2);}?> </code>
                                    <span>บาท</span>
                                    <?php foreach($res1 as $a){?>
                                    <a href="../<?php echo $a['slip_img_1'];?>" target="_blank">
                                    <img src="../<?php echo $a['slip_img_1'];?>" class="img-fluid"></a>
                                   <?php
                                     }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">สำหรับส่วนคงค้างจากค่ามัดจำ</h5>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                <p class="card-text">ชำระเงินผ่านทางธนาคารกรุงไทย
                                        <code>เลขที่บัญชี : </code> 
                                    </p>
                                        <p class="card-text">ชำระเงินผ่านพร้อมเพย์<code> พร้อมเพย์ : </code>
                                    </p>
                                    <label> ยอดเงินที่ต้องชำระ ณ ตอนนี้ เป็นจำนวน </label>
                                    <code><?php foreach($res1 as $a){echo number_format($a['deposit'],2);}?> </code>
                                    <span>บาท</span>
                                    <?php foreach($res1 as $a){?>
                                    <a href="../<?php echo $a['slip_img_2'];?>" target="_blank">
                                    <img src="../<?php echo $a['slip_img_2'];?>" class="img-fluid"></a>
                                   <?php
                                     }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
                    </div>
                    
                </div>
                </div>
            </div>
        </div>
        
        
    </div>
</div>
<div class="page-content container" id="Receipt">
    <div class="container px-0">
        <div class="row mt-4">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center text-150">
                            <h3 class="text-default-d3 text-info">N&C Polo Design</h3>
                            <span class="text-600 text-90">เลขที่ใบเสร็จ : <?php echo  $billingId."\t"; ?></span>
                            <span class="text-600 text-90">วันที่สร้างใบเสร็จ : <?php foreach($res1 as $a){ echo $a['cdate']; } ?></span> 
                        </div>
                    </div>
                </div>
                <hr class="row brc-default-l1 mx-n1" />
                <div class="row">
                    <div class="col-md-8">
                            <h5 class="text-danger align-middle">N&C </h5>
                        <div class="text-grey-m2 text-secondary h6">
                            <div class="my-1">
                                 
                            </div>
                            <div class="my-1">
                                
                            </div>
                            <div class="my-1">โทร : </div>
                            <div class="my-1">อีเมล : </div>
                            <div class="my-1 text-success">รับชำระผ่านช่องทาง : <span class="text-success">โมบายแบงก์กิ้ง<span></div>
                        </div>
                    </div>
                    <!-- /.col -->

                    <div class="col-md-4">
                        <?php foreach($res1 as $a){?>
                            <h5 class="text-primary align-middle">คุณ<?php echo $a['fname']; echo "\t".$a['lname'];?></h5>
                            <div class="text-grey-m2 text-secondary h6">
                                <div class="my-1">ที่อยู่ : 
                                <?php echo $a['address'];?>
                                </div>
                                <div class="my-1">โทร :
                                <?php echo $a['phone_number'];?>
                                </div>
                                <div class="my-1">อีเมล :  <?php echo $a['email'];?></div>
                                <div class="my-1 text-danger">สถานะดำเนินการ : 
                                <?php if( $a['billing_status']==0){?>
                                    <span id="status" class="badge bg-warning">รอการชำระค่ามัดจำ</span>
                                <?php } if( $a['billing_status']==1){?> 
                                    <span id="status" class="badge bg-primary">รอการตรวจสอบค่ามัดจำ</span>
                                <?php } if( $a['billing_status']==2){?> 
                                    <span id="status" class="badge bg-secondary">กรุณาชำระค่ามัดใหม่</span>
                                <?php } if( $a['billing_status']==3){?> 
                                    <span id="status" class="badge bg-info">กำลังจัดเตรียมสินค้า</span>
                                <?php } if( $a['billing_status']==4){?> 
                                    <span id="status" class="badge bg-warning">รอการชำระเงินคงเหลือ</span>
                                <?php } if( $a['billing_status']==5){?> 
                                    <span id="status" class="badge bg-primary">รอการตรวจสอบชำระเงินคงเหลือ</span>
                                <?php } if( $a['billing_status']==6){?> 
                                    <span id="status" class="badge bg-secondary">กรุณาชำระเงินคงเหลือใหม่</span>   
                                <?php } if( $a['billing_status']==7){?> 
                                    <span  id="status" class="badge bg-success">สินค้าของคุณจัดส่งแล้ว</span>     
                                <?php } if( $a['billing_status']>=8){?>
                                    <span  id="status" class="badge bg-danger">ยกเลิกคำสั่งซื้อ</span>
                                <?php } ?>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                    </div>
                    <!-- /.col -->
                </div>
                <hr>
                </hr>
                <div class="mt-0">
                <table class="table responsive">
                    <thead class="text-600 text-white bgc-default-tp1">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">รูปาพการออกแบบ</th>
                        <th scope="col">ขนาดไซส์เสื้อโปโล</th>
                        <th scope="col">เพศ</th>
                        <th scope="col">จำนวน (ตัว)</th>
                        <th scope="col">ราคาต่อหน่วย (บาท)</th>
                        <th scope="col">รวมเป็นเงิน (บาท)</th>
                        </tr>
                    </thead>
                    <tbody class="text-95 text-secondary-d3">
                        <tr>
                            <td rowspan="16" class="text-center">1</td>
                            <?php foreach($res1 as $a){?>
                            <td rowspan="16" style="width:20%">
                                <a href="../<?php echo $a['design_img'];?>" target="_blank">
                                <img src="../<?php echo $a['design_img'];?>" class="img-fluid">
                            </td>
                            <?php
                            }
                            ?>
                            
                        </tr>
                        <?php foreach($res2 as $a){?>
                        <tr>
                            <td><?php echo $a['size_name'];?></td>
                            <td><?php if($a['size_gender']==0){
                                echo "ผู้ชาย";
                                }else{ echo "ผู้หญิง"; }?></td>
                            <td><?php echo $a['quantity'];?></td>
                            <td><?php echo number_format($a['price'],2); ?></td>
                            <td><?php echo number_format($a['TotalPrice'],2); ?></td>
                        </tr>
                        <?php
                            }
                            ?>
                        
                    </tbody>
                </table>
                    <div class="row mt-0">
                        <div class="col-md-5 text-grey-d2 text-95 mt-2 mt-lg-0">
                        <img class="img-fluid" src="../images/icon/Krung_Thai_Bank_logo.png" style="width:35px ; height:35px;"><span  class="text-500" style="color:#00a7e7; font-size:18px;"> ธนาคารกรุงไทย</span>
                        <br>
                        <span class="text-500 text-dark">เลขที่บัญชี : </span>
                        <br>
                        <span class="text-500 text-dark">พร้อมเพย์ : </span>
                        <br>
                        <span class="text-500 text-dark">ชื่อบัญชี : </span>
                        </div>

                        <div class="col-md-7 text-grey text-90 order-first order-sm-last">
                            <div class="row my-2">
                                <div class="col-md-9 text-right"> ยอดรวมทั้งหมด</div>
                                <div class="col-md-2 ">
                                    <span class="text-120 text-secondary-d1"><?php foreach($res1 as $a){echo number_format($a['net_price'],2);}?></span>
                                </div>
                                <div class="col-md-1">
                                    <span class="text-130 text-secondary-d1">บาท</span>
                                </div>
                                <div class="col-md-9 text-right"> ยอดมัดจำ 50%</div>
                                <div class="col-md-2">
                                    <span class="text-120 text-secondary-d1"><?php foreach($res1 as $a){echo number_format($a['deposit'],2);}?></span>
                                </div>
                                <div class="col-md-1">
                                    <span class="text-130 text-secondary-d1">บาท</span>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                    <p class="text-500 text-center text-secondary"><span class="text-500 text-center text-danger">*หมายเหตุราคาใบเสร็จรวมภาษีมูลค่าเพิ่มแล้ว*</span>   ขอบคุณที่มาใช้บริการ </p>
                    <hr/>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<script>
   function printContent(el) {
        var restorepage = $('body').html();
        var printcontent = $('#' + el).clone();
        $('body').empty().html(printcontent);
         window.print();
        //$('body').html(restorepage);
        location.reload();
     }
    

</script>

<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="../js/jquery-migrate-3.0.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.easing.1.3.js"></script>
<script src="../js/jquery.waypoints.min.js"></script>
<script src="../js/jquery.stellar.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/jquery.animateNumber.min.js"></script>
<script src="../js/bootstrap-datepicker.js"></script>
<script src="../js/scrollax.min.js"></script>
<script src="../js/main.js"></script>

</body>
</html>