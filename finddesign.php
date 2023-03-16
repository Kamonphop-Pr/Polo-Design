<link rel="stylesheet" href="assets/css/bootstrap.css">

<?php
  include_once('config.php');
  require __DIR__.'../views/header.php';
  session_start();
?>
    <script type="text/javascript" src="https://earthchie.github.io/jquery.Thailand.js/jquery.Thailand.js/dependencies/JQL.min.js"></script>
    <script type="text/javascript" src="https://earthchie.github.io/jquery.Thailand.js/jquery.Thailand.js/dependencies/typeahead.bundle.js"></script>
    <link rel="stylesheet" href="https://earthchie.github.io/jquery.Thailand.js/jquery.Thailand.js/dist/jquery.Thailand.min.css">
    <script type="text/javascript" src="https://earthchie.github.io/jquery.Thailand.js/jquery.Thailand.js/dist/jquery.Thailand.min.js"></script>	
    <link rel="stylesheet" href="assets/vendors/sweetalert2/sweetalert2.min.css">
    <script src="assets/vendors/sweetalert2/sweetalert2.all.min.js"></script>
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
              <li class="nav-item active"><a href="finddesign.php" class="nav-link text-primary" >วิธีการสั่งซื้อ</a></li>
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
    <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
        <h2 class="text-center">ขั้นตอนในการสั่งซื้อ</h2>
          <div class="row d-flex justify-content-center py-5"> 
            <div class="col-md-6">
                <div class="timeline-wrapper" style="border-left: 3px solid #343a40;">
                  <div class="node">
                    <h3>1. ใส่หมายเลขการออกแบบของคุณ</h3>
                    <p>หมายเลขการออกแบบ : เช่น NC2023999999999</p>
                  </div>
                </div>
                <div class="timeline-wrapper" style="border-left: 3px solid #17a2b8;">
                  <div class="node">
                    <h3>2. ใส่จำนวนเสื้อที่ต้องการ ตามขนาดไซส์</h3>
                    <p>ไซส์ : SS,S,M,XL,2XL,3XL,4XL</p>
                  </div>
                </div>
                <div class="timeline-wrapper" style="border-left: 3px solid #ffc107;">
                  <div class="node">
                    <h3>3. ใส่ชื่อ ที่อยู่ เบอร์โทร อีเมล</h3>
                    <p>สำหรับการจัดส่งสินค้า</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
              <div class="timeline-wrapper" style="border-left: 3px solid #fd7e14;">
                <div class="node">
                  <h3>4. เอ็นแอนด์ซีออกใบเสนอราคา</h3>
                  <p>เพื่อชำระเงินค่ามัดจำอย่างน้อย 50% ของราคาทั้งหมด</p>
                </div>
              </div>
              <div class="timeline-wrapper" style="border-left: 3px solid #20c997;">
                <div class="node">
                  <h3>5. ตรวจสอบสถานะของสินค้า</h3>
                  <p>เพื่อรอการชำระเงินคงค้างไว้อีก 50% หากสินค้าผลิตเสร็จ</p>
                </div>
              </div>
              <div class="timeline-wrapper" style="border-left: 3px solid #17a2b8;">
                <div class="node">
                  <h3>6. เอ็นแอนด์ซีออกใบเสร็จรับเงิน</h3>
                  <p>หากชำระเงินครบเต็มจำนวนสามารถออกใบเสร็จรับเงินได้และจะทำการจัดส่งสินค้า</p>
                </div>
              </div>
              </div>
            </div>
        <div class="col-md-12">
          <?php if (isset($_SESSION['username'])) {  ?>  
            <form class="subscribe-form" id="MyForm" method="POST">
            <div class="form-group d-flex">
              <input type="text" class="form-control" name="design" id="design" placeholder="กรุณาใส่หมายเลขการออกแบบ เช่น NC2023222222342" required>
              <button id="showd" class="submit px-5 text-nowrap">ตรวจสอบหมายเลขการออกแบบ</button>
            </div>
          </form>
                <?php }
                else { ?>
                <h1 class="text-danger text-center">กรุณาลงชื่อเข้าใช้หากทำการสั่งซื้อ</h1>
              <?php } ?>
          

        </div>
        </div>
        
      </div>
    </section>
    <div class="container pt-5" id="ShowProgress">
      <div class="row d-flex justify-content-center ">
        <div class="col-md-12 m-4">
          <div class="progress" style="height: 5px;">
            <div class="progress-bar1" role="progressbar" style="width: 50%; background-color:#17a2b8;" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="progress-bar2" role="progressbar" style="width: 50%; background-color:#ffc107;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <button id="First" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-dark rounded-pill" style="width: 2.5rem; height:2.5rem;" disabled><i class="bi bi-list-check"></i></button>
          <button id="Second" class="position-absolute top-0 start-50 end-2 translate-middle btn btn-sm btn-cyan rounded-pill" style="width: 2.5rem; height:2.5rem;" disabled>
          <img src="images/icon/icons8-polo-shirt-64.png"  height=20 width=20/>
          </button>
          <button id="Third" class="position-absolute top-0 start-100 end-2 translate-middle btn btn-sm btn-warning rounded-pill" style="width: 2.5rem; height:2.5rem;" disabled><i class="bi bi-truck"></i></button>
        </div>
        <div class="position-relative m-4">
          <div class="col-sm-2 col-md-3 text-secondary text-center mt-2 position-absolute top-0 start-0 translate-middle">รายละเอียด<br>การออกแบบ</div>
          <div class="col-sm-2 col-md-3 text-secondary text-center mt-2 position-absolute top-0 start-50 translate-middle">จำนวนเสื้อ<br>ในการสั่งซื้อ</div>
          <div class="col-sm-2 col-md-3 text-secondary text-center mt-2 position-absolute top-0 start-100 translate-middle">ที่อยู่ใน<br>การจัดส่ง</div>
        </div>

      <div class="col-md-12 pt-5">
        <div id="Nc">
          <img id="Ncshow" class="img-fluid">
        </div>
        <div id="error">


        <div class="error-page container">
            <div class="col-md-12 col-12">
                <img class="img-error" src="assets/images/samples/error-404.png" height="550" width="1000" alt="Not Found">
                <div class="text-center">
                    <h1 class="error-title">ไม่พบ</h1>
                    <p class='fs-5 text-gray-600'>ข้อมูลการออกแบบของคุณ</p>
                </div>
            </div>
        </div>


    </div>
        <form class="needs-validation" novalidate id="MyForm1" action="" method="POST">
        <div id="size">
          <h3 class="text-center" >กรุณาใส่จำนวน และ ชนิดของผ้า เพื่อทำการสั่งซื้อ</h3><br>
          
          <div class="row" id="">
            <?php
              $sql1 = "SELECT * FROM size where size_gender=0";
              $stmt1 = $conn->prepare($sql1);
              $stmt1->execute();
              $res1 = $stmt1->get_result();

              $sql2 = "SELECT * FROM size where size_gender=1";
              $stmt2 = $conn->prepare($sql2);
              $stmt2->execute();
              $res2 = $stmt2->get_result();

              $sql3="SELECT * FROM frabic";
              $stmt3 = $conn->prepare($sql3);
              $stmt3->execute();
              $res3 = $stmt3->get_result();
              $conn->close();
            ?>
            <label class="form-label" >เนื้อผ้า</label>
            <div class="col-md-12 text-center">
            <select class="form-control" name="frabic" id="frabic" required>
            <option value="">---กรุณาเลือกเนื้อผ้า---</option>
            <?php foreach($res3 as $a){?>
              <option value="<?php echo $a['frabic_id'];?>"><?php echo $a['frabic_name'];?></option>
            <?php
            }
            ?>
            </select>
            <input class="form-control" id="pricefrabic" name="pricefrabic"  required readonly>บาท
            </div>
            <span class="pt-5">ผู้ชาย :</span>
            <?php foreach($res1 as $a){?>
              <div class="col-sm-3 text-center">
                <label class="form-label" ><?php echo "ไซส์ ".$a['size_name'];?></label>
                <input class="form-control" id="quantity"  min="0" max="5000" name="quantity" placeholder=0 type="number">
                <label class="form-label" ><?php echo "+".$a['size_price'];?></label>
                <input class="form-control" id="price" name="price" placeholder=0 value=<?php echo $a['size_price'];?> hidden="hidden">
              </div>
            <?php
            }
            ?>
                
          </div>

          <br>
          <br>
          <span>ผู้หญิง :</span>
          <div class="row" id="">
          <?php foreach($res2 as $a){?>
            <div class="col-sm-3 text-center">
                <label class="form-label" ><?php echo "ไซส์ ".$a['size_name'];?></label>
                <input class="form-control" id="quantity"  min="0" max="5000" name="quantity" placeholder=0 type="number">
                <label class="form-label" ><?php echo "+".$a['size_price'];?></label>
                <input class="form-control" id="price" name="price" placeholder=0 value=<?php echo $a['size_price'];?> hidden="hidden">
              </div>
            <?php
            }
            ?>

          </div>
        <br>
        </div>
        <div class="row" id="Address">
        <h3 class="text-center">ที่อยู่ในการจัดส่ง</h3>
          <div class="col-md-6 py-2">
            <input type="text" class="form-control" name="fname" id="fname" placeholder="ชื่อ"  pattern="[ก-๙]+" maxlength="100" required>
            <div class="invalid-feedback">กรุณากรอกชื่อของคุณเป็นภาษาไทยและห้ามมีช่องว่าง</div>
            <div class="valid-feedback">คุณสามารถใช้ชื่อนี้ได้</div>
          </div>
          <div class="col-md-6 py-2">
            <input type="text" class="form-control" name="lname" id="lname" placeholder="นามสกุล" pattern="[ก-๙]+" maxlength="100"  required>
            <div class="invalid-feedback">กรุณากรอกนามสกุลของคุณเป็นภาษาไทยและห้ามมีช่องว่าง</div>
            <div class="valid-feedback">คุณสามารถใช้นามสกุลนี้ได้</div>
          </div>
          <div class="col-md-6 py-2">
            <input type="tel" class="form-control" id="phone" name="number" placeholder="โทรศัพท์" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"  required>
            <div class="invalid-feedback">กรุณากรอกเบอร์โทรให้อยู่ในรูปแบบ 999-999-9999</div>
            <div class="valid-feedback">คุณสามารถใช้เบอร์นี้ได้</div>
          </div>
          <div class="col-md-6 py-2">
            <input type="email" class="form-control" id="email" name="email" placeholder="อีเมล"  required>
            <div class="invalid-feedback">กรุณากรอกอีเมลให้อยู่ในรูปแบบ xxx@xxxx</div>
            <div class="valid-feedback">คุณสามารถใช้อีเมลนี้ได้</div>
          </div>
          <div class="col-md-6 py-2">
            <input type="text" class="form-control"  id="sub_district" name="sub_district"  placeholder="แขวง/ตำบล" required>
            <div class="invalid-feedback">กรุณากรอกแขวงของคุณ</div>
            <div class="valid-feedback">คุณสามารถใช้เบอร์นี้ได้</div>
          </div>
          <div class="col-md-6 py-2">
          <input type="text" class="form-control"id="district" name="district"  placeholder="เขต/อำเภอ" required>
          <div class="invalid-feedback">กรุณากรอกแขวงของคุณ</div>
            <div class="valid-feedback">คุณสามารถใช้เบอร์นี้ได้</div>
          </div>
          <div class="col-md-6 py-2">
          <input type="text" class="form-control" id="province" name="province"  placeholder="จังหวัด" required>
          <div class="invalid-feedback">กรุณากรอกแขวงของคุณ</div>
            <div class="valid-feedback">คุณสามารถใช้เบอร์นี้ได้</div>
          </div>
          <div class="col-md-6 py-2">
          <input type="text" class="form-control" id="postcode" name="postcode"  placeholder="รหัสไปรษณีย์" required>
          <div class="invalid-feedback">กรุณากรอกแขวงของคุณ</div>
            <div class="valid-feedback">คุณสามารถใช้เบอร์นี้ได้</div>
          </div>
          <div class="col-md-12 py-2">
            <textarea rows="2" cols="" class="form-control" id="details" name="details"  placeholder="รายละเอียดที่อยู่" required></textarea >
            <div class="invalid-feedback">กรุณากรอกที่อยู่ของคุณ</div>
            <div class="valid-feedback">คุณสามารถใช้ที่อยู่นี้ได้</div>
          </div>
        </div>    
        <div class="form-group d-flex text-end py-4">
          <button id="checked" type="submit" class="btn btn-info px-5 text-nowrap" style="width:100% ;hight:50%;">ตรวจสอบ</button>
        </div>  
        </form>
        <div class="form-group d-flex text-end py-4">
          <button id="quan" class="btn btn-dark submit px-5 text-nowrap" style="width:100% ;hight:50%;">ยืนยัน</button>
        </div>
            
      </div>
      </div>
    </div> 
<script>
  (() => {
          'use strict'

          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          const forms = document.querySelectorAll('.needs-validation')

          // Loop over them and prevent submission
          Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
              if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                $("#quan").hide();
              }

              form.classList.add('was-validated')
            }, false)
          })
        })();  
  $.Thailand({
                $district: $("#sub_district"), // input ของตำบล
                $amphoe: $("#district"), // input ของอำเภอ
                $province: $("#province"), // input ของจังหวัด
                $zipcode: $("#postcode") // input ของรหัสไปรษณีย์
              });
  $(document).ready(function(){
    //$("#ShowProgress").hide();

    $(".progress-bar1").hide();
    $(".progress-bar2").hide();
    $("#size").hide();
    $("#quan").hide();
    $("#Address").hide();
    $("#checked").hide();
    var design_id;
    $("#First").click(function () {
      $(".progress-bar1").hide();
      $(".progress-bar2").hide();
      $("#size").hide();
      $('#Nc').show();
      $("#Address").hide();
      $("#quan").hide();
      $("#Third").attr("disabled","disabled");
    });

    $("#Second").click(function () {
      $(".progress-bar1").show();
      $(".progress-bar2").hide();
      $("#Third").removeAttr("disabled");
      $("#size").show();
      $("#Address").hide();
      $('#Nc').hide();
      $("#quan").hide();
      $("#checked").hide();
    });

    $("#Third").click(function () {
      $("#checked").show();
      $(".progress-bar2").show();
      $("#Address").show();
      $("#size").hide();
      $('#Nc').hide();
    });
    $("#checked").click(function () {
      $(document).on('submit','#MyForm1',function(e){
        e.preventDefault();
        $("#quan").show();
        
      });

    });
    var frabicid;
    var frabicprice;
    $('select').on('change', function() {
      frabicid=this.value;
      if(frabicid==0){
        $('#pricefrabic').attr("value",0);
      }
      $.ajax({
        method:"POST",
        url: "Checked_price.php",
        data: {'frabic':frabicid},
        dataType: 'json',
        success: function(data){
            $('#pricefrabic').attr("value",data[0].frabic_price);
        }
      });
    });
    $("#showd").click(function () {
      $(document).on('submit','#MyForm',function(e){
        e.preventDefault();
          $.ajax({
              method:"POST",
              url: "Checked_design.php",
              data: $(this).serialize(),
              dataType: 'json',
              success: function(data){
                console.log(data);
                
                if(data.length==0){
                  $(".progress-bar1").hide();
                  $(".progress-bar2").hide();
                  $("#Second").attr("disabled","disabled");
                  $('#Ncshow').removeAttr("src");
                  $("#size").hide();
                  $("#quan").hide();
                  $("#Address").hide();
                  $("#checked").hide();
                  $('#error').show();
                }else{

                  $("#First").removeAttr("disabled");
                  $("#Second").removeAttr("disabled");
                  $(".progress-bar1").hide();
                  $('#error').hide();
                  $('#Ncshow').attr("src",data[0].design_img);
                }
                
               
              }
            });
        });
    });
    $("#quan").click(function () {
      var values = $("input[name='quantity']")
              .map(function(){return $(this).val();}).get();
      var prices = $("input[name='price']")
              .map(function(){return $(this).val();}).get();
      var map_val = [];        
      var k=0;
      let total=0,qu=0;
      var fname,lname,phone,detalis,email;
        design_id=document.getElementById('design').value;
        frabicid=document.getElementById('frabic').value;
        frabicprice=document.getElementById('pricefrabic').value;
        fname=document.getElementById('fname').value;
        lname=document.getElementById('lname').value;
        email=document.getElementById('email').value;
        phone=document.getElementById('phone').value;
        detalis=document.getElementById('details').value;
        detalis+="   "+document.getElementById('sub_district').value;
        detalis+="   "+document.getElementById('district').value;
        detalis+="   "+document.getElementById('province').value;
        detalis+="   "+document.getElementById('postcode').value;
        console.log(design_id,frabicid,frabicprice,fname,lname,phone,detalis);
      for(var i=0;i<values.length;i++){
        if(values[i]!=0 && values[i]!=''){
            total+=parseInt(values[i])*(parseFloat(prices[i]).toFixed(2)*1+parseInt(frabicprice));
            map_val[k]={"size_id":(i+1),"quantity":values[i],"price":parseFloat(prices[i]).toFixed(2)*1+parseInt(frabicprice)};
            qu+=parseInt(values[i]);
            console.log(qu);
            console.log(total);
            k++;
            
        }
      }
      console.log(map_val);
      console.log(JSON.stringify(map_val));
      console.log(total);
      if(map_val.length!=0 && qu>=30){
        $.ajax({
              method:"POST",
              url: "Checked_Address.php",
              data: { "fname":fname,
                      "lname":lname,
                      "email":email,
                      "address":detalis,
                      "phone":phone,
                      "net_price":total,
                      "deposit":(total/2),
                      "design_id":design_id,
                      "frabic_id":frabicid,
              },
              dataType: 'json',
              success: function(data){
                var lastid=data;
                console.log(lastid);
                for(var j=0;j<values.length;j++){
                  if(values[j]!=0 && values[j]!=''){
                      $.ajax({
                        method:"POST",
                        url: "Checked_quantity.php",
                        data: {"billing_id":lastid,"size_id":(j+1),"quantity":values[j],"price":parseFloat(prices[j]).toFixed(2)*1+parseInt(frabicprice)},
                        dataType: 'json',
                        success: function(data){
                        console.log(data);
                        },
                      });
                    }
                  }
                  swal.fire({
                    title: "หมายเลขการสั่งซื้อของคุณคือ : "+lastid,
                    text: "กรุณาคลิ๊กปุ่ม OK เพื่อไปยังหน้าการค้นหาของคุณ",
                    icon: "success",
                  }).then(function(isConfirm) {
                    if (isConfirm) {
                      location.href="create_invoice.php?billing_id="+lastid;
                    }
                  });
              },
            });

      }else{
        swal.fire({
          title: "จำนวนขั้นต่ำอย่างน้อย 30 ตัวเท่านั้น",
          text: "กรุณาคลิ๊กปุ่ม OK",
          icon: 'error',
        });
        $(".progress-bar1").show();
        $(".progress-bar2").hide();
        $(".progress-bar3").hide();
        $(".progress-bar4").hide();
        $(".progress-bar5").hide();
        $("#Third").removeAttr("disabled");
        $("#size").show();
        $("#Address").hide();
        $('#Nc').hide();
        $("#quan").hide();
        $("#checked").hide();
      }
      
      
      
    });
  });
</script>
<?php
	require __DIR__.'../views/footer.php';
?>