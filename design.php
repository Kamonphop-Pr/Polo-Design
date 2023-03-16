<?php
  include('config.php');
?>
<!DOCTYPE html>
<html lang="th">
  <head>
  <title>N&C Polo Design</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="images/polo/Logo.png">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
	  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	  <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendors/sweetalert2/sweetalert2.min.css">
    <script src="assets/vendors/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="js/fabric.js"></script>

     <style>
            *{
                font-family: 'Kanit', sans-serif;
            }
            td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }	.ftco-navbar-light .navbar-nav > .nav-item > .nav-link {
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
        
	</style>
<?php
  session_start();
require __DIR__.'/views/partials/style.php';
?>
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
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
      <a class="navbar-brand" href="index.php">N&C Polo Design</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="index.php" class="nav-link" >หน้าหลัก</a></li>
              <li class="nav-item"><a href="fabric.php" class="nav-link" >ชนิดผ้า</a></li>
              <li class="nav-item active"><a href="design.php" class="nav-link text-primary">ออกแบบเสื้อ</a></li>
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
    <div class="hero-wrap hero-bread" style="background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.6) 0%,rgba(255, 255, 255, 0.7) 100%), url(images/background.jpg);">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs" style="color:black; font-size:30px"><span class="mr-2"><span>Design</span></p>
			<p style="color:black;font-size:20px ">ออกแบบเสื้อที่เป็นเอกลักษณ์ของคุณ</p>
          </div>
        </div>
      </div>
    </div>

    <main id="main">
    <!-- ======= About Section ======= -->
    <section id="designer" class="about">
      <br><br>
      <div class="container">
      <form class="subscribe-form py-5" action="design_edit.php" method="POST">
      <div class="form-group d-flex">
        <input type="text" class="form-control" name="design" value="<?php if(isset($design)){ echo $design; }?>"  placeholder="กรุณาใส่หมายเลขการออกแบบ เช่น NC2023222222342" required onfocus="this.select();">
        <button id="showd" class="submit px-5 text-nowrap">ตรวจสอบหมายเลขการออกแบบ</button>
      </div>
      </form>
        <div class="row content">
          <div class="col-md-5">
            <div class="content" id="font">
              <canvas id="mainscreen" ></canvas>
              </div>
              <div class="content" id="bac">
              <canvas id="mainscreen1" ></canvas>
            </div>
            <div class="content" id="merge">
            <canvas id="myCanvas" width="1200" height="700"></canvas>
            </div>
            <div style="padding:15px;" class="clear:both;">
                <i>หากต้องการลบ เลือก object และกด delete</i>
              </div>
          </div>
          <div class="col-md-1" data-aos="fade-right" data-aos-delay="200">
              <a class="btn btn-black" id="Show_Front" onclick="Show_Front()">
              <img src="images/polo/icon-front.png" height=50 width=50 class="btn btn-secondary">
              ด้านหน้า
              </a>
              <br><br>
              <a id="Show_Back" class="btn btn-black"  onclick="Show_Back()">
              <img src="images/polo/icon-back.png" height=50 width=50 class="btn btn-secondary">
               ด้านหลัง
              </a>
              
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos-delay="200">
            <div class="container mt-3">
            <button id="Show_Body"class="btn btn-primary" onclick="Show_Body()">สีเสื้อ</button>
                
            <button id="Show_Shirt" class="btn btn-primary" onclick="Show_Shirt()">สาบเสื้อ</button>
            <button id="Show_Pocket" class="btn btn-primary" onclick="Show_Pocket()">กระเป๋าเสื้อ</button>
            <button id="Show_Sleeve" class="btn btn-primary" onclick="Show_Sleeve()">แขนเสื้อ</button>
            <button id="Show_Collar" class="btn btn-primary" onclick="Show_Collar()">ปกเสื้อ</button>
            
             <!-- Show_Patttern ยังทำไมได้
              <button id="Show_Show_Pattern" class="btn btn-primary" onclick="Show_Pattern()">แบบเสื้อ</button> 
            <br><br>
            <div id="Spattern">
              <a class="btn btn-white" id="SPattern1">
              <img src="images/polo/Style1.png" height=100 width=100 class="btn btn-secondary">
              </a>
              <a class="btn btn-white" id="SPattern2">
              <img src="images/polo/pattern018.png" height=100 width=100 class="btn btn-secondary">
              </a>
            </div>-->
              <!-- Show_Boy -->
              <div id="bgcolor"class="bgcolor" style="padding:15px;text-align:center" >
                <div><strong>เปลี่ยนสีเสื้อ</strong></div>
                <?php
                    require __DIR__.'../views/partials/color.php';
                ?>
                
              </div>


              <!-- Show_Pattern -->
              <div id="bgcolor1" class="bgcolor1" style="padding:15px;text-align:center;" >
              
              <div><strong>เปลี่ยนสีแบบเสื้อ</strong></div>
              
                <?php
                    //require __DIR__.'../views/partials/color.php';
                ?>
              </div>
              </div>


              <!-- Show_Shirt -->
              <div id="bgcolor2" class="bgcolor2" style="padding:15px;text-align:center" >
                <div><strong>เปลี่ยนสีสาบเสื้อ</strong></div>
                <?php
                    require __DIR__.'../views/partials/color.php';
                ?>
              </div>


              <div id="bgcolor3" class="bgcolor3" style="padding:15px;text-align:center;" >
                <div><strong>เปลี่ยนสีกระเป๋า</strong></div>
                <?php
                    require __DIR__.'../views/partials/color.php';
                ?>
              </div>

              <div id="bgcolor4" class="bgcolor4" style="padding:15px;text-align:center;" >
                <div><strong>เปลี่ยนสีแขนเสื้อ</strong></div>
                <?php
                    require __DIR__.'../views/partials/color.php';
                ?>
              </div>

              <div id="bgcolor5" class="bgcolor5" style="padding:15px;text-align:center;" >
                <div><strong>เปลี่ยนสีปกเสื้อ</strong></div>
                <?php
                    require __DIR__.'../views/partials/color.php';
                ?>
              </div>
              <div id="bgcolor9" class="bgcolor9" style="padding:15px;text-align:center;" >
                <div><strong>เปลี่ยนสีแบบเสื้อ</strong></div>
                <?php
                    require __DIR__.'../views/partials/color.php';
                ?>
              </div>
              <div class="container">
                <div id="Front">
                <br>
                  <label><strong>เพิ่มตัวอักษรด้านหน้า</strong></label>
                  <input type="text" class="txt form-control-sm" id="txt">
                  <input type="button" class="addtxt btn btn-primary" name="Add" value="Add">
                  <div id="bgcolor6" class="bgcolor6" style="padding:15px;text-align:center;" >
                    <div><strong>เปลี่ยนสีข้อความด้านหน้า</strong></div>
                      <?php
                          require __DIR__.'../views/partials/color.php';
                      ?>
                  </div>

                  <div class="imageupload">
                    <div><strong>เพิ่มรูปภาพ</strong></div>
                    <input id="imagebroswer" type="file" accept="image/png, image/jpeg , image/jpg" >
                  </div>
                  <br>

                </div>

                <div id="Back">
                <br>
                  <label><strong>เพิ่มตัวอักษรด้านหลัง</strong></label>
                  <input type="text" class="txt1 form-control-sm" id="txt">
                  <input type="button" class="addtxt1 btn btn-primary" name="Add" value="Add">
                  <div id="bgcolor77" class="bgcolor77" style="padding:15px;text-align:center;" >
                    <div><strong>เปลี่ยนสีข้อความด้านหลัง</strong></div>
                      <?php
                          require __DIR__.'../views/partials/color.php';
                      ?>
                  </div>

                  <div class="imageupload">
                    <div><strong>เพิ่มรูปภาพ</strong></div>
                    <input id="imagebroswer1" type="file" accept="image/png, image/jpeg , image/jpg" >
                  </div>
                  <br>
                </div>

                <?php if (isset($_SESSION['username'])) {  ?>  
                  <div class="save py-3 mb-2 ">
                      <button type="button" id="primary" class="btn btn-warning" style="width: 100%">Save</button>
                  </div>
                  <br>  
                <?php }
                else { ?>
                <div class="py-3 mb-2 ">
                  <a href="admin/auth_login.php" class="nav-link text-white btn btn-black">กรุณาลงชื่อเข้าใช้หากต้องการบันทึกข้อมูลการออกแบบของคุณคลิ๊กที่นี่</a>
                </div><br>
              <?php } ?>
              </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section><!-- End About Section -->
  </main>




<footer class="ftco-footer bg-light ftco-section">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"style="font-size:18px">N&C</h2>
              <p style="font-size:18px">“There’s no shortage of remarkable ideas, what’s missing is the will to execute them.” – Seth Godin</p>
              
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2"style="font-size:18px">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block"style="font-size:18px">Home</a></li>
                <li><a href="#" class="py-2 d-block"style="font-size:18px">Product</a></li>
                <li><a href="#" class="py-2 d-block"style="font-size:18px">Design</a></li>
                <li><a href="#" class="py-2 d-block"style="font-size:18px">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"style="font-size:18px">Help</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
				  			<li><a href="#" class="py-2 d-block"style="font-size:18px">Contact</a></li>
	              </ul>
	              
	                
	              
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2"style="font-size:18px">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text"style="font-size:18px">N&C </span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text"style="font-size:18px"></span></a></span></li>
					<li><a href="#"><span class="icon icon-phone"></span><span class="text"style="font-size:18px"></span></a></span></li>
	                <li><a href="#"><span class="icon icon-envelope" style="padding-right:22px;"></span><span class="text"style="font-size:18px"></span></a></li>

	              </ul>
	            </div>
            </div>
          </div>
        </div>
        
      </div>
    </footer>

        
      
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
<?php
    require __DIR__.'/views/partials/customize.php';
    require __DIR__.'/views/partials/display.php';
?>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/main.js"></script>
  </body>

</html>