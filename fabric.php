<?php
  //include('config.php');
  session_start();
  require __DIR__.'../views/header.php';
?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">N&C Polo Design</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="index.php" class="nav-link" >หน้าหลัก</a></li>
              <li class="nav-item active"><a href="fabric.php" class="nav-link text-primary" >ชนิดผ้า</a></li>
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

    <div class="hero-wrap hero-bread" style="background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.6) 0%,rgba(255, 255, 255, 0.7) 100%), url(images/fabric.jpg);">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs" style="color:black; font-size:30px"><span class="mr-2"><span>Fabric Type</span></p>
			<p style="color:black;font-size:20px ">ชนิดผ้าที่หลากหลาย ตัวเลือกที่ช่วยให้คุณได้เสื้อโปโลที่ใส่สบายและตอบโจทย์กับคุณมากที่สุด</p>
          </div>
        </div>
      </div>
    </div>

    
<div class="container" style = "padding-top:50px;">
<div class="row">
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/fabric/syntex.png" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 px-3">
    						<h3><a href="#">Syntex™ ราคาประหยัด คุ้มค่า </a></h3>
    						
    						<p class="bottom-area d-flex px-3">
    							<a href="#" class="add-to-cart text-center py-2 mr-1" data-toggle="modal" data-target="#exampleModalCenter"><span>See more<i class="ion-ios-add ml-1"></i></span></a>
    						</p>
    					</div>
    				</div> 
    			</div>

                      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
                        <div class="modal-dialog modal-dialog-centered" role="document" style=" justify-content:center;">
                          <div class="modal-content" style="width: 800px;" >
                            <div class="modal-header" >
                              <h5 class="modal-title" id="exampleModalLongTitle">Syntex™</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body" style="width: 800px;">
                  <p>เสื้อโปโล Syntex™ ราคาประหยัด คุ้มค่า สามารถนำไปใส่ได้ดูดี ลักษณะผ้าจะเงาลื่น ไม่หด ไม่ย้วย เป็นเอกลักษณ์ตามแบบของผ้าที่มีส่วนของ Polyester 100% สีสันสดใส แต่มีข้อเสียเรื่องการระบายอากาศ และอายุการใช้งานที่ต่ำ มีโอกาสขึ้นขุยเม็ดๆได้ง่าย</p>
                  <P>ข้อดี: ราคาถูกเหมาะกับโรงงานอุตสาหกรรมที่ต้องการทำจำนวนเยอะราคาไม่แพง หรือลูกค้าที่จะทำเพื่อแจกจ่าย เป็นต้น</p>

                  <h2>ขั้นต่ำในการผลิต: 30 ตัว</h2>
                  <h2>ระยะเวลาในการผลิต: 20 วันทำการ</h2>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>

                      <div class="col-sm col-md-6 col-lg ftco-animate">
                        <div class="product">
                          <a href="#" class="img-prod"><img class="img-fluid" src="images/fabric/syntex+.png" alt="Colorlib Template">
                            <div class="overlay"></div>
                          </a>
                          <div class="text py-3 px-3">
                            <h3><a href="#">Syntex +™ ยกระดับขึ้นมาจากเสื้อโปโล Syntex™</a></h3>
                            
                            <p class="bottom-area d-flex px-3">
                              <a href="#" class="add-to-cart text-center py-2 mr-1" data-toggle="modal" data-target="#exampleModalCenter1"><span>See more<i class="ion-ios-add ml-1"></i></span></a>
                            </p>
                          </div>
                        </div> 
                      </div>

                        <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
                <div class="modal-dialog modal-dialog-centered" role="document" style=" justify-content:center;">
                  <div class="modal-content" style="width: 800px;" >
                    <div class="modal-header" >
                      <h5 class="modal-title" id="exampleModalLongTitle">Syntex +™</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body" style="width: 800px;">
                                <p>Syntex +™เสื้อโปโล Syntex +™ ยกระดับขึ้นมาจากเสื้อโปโล Syntex™ ด้วยคุณสมบัติการระบายอากาศ และ ความคงทนที่สูงขึ้น ผลิตจากเส้นใย Micro Fiber ขนาดเล็ก เนื้อผ้ามีความยืดหยุ่นดี ให้ความรู้สึกนุ่มแต่ยังคงคุณสมบัติที่ดีของผ้า Syntex™ ไว้

              </p>
                                <P>ข้อดี: ราคาถูกเหมาะกับโรงงานอุตสาหกรรมที่ต้องการทำจำนวนเยอะราคาไม่แพง หรือลูกค้าที่จะทำเพื่อแจกจ่าย เป็นต้น</p>

                                <h2>ขั้นต่ำในการผลิต: 30 ตัว</h2>
                                <h2>ระยะเวลาในการผลิต: 20 วันทำการ</h2>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
         


    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/fabric/cool.png" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 px-3">
    						<h3><a href="#">Cool Blend™ มีส่วนผสมของ Cotton 35% และ Polyester 65%</a></h3>
    						
    						<p class="bottom-area d-flex px-3">
    							<a href="#" class="add-to-cart text-center py-2 mr-1" data-toggle="modal" data-target="#exampleModalCenter2"><span>See more<i class="ion-ios-add ml-1"></i></span></a>
    						</p>
    					</div>
    				</div>
    			</div>

                        <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
                <div class="modal-dialog modal-dialog-centered" role="document" style=" justify-content:center;">
                  <div class="modal-content" style="width: 800px;" >
                    <div class="modal-header" >
                      <h5 class="modal-title" id="exampleModalLongTitle">Cool Blend™</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body" style="width: 800px;">
                                <p>เสื้อโปโล ยอดนิยม คุณภาพเยี่ยม
              เสื้อโปโล Cool Blend™ มีส่วนผสมของ Cotton 35% และ Polyester 65% มีความนุ่มสวย และระบายอากาศได้ดี และใส่สบายเนื่องจากมีส่วนผสมของ Cotton สีสันสดใส ไม่หด ไม่ย้วย</p>
                                <P>ข้อดี: เนื้อผ้าใส่สบาย ไม่ร้อน ราคาไม่แพงมาก เหมาะสำหรับผู้ที่ต้องการเสื้อโปโลคุณภาพดี หรือพนักงานออฟฟิศทั่วไป</p>

                                <h2>ขั้นต่ำในการผลิต: 30 ตัว</h2>
                                <h2>ระยะเวลาในการผลิต: 20 วันทำการ</h2>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

                        <div class="col-sm col-md-6 col-lg ftco-animate">
                          <div class="product">
                            <a href="#" class="img-prod"><img class="img-fluid" src="images/fabric/cool+.png" alt="Colorlib Template">
                              <div class="overlay"></div>
                            </a>
                            <div class="text py-3 px-3">
                              <h3><a href="#">Cool Blend+™เหมาะกับใช้งานภายในออฟฟิศ สำนักงาน</a></h3>
                              
                              <p class="bottom-area d-flex px-3">
                                <a href="#" class="add-to-cart text-center py-2 mr-1" data-toggle="modal" data-target="#exampleModalCenter3"><span>See more<i class="ion-ios-add ml-1"></i></span></a>
                              </p>
                          </div>
                        </div>
                        </div>

              <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
              <div class="modal-dialog modal-dialog-centered" role="document" style=" justify-content:center;">
                <div class="modal-content" style="width: 800px;" >
                  <div class="modal-header" >
                    <h5 class="modal-title" id="exampleModalLongTitle">Cool Blend +™</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body" style="width: 800px;">
                              <p>เสื้อโปโล ยอดนิยม มาพร้อมคุณสมบัติระบายอากาศได้ดีขึ้น
            เสื้อโปโล Cool Blend +™ มีส่วนผสมของ Cotton 35% และ Micro Polyester 65% มีความนุ่มสวย ยืดหยุ่น ระบายอากาศได้ดี เหมาะกับใข้งานภายในออฟฟิศ สำนักงาน</p>
                              <P>ข้อดี: เนื้อผ้าใส่สบาย ไม่ร้อน ราคาไม่แพงมาก เหมาะสำหรับผู้ที่ต้องการเสื้อโปโลคุณภาพดี หรือพนักงานออฟฟิศทั่วไป</p>

                              <h2>ขั้นต่ำในการผลิต: 30 ตัว</h2>
                              <h2>ระยะเวลาในการผลิต: 20 วันทำการ</h2>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>       

    		</div> 
<!-- End Container  !-->
</div>

<div class="container" style = "padding-top:50px;">	
<div class="row">
        <div class="col-sm col-md-6 col-lg ftco-animate">
          <div class="product">
            <a href="#" class="img-prod"><img class="img-fluid" src="images/fabric/sport.png" alt="Colorlib Template">
              <div class="overlay"></div>
            </a>
            <div class="text py-3 px-3">
              <h3><a href="#">Sport Nano™</a></h3>
              
              <p class="bottom-area d-flex px-3">
                <a href="#" class="add-to-cart text-center py-2 mr-1" data-toggle="modal" data-target="#exampleModalCenter4"><span>See more<i class="ion-ios-add ml-1"></i></span></a>
              </p>
            </div>
          </div> 
        </div>

                    <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
                      <div class="modal-dialog modal-dialog-centered" role="document" style=" justify-content:center;">
                        <div class="modal-content" style="width: 800px;" >
                          <div class="modal-header" >
                            <h5 class="modal-title" id="exampleModalLongTitle">Sport Nano™</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body" style="width: 800px;">
                <p>เสื้อโปโล Tech ผ้าลื่น ดู Sport เหมาะกับการใส่ออกกำลังกายเสื้อโปโล Sport Nano™ ผลิตจากเนื้อผ้า 100% polyester แต่ด้วย Nano Technology ทำให้มีคุณสมบัติพิเศษ ในการระบายอากาศที่ดีกว่าเส้นใยธรรมชาติ เหมาะกับการใช้งานภายนอก สีสันสดใส ไม่ย้วย ระบายอากาศได้ดี และไม่เกิดกลิ่น</p>
                <P>ข้อดี: นอกจากนี้เสื้อที่ตัดเย็บด้วยผ้า Syntrel ดูแลรักษาง่าย ซักแห้งไว ยับยาก ไม่ต้องรีดเหมาะสำหรับการเดินทาง</p>

                <h2>ขั้นต่ำในการผลิต: 30 ตัว</h2>
                <h2>ระยะเวลาในการผลิต: 20 วันทำการ</h2>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

                    <div class="col-sm col-md-6 col-lg ftco-animate">
                      <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="images/fabric/prestige.png" alt="Colorlib Template">
                          <div class="overlay"></div>
                        </a>
                        <div class="text py-3 px-3">
                          <h3><a href="#">Prestige Lacoste™</a></h3>
                          
                          <p class="bottom-area d-flex px-3">
                            <a href="#" class="add-to-cart text-center py-2 mr-1" data-toggle="modal" data-target="#exampleModalCenter5"><span>See more<i class="ion-ios-add ml-1"></i></span></a>
                          </p>
                        </div>
                      </div> 
                    </div>

                      <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
              <div class="modal-dialog modal-dialog-centered" role="document" style=" justify-content:center;">
                <div class="modal-content" style="width: 800px;" >
                  <div class="modal-header" >
                    <h5 class="modal-title" id="exampleModalLongTitle">Prestige Lacoste™</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body" style="width: 800px;">
                              <p>เสื้อโปโล Prestige Lacoste™ ทอด้วยเส้นใย Cotton 35% และ Polyester 65% ด้วยลายผ้าแบบ Lacoste เนื้อผ้ามีความหนา และหนักกว่าทำให้ใส่แล้วทิ้งตัวสวย</p>
                              <P>ข้อดี: ผ้ามีความหนาลายสวยเหมือนลายลาคอสในห้าง ใส่ออกมาทรงสวย</p>

                              <h2>ขั้นต่ำในการผลิต: 30 ตัว</h2>
                              <h2>ระยะเวลาในการผลิต: 20 วันทำการ</h2>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
       


        <div class="col-sm col-md-6 col-lg ftco-animate">
          <div class="product">
            <a href="#" class="img-prod"><img class="img-fluid" src="images/fabric/silver.png" alt="Colorlib Template">
              <div class="overlay"></div>
            </a>
            <div class="text py-3 px-3">
              <h3><a href="#">เสื้อโปโล Tech คงทน ไร้กลิ่นอับ สีสด คงทน</a></h3>
              
              <p class="bottom-area d-flex px-3">
                <a href="#" class="add-to-cart text-center py-2 mr-1" data-toggle="modal" data-target="#exampleModalCenter6"><span>See more<i class="ion-ios-add ml-1"></i></span></a>
              </p>
            </div>
          </div>
        </div>

                      <div class="modal fade" id="exampleModalCenter6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
              <div class="modal-dialog modal-dialog-centered" role="document" style=" justify-content:center;">
                <div class="modal-content" style="width: 800px;" >
                  <div class="modal-header" >
                    <h5 class="modal-title" id="exampleModalLongTitle">Silver Tech™</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body" style="width: 800px;">
                              <p>เสื้อโปโล Silver Tech™ ผลิตจากเนื้อผ้า polyeser 100% ทอพิเศษด้วย Nano Technology ช่วยทำให้เนื้อผ้ามีคุณสมบัติแห้งไว และเคลือบสารยับยั้ยการเกิดกลิ่น และการเจริญเติบโตของแบคทีเรีย ไม่หดไม่ย้วย สีสันสดใส ไม่เกิดกลิ่น</p>
                              <P>ข้อดี: ซึมซับเหงื่อได้ดี ไม่เหนียวเหนอะหนะ สีสด คงทน ยับยั้งการเจริญเติบโตของแบคทีเรีย ทำให้ไม่เกิดกลิ่น เหมาะกับคนที่ทำงานกลางแจ้งแดดร้อนๆ หรือคนที่มีเหงื่อออกเยอะๆเวลาทำงาน</p>

                              <h2>ขั้นต่ำในการผลิต: 30 ตัว</h2>
                              <h2>ระยะเวลาในการผลิต: 20 วันทำการ</h2>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>

                      <div class="col-sm col-md-6 col-lg ftco-animate">
                        <div class="product">
                          <a href="#" class="img-prod"><img class="img-fluid" src="images/fabric/uv.png" alt="Colorlib Template">
                            <div class="overlay"></div>
                          </a>
                          <div class="text py-3 px-3">
                            <h3><a href="#">UV Tech™</a></h3>
                            
                            <p class="bottom-area d-flex px-3">
                              <a href="#" class="add-to-cart text-center py-2 mr-1" data-toggle="modal" data-target="#exampleModalCenter7"><span>See more<i class="ion-ios-add ml-1"></i></span></a>
                            </p>
                        </div>
                      </div>
                      </div>

            <div class="modal fade" id="exampleModalCenter7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered" role="document" style=" justify-content:center;">
              <div class="modal-content" style="width: 800px;" >
                <div class="modal-header" >
                  <h5 class="modal-title" id="exampleModalLongTitle">UV Tech™</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body" style="width: 800px;">
                            <p>เสื้อโปโล UV Tech™ ทอด้วยผ้า 2 ชั้น ด้านนอกเป็นผ้าตาข่าย polyester ด้านในเป็น Cotton หน้าเรียบ พิเศษช่วยระบายเหงื่อและอากาศออกด้านนอก มาพร้อมการเคลือบสารป้องกันรังสี UV เหมาะกับการใส่ทั้งภายใน และภายนอก</p>
                            <P>ข้อดี: บางเบา สวมใส่สบาย ระบายความร้อน มีกันแดดในตัว</p>

                            <h2>ขั้นต่ำในการผลิต: 30 ตัว</h2>
                            <h2>ระยะเวลาในการผลิต: 20 วันทำการ</h2>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>       

      </div> <!-- Endrow  !-->
</div>

<div class="container" style = "padding-top:50px;">
<div class="row">
        <div class="col-sm col-md-6 col-lg ftco-animate">
          <div class="product">
            <a href="#" class="img-prod"><img class="img-fluid" src="images/fabric/ultra.png" alt="Colorlib Template">
              <div class="overlay"></div>
            </a>
            <div class="text py-3 px-3">
              <h3><a href="#">Ultra Blend™</a></h3>
              
              <p class="bottom-area d-flex px-3">
                <a href="#" class="add-to-cart text-center py-2 mr-1" data-toggle="modal" data-target="#exampleModalCenter8"><span>See more<i class="ion-ios-add ml-1"></i></span></a>
              </p>
            </div>
          </div> 
        </div>

                    <div class="modal fade" id="exampleModalCenter8" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
                      <div class="modal-dialog modal-dialog-centered" role="document" style=" justify-content:center;">
                        <div class="modal-content" style="width: 800px;" >
                          <div class="modal-header" >
                            <h5 class="modal-title" id="exampleModalLongTitle">Ultra Blend™</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body" style="width: 800px;">
                <p>เสื้อโปโล Ultra Blend™ เนื้อผ้าหนานุ่ม มีความสวยเงางาม ใส่สบาย ระบายอากาศได้ดี คงทน ด้วยส่วนผสมของเส้นใยผ้าที่มี Cotton สูงถึง 70-80% แต่ไม่หดหรือย้วย เพราะมี Polyester อยู่ 20%</p>
                <P>ข้อดี: เนื้อผ้าหนานุ่มใส่สบาย ระบายความร้อนได้ดี ทรงสวย เนื่องจากมี % cotton ที่สูง มีอายุการใช้งานที่ยาวนาน</p>

                <h2>ขั้นต่ำในการผลิต: 30 ตัว</h2>
                <h2>ระยะเวลาในการผลิต: 20 วันทำการ</h2>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

                    <div class="col-sm col-md-6 col-lg ftco-animate">
                      <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="images/fabric/dryx.png" alt="Colorlib Template">
                          <div class="overlay"></div>
                        </a>
                        <div class="text py-3 px-3">
                          <h3><a href="#">Dry X Nano™</a></h3>
                          
                          <p class="bottom-area d-flex px-3">
                            <a href="#" class="add-to-cart text-center py-2 mr-1" data-toggle="modal" data-target="#exampleModalCenter9"><span>See more<i class="ion-ios-add ml-1"></i></span></a>
                          </p>
                        </div>
                      </div> 
                    </div>

                      <div class="modal fade" id="exampleModalCenter9" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
              <div class="modal-dialog modal-dialog-centered" role="document" style=" justify-content:center;">
                <div class="modal-content" style="width: 800px;" >
                  <div class="modal-header" >
                    <h5 class="modal-title" id="exampleModalLongTitle">Dry X Nano™</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body" style="width: 800px;">
                              <p>เสื้อโปโล Dry X Nano™ ทอด้วยเส้นในพิเศษ 2 ชั้น มาพร้อมคุณสมบัติแห้งไว (Dry) ระบายอากาศได้ดี ใส่สบายกว่าเสื้อโปโลผ้า Cotton กว่าถึง 5 เท่า ผ้าด้านนอกเป็นผ้าหน้าเรียบ ด้านในเป็นโครงสร้างตาข่าย ดูเรียบหรู และ เป็นทางการในเวลาเดียวกัน</p>
                              <P>ข้อดี: เนื้อผ้าใส่สบาย บางเบา ซึมซับเหงื่อและระบายอากาศได้ดี ไม่เหนียวเหนอะหนะ ป้องกันเชื้อแบคทีเรียไม่ทำให้เกิดกลิ่น</p>

                              <h2>ขั้นต่ำในการผลิต: 30 ตัว</h2>
                              <h2>ระยะเวลาในการผลิต: 20 วันทำการ</h2>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
       


        <div class="col-sm col-md-6 col-lg ftco-animate">
          <div class="product">
            <a href="#" class="img-prod"><img class="img-fluid" src="images/fabric/dryclass.png" alt="Colorlib Template">
              <div class="overlay"></div>
            </a>
            <div class="text py-3 px-3">
              <h3><a href="#">Dry Classic Nano™</a></h3>
              
              <p class="bottom-area d-flex px-3">
                <a href="#" class="add-to-cart text-center py-2 mr-1" data-toggle="modal" data-target="#exampleModalCenter10"><span>See more<i class="ion-ios-add ml-1"></i></span></a>
              </p>
            </div>
          </div>
        </div>

                      <div class="modal fade" id="exampleModalCenter10" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
              <div class="modal-dialog modal-dialog-centered" role="document" style=" justify-content:center;">
                <div class="modal-content" style="width: 800px;" >
                  <div class="modal-header" >
                    <h5 class="modal-title" id="exampleModalLongTitle">Dry Classic Nano™</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body" style="width: 800px;">
                              <p>เสื้อโปโล Dry Classic Nano™ มาพร้อมคุณสมบัติแห้งไว (Dry) ระบายอากาศได้ดี ใส่สบาย ลักษณะการทอเป็นลาย Lacoste เหมือนเสื้อโปโลที่เป็นที่นิยม เพื่อความภูมิฐาน เป็นทางการ</p>
                              <P>ข้อดี: เนื้อนุ่มลื่นให้ความรู้สึกสบายเวลาสวมใส่</p>

                              <h2>ขั้นต่ำในการผลิต: 30 ตัว</h2>
                              <h2>ระยะเวลาในการผลิต: 20 วันทำการ</h2>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>

                      <div class="col-sm col-md-6 col-lg ftco-animate">
                        <div class="product">
                          <a href="#" class="img-prod"><img class="img-fluid" src="images/fabric/drysmart.png" alt="Colorlib Template">
                            <div class="overlay"></div>
                          </a>
                          <div class="text py-3 px-3">
                            <h3><a href="#">Dry Smart Nano™</a></h3>
                            
                            <p class="bottom-area d-flex px-3">
                              <a href="#" class="add-to-cart text-center py-2 mr-1" data-toggle="modal" data-target="#exampleModalCenter11"><span>See more<i class="ion-ios-add ml-1"></i></span></a>
                            </p>
                        </div>
                      </div>
                      </div>

            <div class="modal fade" id="exampleModalCenter11" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered" role="document" style=" justify-content:center;">
              <div class="modal-content" style="width: 800px;" >
                <div class="modal-header" >
                  <h5 class="modal-title" id="exampleModalLongTitle">Dry Smart Nano™</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body" style="width: 800px;">
                            <p>เสื้อโปโล Dry Smart Nano™ ทอด้วยลายผ้าแบบ Twill ดูโดดเด่น มาพร้อมคุณสมบัติแห้งไว (Dry) ระบายอากาศได้ดี ใส่สบาย ทันสมัยด้วยลายผ้าที่ไม่เหมือนใคร</p>
                            <P>ข้อดี: ใส่สบาย ลายผ้าสวย อยู่ทรงดี ดูแลรักษาง่าย ไม่ขึ้นขน ไม่ต้องรีด ซึมซับเหงื่อได้ดี</p>

                            <h2>ขั้นต่ำในการผลิต: 30 ตัว</h2>
                            <h2>ระยะเวลาในการผลิต: 20 วันทำการ</h2>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>       

      </div> <!-- Endrow  !-->
</div>
<div class="container" style = "padding-top:50px;">
      <h2>เสื้อโปโล Size Chart</h2>
      <div class="container"  style="justify-content: center; align-items:center;">
            <img src="images/size2.jpg" style="align-items:center; width:100%;"></<img>
      </div>
      <table class="table table-bordered" style="width: 100%;">
        <thead>
          <tr>
            <th scope="col">Size(นิ้ว)</th>
            <th scope="col">SS</th>
            <th scope="col">S</th>
            <th scope="col">M</th>
            <th scope="col">L</th>
            <th scope="col">XL</th>
            <th scope="col">XXL</th>
            <th scope="col">3XL</th>
            <th scope="col">4XL</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">A:ความกว้างอก (ผู้ชาย)</th>
            <td>-</td>
            <td>36"</td>
            <td>38"</td>
            <td>40"</td>
            <td>42"</td>
            <td>44"</td>
            <td>46"</td>
            <td>48"</td>
          </tr>
          <tr>
            <th scope="row">B:ความยาวเสื้อ (ผู้ชาย)</th>
            <td>-</td>
            <td>27"</td>
            <td>28"</td>
            <td>29"</td>
            <td>30"</td>
            <td>31"</td>
            <td>32"</td>
            <td>33"</td>
          </tr>
          <tr>
            <th scope="row">A:ความกว้างอก (ผู้หญิง)</th>
            <td>-</td>
            <td>34"</td>
            <td>36"</td>
            <td>38"</td>
            <td>40"</td>
            <td>42"</td>
            <td>44"</td>
            <td>46"</td>
          </tr>
          <tr>
            <th scope="row">B:ความยาวเสื้อ (ผู้หญิง)</th>
            <td>-</td>
            <td>25"</td>
            <td>26"</td>
            <td>27"</td>
            <td>28"</td>
            <td>29"</td>
            <td>30"</td>
            <td>31"</td>
          </tr>
        </tbody>
      </table>
</div>


<?php
	require __DIR__.'../views/footer.php';
?>