<?php
require('../config.php');
require __DIR__.'/header.php';
session_start();
$sql1 = "SELECT *,DATE_FORMAT(create_billing,'%e %b %Y')as cdate,DATE_FORMAT(update_billing,'%e %b %Y')as edate FROM billing natural join design";
$stmt1 = $conn->prepare($sql1);
$stmt1->execute();
$res1 = $stmt1->get_result();
$index=0;

if(isset($_GET['repay'])){
    $billing_id=$_GET['repay'];
    $sqlre = "UPDATE `billing` SET billing_status=2, update_billing=CURRENT_TIMESTAMP() where billing_id =$billing_id";
    $conn->query($sqlre);
    $conn->close();
    header("Location: index.php");  
  }
if(isset($_GET['pay'])){
    $billing_id=$_GET['pay'];
    $sqlre = "UPDATE `billing` SET billing_status=3, update_billing=CURRENT_TIMESTAMP() where billing_id =$billing_id";
    $conn->query($sqlre);
    $conn->close();
    header("Location: index.php");  
  }
if(isset($_GET['Turck'])){
    $billing_id=$_GET['Turck'];
    $sqlre = "UPDATE `billing` SET billing_status=4, update_billing=CURRENT_TIMESTAMP() where billing_id =$billing_id";
    $conn->query($sqlre);
    $conn->close();
    header("Location: index.php");  
}
if(isset($_GET['repay1'])){
    $billing_id=$_GET['repay1'];
    $sqlre = "UPDATE `billing` SET billing_status=6, update_billing=CURRENT_TIMESTAMP() where billing_id =$billing_id";
    $conn->query($sqlre);
    $conn->close();
    header("Location: index.php");  
  }   
if(isset($_GET['pay1'])){
    $billing_id=$_GET['pay1'];
    $sqlre = "UPDATE `billing` SET billing_status=7, update_billing=CURRENT_TIMESTAMP() where billing_id =$billing_id";
    $conn->query($sqlre);
    $conn->close();
    header("Location: index.php");  
  } 
   // $sqlre = "UPDATE `billing` SET billing_status=5, update_billing=CURRENT_TIMESTAMP() where billing_id =$billing_id";
    //$conn->query($sqlre);
if(isset($_GET['terminate'])){
    $billing_id=$_GET['terminate'];
    $sqlre = "UPDATE `billing` SET billing_status=8, update_billing=CURRENT_TIMESTAMP() where billing_id =$billing_id";
    $conn->query($sqlre);
    $conn->close();
    header("Location: index.php");  
} 
    

?>
    <div id="app" >
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.php">Admin N&C Polo Design</a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">การจัดการข้อมูล</li>
                        
                        <li class="sidebar-item active ">
                            <a href="index.php" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>ข้อมูลคำสั่งซื้อ</span>
                            </a>
                        </li>
                        <li class="sidebar-item ">
                            <a href="customize_price.php" class="sidebar-link">
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>ตั้งค่าราคา</span>
                            </a>
                        </li>
                        <li class="sidebar-item ">
                            <a href="../logout.php" class='sidebar-link text-danger'>
                                <i class="bi bi-box-arrow-left text-danger"></i>
                                <span>Logout</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>ข้อมูลคำสั่งซื้อทั้งหมด</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">หน้าแรก</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">ข้อมูลคำสั่งซื้อ</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>หมายเลขคำสั่งซื้อ</th>
                                        <th>ยอดมัดจำ</th>
                                        <th>ยอดรวมทั้งหมด</th>
                                        <th>วันที่สั่งซื้อ</th>
                                        <th>วันที่อัพเดทล่าสุด</th>
                                        <th>สถานะดำเนินการ</th>
                                        <th>การกระทำ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($res1 as $a){ 
                                    $index++;?>
                                    <tr>
                                        <td><?php echo $index;?></td>
                                        <td><?php echo $a['billing_id'];?></td> 
                                        <td ><?php echo number_format($a['deposit'],2);?> บาท</td> 
                                        <td ><?php echo number_format($a['net_price'],2);?> บาท</td> 
                                        <td><?php echo $a['cdate'];?></td> 
                                        <td><?php echo $a['edate'];?></td> 
                                        <td> 
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
                                          
                                        </td> 
                                        <td>
                                      
                                            <a href="create_invoice.php?billing_id=<?php echo $a['billing_id'];?>" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ข้อมูลใบเสร็จ"> 
                                            <span class="bi bi-file-earmark-spreadsheet-fill"></span>
                                            </a>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $a['billing_id'];?>">
                                            <span class="bi bi-wallet-fill"></span>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal<?php echo $a['billing_id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">หลักฐานการชำระเงินของคำสั่งซื้อ # <?php echo $a['billing_id'];?></h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body" style="background-color: #f2f7ff;" >
                                                        <div class="row" >
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="card">
                                                                    <div class="card-content">
                                                                        <div class="card-body">
                                                                            <h4 class="card-title text-center">สำหรับค่ามัดจำ 50%</h4>
                                                                        </div>
                                                                        <p class="card-text text-start text-black">ชำระเงินผ่านทางธนาคารกรุงไทย
                                                                        </p>
                                                                        <p class="card-text text-start text-black">  เลขที่บัญชี : </p> 
                                                                        <p class="card-text text-start text-black">ชำระเงินผ่านพร้อมเพย์ </p>
                                                                        <p class="card-text text-start text-black"> ยอดเงินที่ต้องชำระ ณ ตอนนี้ เป็นจำนวน </p>
                                                                        <p class="card-text text-start text-black"> <?php echo number_format($a['deposit'],2);?> <span class="card-text text-start text-black"> บาท</span>   </p>
                                                                        <?php if($a['slip_img_1']!=null){?>
                                                                            <img class="img-fluid w-100 h-100" src="../<?php echo $a['slip_img_1'];?>" class="img-fluid">
                                                                        
                                                                                <?php
                                                                        } else {?>
                                                                            <p class="card-text text-center text-danger"> ** ยังไม่มีการแนบหลักฐานในการชำระเงิน **</p>
                                                                        <?php
                                                                        }?>
                                                                        <?php if($a['billing_status']>=1 && $a['billing_status']<3 ){?> 
                                                                        <div class="card-footer d-flex justify-content-between">
                                                                            <form action="index.php"  method="GET">
                                                                                <button type="submit" name="repay" id="valuerepay" class="btn btn-danger ml-1" value="<?php echo $a['billing_id']; ?>">ข้อมูลไม่ถูกต้อง</button>
                                                                                <button type="submit" name="pay" id="valuerepay" class="btn btn-primary ml-1" value="<?php echo $a['billing_id']; ?>">ยืนยันการมัดจำ</button>
                                                                            </form> 
                                                                        </div>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="card">
                                                                    <div class="card-content">
                                                                        <div class="card-body">
                                                                            <h4 class="card-title text-center">สำหรับส่วนคงค้างจากค่ามัดจำ</h4>
                                                                        </div>
                                                                        <p class="card-text text-start text-black">ชำระเงินผ่านทางธนาคารกรุงไทย</p>
                                                                        <p class="card-text text-start text-black">  เลขที่บัญชี : </p> 
                                                                        <p class="card-text text-start text-black">ชำระเงินผ่านพร้อมเพย์ 084-141-6733</p>
                                                                        <p class="card-text text-start text-black"> ยอดเงินที่ต้องชำระ ณ ตอนนี้ เป็นจำนวน </p>
                                                                        <p class="card-text text-start text-black"> <?php echo number_format($a['deposit'],2);?> <span class="card-text text-start text-black"> บาท</span>   </p>
                                                                        <?php if($a['slip_img_2']!=null){?>
                                                                                    <img class="img-fluid w-100 h-100" src="../<?php echo $a['slip_img_2'];?>" class="img-fluid">
      
                                                                                <?php
                                                                        } else {?>
                                                                            <p class="card-text text-center text-danger"> ** ยังไม่มีการแนบหลักฐานในการชำระเงิน **</p>
                                                                        <?php
                                                                        }?>
                                                                        <?php if( $a['billing_status']>=5 && $a['billing_status']<=6){?> 
                                                                        <div class="card-footer d-flex justify-content-between">
                                                                            <form action="index.php"  method="GET">
                                                                                <button type="submit" name="repay1" id="valuerepay" class="btn btn-danger ml-1" value="<?php echo $a['billing_id']; ?>">ข้อมูลไม่ถูกต้อง</button>
                                                                                <button type="submit" name="pay1" id="valuerepay" class="btn btn-primary ml-1" value="<?php echo $a['billing_id']; ?>">ยืนยันการมัดจำ</button>
                                                                            </form> 
                                                                               
                                                                        </div>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                    <?php if( $a['billing_status']==3){?> 
                                                        <form action="index.php"  method="GET">
                                                            <button type="submit" name="Turck" id="valuerepay" class="btn btn-warning ml-1" value="<?php echo $a['billing_id']; ?>">เปิดการชำระเงินส่วนคงค้างจากค่ามัดจำ (หากจัดเตรียมสินค้าเสร็จสินเท่านั้น)</button>
                                                        </form> 
                                                    <?php
                                                        }    
                                                    ?>
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php if( $a['billing_status']!=8){?> 
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#example<?php echo $a['billing_id'];?>">
                                                    <span class="bi bi-x-circle-fill"></span>
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="example<?php echo $a['billing_id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5 text-danger" id="exampleModalLabel">ยกเลิกคำสั่งซื้อของหมายเลข # <?php echo $a['billing_id'];?></h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h1 class="modal-title fs-5 " id="exampleModalLabel">หมายเหตุ หากยกเลิกคำสั่งซื้อจะไม่สามารถกลับมาแก้ไขได้</h1>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form action="index.php"  method="GET">
                                                                <button type="submit" name="terminate" id="valuerepay" class="btn btn-danger ml-1" value="<?php echo $a['billing_id']; ?>">ยกเลิกคำสั่งซื้อ</button>
                                                            </form>   
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                            }    
                                            ?>



                                                                                          
                                        </td> 
                                    </tr>
                                <?php
                                }?>    
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>

            <?php

                require __DIR__.'/footer.php';

            ?>
        </div>
    </div>
    <script src="../assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });
    </script>
<?php

require __DIR__.'/footer_tagbody.php';

?>