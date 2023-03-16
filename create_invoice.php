<link rel="stylesheet" href="assets/css/bootstrap.css">
<?php
  require __DIR__.'../views/header.php';
  include_once('config.php');
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

@page { margin: 0; }
</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/vendors/toastify/toastify.css">
<link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
<link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
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
            <a class="btn bg-success btn-success mx-1px text-95" href="find_status_billing.php?billing_id=<?php echo  $billingId; ?>" data-title="PDF">
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
                                    <form  method="POST" action="" id="upload_form" enctype="multipart/form-data"> 
                                        <input type="file" name="img" id="Deposit" >
                                        <?php foreach($res1 as $a){
                                            if($a['billing_status']<1 || $a['billing_status']==2){?>
                                           <?php if( $a['billing_status']==0){?>
                                                <span class="badge bg-warning">รอการชำระค่ามัดจำ</span>
                                            <?php } if( $a['billing_status']==1){?> 
                                                <span class="badge bg-primary">รอการตรวจสอบค่ามัดจำ</span>
                                            <?php } if( $a['billing_status']==2){?> 
                                                <span class="badge bg-secondary">กรุณาชำระค่ามัดใหม่</span>
                                            <?php } if( $a['billing_status']==3){?> 
                                                <span  class="badge bg-info">กำลังจัดเตรียมสินค้า</span>
                                            <?php } if( $a['billing_status']==4){?> 
                                                <span  class="badge bg-warning">รอการชำระเงินคงเหลือ</span>
                                            <?php } if( $a['billing_status']==5){?> 
                                                <span  class="badge bg-primary">รอการตรวจสอบชำระเงินคงเหลือ</span>
                                            <?php } if( $a['billing_status']==6){?> 
                                                <span class="badge bg-secondary">กรุณาชำระเงินคงเหลือใหม่</span>   
                                            <?php } if( $a['billing_status']==7){?> 
                                                <span  class="badge bg-success">สินค้าของคุณจัดส่งแล้ว</span>     
                                            <?php } if( $a['billing_status']>=8){?>
                                                <span   class="badge bg-danger">ยกเลิกคำสั่งซื้อ</span>
                                            <?php } ?>
                                            <br>
                                            <br>
                                            <button type="submit" name="upload"  class="btn bg-info btn-info mx-1px text-95">ยืนยันการมัดจำ 50 %</button>
                                            <?php 
                                            }
                                            ?>    
                                       <?php
                                        }
                                        ?>
                                    </form>
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
                                    <form  method="POST" action="" id="upload_form1" enctype="multipart/form-data"> 
                                        <input type="file" name="img" id="Payment" >
                                        <?php foreach($res1 as $a){
                                            if($a['billing_status']==4 || $a['billing_status']==6 ){?>
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
                                            <br>
                                            <br>
                                            <button type="submit" name="upload"  class="btn bg-info btn-info mx-1px text-95">ยืนยันการชำระเงินคงเหลือ</button>
                                            <?php 
                                            }
                                            ?>    
                                       <?php
                                        }
                                        ?>
                                    </form>
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
                            <td rowspan="16">1</td>
                            <?php foreach($res1 as $a){?>
                            <td rowspan="16" style="width:20%">
                                <a href="<?php echo $a['design_img'];?>" target="_blank">
                                <img src="<?php echo $a['design_img'];?>" class="img-fluid"></a>
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
                        <img class="img-fluid" src="images/icon/Krung_Thai_Bank_logo.png" style="width:35px ; height:35px;"><span  class="text-500" style="color:#00a7e7; font-size:18px;"> ธนาคารกรุงไทย</span>
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
 <!-- filepond validation -->
<script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>

<!-- image editor -->
<script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-filter/dist/filepond-plugin-image-filter.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.js"></script>

<!-- toastify -->
<script src="assets/vendors/toastify/toastify.js"></script>

<!-- filepond -->
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
<script>
   function printContent(el) {
        var restorepage = $('body').html();
        var printcontent = $('#' + el).clone();
        $('body').empty().html(printcontent);
         window.print();
        //$('body').html(restorepage);
        location.reload();
     }
    
     // register desired plugins...
	FilePond.registerPlugin(
        // preview the image file type...
        FilePondPluginImagePreview,
        FilePondPluginFileValidateType,
    );
    var status=document.getElementById('status').textContent;
    var test;
    if(status=='รอการชำระค่ามัดจำ'||status=='กรุณาชำระค่ามัดใหม่' || status=='รอการชำระเงินคงเหลือ' ||status=='กรุณาชำระเงินคงเหลือใหม่'){
        test=true;
    }else{
        test=false;
    }
    // Filepond: Image Preview
    const inputelement= document.getElementById("Deposit");
     // Create the FilePond instance
     const pond = FilePond.create(inputelement, {
pAspectRatio: "        imageCro1:1",
        fileMetadataObject: {
          markup: [
            [
              "rect",
              {
                left: 0,
                right: 0,
                bottom: 0,
                height: "60px",
                backgroundColor: "rgba(0,0,0,.5)",
              },
            ],
            [
              "image",
              {
                right: "10px",
                bottom: "10px",
                width: "128px",
                height: "34px",
                src: "",
                fit: "contain",
              },
            ],
          ],
        },
        allowImagePreview: true, 
        allowImageFilter: false,
        allowImageExifOrientation: false,
        allowImageCrop: false,
        allowRemove:test, 
        acceptedFileTypes: ['image/png','image/jpg','image/jpeg'],
        fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
            // Do custom type detection here and return with promise
            resolve(type);
        })
      });
       
      //p

    $("#upload_form").submit(function (e) {
        e.preventDefault();
        var fd = new FormData(this);
        // append files array into the form data
        pondFiles = pond.getFiles();
        for (var i = 0; i < pondFiles.length; i++) {
            fd.append('file[]', pondFiles[i].file);
        }

        $.ajax({
                url: 'fileupload1.php',
                type: 'POST',
                data: fd,
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    console.log(data);
                    $.ajax({
                        url: 'billing.php',
                        type: 'POST',
                        data: {"billing_id":<?php echo  $billingId;  ?>,"filename":data},
                        dataType: 'JSON',
                        success: function (data) {
                            location.reload();
                        }
                    });
                },
                error: function (data) {
                    console.log(data);
                },
            }
        );
    });
       // Filepond: Image Preview
    const inel1=document.getElementById("Payment");
     // Create the FilePond instance
     const pond1 = FilePond.create(inel1, {
        imageCropAspectRatio: "1:1",
        fileMetadataObject: {
          markup: [
            [
              "rect",
              {
                left: 0,
                right: 0,
                bottom: 0,
                height: "60px",
                backgroundColor: "rgba(0,0,0,.5)",
              },
            ],
            [
              "image",
              {
                right: "10px",
                bottom: "10px",
                width: "128px",
                height: "100px",
                src: "",
                fit: "contain",
              },
            ],
          ],
        },
        allowImagePreview: true, 
        allowImageFilter: false,
        allowImageExifOrientation: false,
        allowImageCrop: false,
        allowRemove:test,
        acceptedFileTypes: ['image/png','image/jpg','image/jpeg'],
        fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
            // Do custom type detection here and return with promise
            resolve(type);
        })
      });
      <?php foreach($res1 as $a){ 
        if($a['slip_img_1']!=null){?>
            pond.addFile("<?php echo $a['slip_img_1'];?>");
    <?php } if($a['slip_img_2']!=null){?>
            pond1.addFile("<?php echo $a['slip_img_2'];?>");
    <?php }
        } 
    ?>
      $("#upload_form1").submit(function (e) {
        e.preventDefault();
        var fd = new FormData(this);
        // append files array into the form data
        pondFiles = pond1.getFiles();
        for (var i = 0; i < pondFiles.length; i++) {
            fd.append('file[]', pondFiles[i].file);
        }

        $.ajax({
                url: 'fileupload2.php',
                type: 'POST',
                data: fd,
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    console.log(data);
                    $.ajax({
                        url: 'billing1.php',
                        type: 'POST',
                        data: {"billing_id":<?php echo  $billingId;  ?>,"filename":data},
                        dataType: 'JSON',
                        success: function (data) {
                            location.reload();
                        }
                    });
                },
                error: function (data) {
                    console.log(data);
                },
            }
        );
    });
    


</script>
<?php
	require __DIR__.'../views/footer.php';
?>