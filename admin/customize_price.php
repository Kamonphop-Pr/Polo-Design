<?php
require('../config.php');
require __DIR__.'/header.php';
session_start();
$sql1 = "SELECT * FROM size where size_gender=0;";
$stmt1 = $conn->prepare($sql1);
$stmt1->execute();
$res1 = $stmt1->get_result();
$sql2 = "SELECT * FROM size where size_gender=1;";
$stmt2 = $conn->prepare($sql2);
$stmt2->execute();
$res2 = $stmt2->get_result();
$sql3 = "SELECT * FROM frabic;";
$stmt3 = $conn->prepare($sql3);
$stmt3->execute();
$res3 = $stmt3->get_result();

$index=0;

if(isset($_GET['boy'])){
    $size_id=array();
    $size=array();
    $price=array();
    foreach($_GET['by'] as $key => $values) {
        foreach($values as $index => $value) {
            // do something with $key, $index and $value
            if($key=='size_id'){
                $size_id[$index]=$value;
            }
            if($key=='size'){
                $size[$index]=$value;
            }
            if($key=='price'){
                $price[$index]=$value;
            }
            
        }
       
    }
    $i=0;
    while($i< sizeof($size_id)){
        $sql= "UPDATE `size` SET `size_name`='$size[$i]',`size_price`=$price[$i] WHERE size_id=$size_id[$i]";
        $conn->query($sql);
        $i++;
    }
    $conn->close();
    //echo '<pre>'; print_r($size_id); echo '</pre>';
    //echo '<pre>'; print_r($size); echo '</pre>';
    //echo '<pre>'; print_r($price); echo '</pre>';
    
    header("Location: customize_price.php");  
  }  
  if(isset($_GET['girl'])){
    $size_id=array();
    $size=array();
    $price=array();
    foreach($_GET['gl'] as $key => $values) {
        foreach($values as $index => $value) {
            // do something with $key, $index and $value
            if($key=='size_id'){
                $size_id[$index]=$value;
            }
            if($key=='size'){
                $size[$index]=$value;
            }
            if($key=='price'){
                $price[$index]=$value;
            }
            
        }
       
    }
    $i=0;
    while($i< sizeof($size_id)){
        $sql= "UPDATE `size` SET `size_name`='$size[$i]',`size_price`=$price[$i] WHERE size_id=$size_id[$i]";
        $conn->query($sql);
        $i++;
    }
    $conn->close();
    //echo '<pre>'; print_r($size_id); echo '</pre>';
   // echo '<pre>'; print_r($size); echo '</pre>';
   //echo '<pre>'; print_r($price); echo '</pre>';
    
    header("Location: customize_price.php");  
  }  
  if(isset($_GET['frabic'])){
    $size_id=array();
    $size=array();
    $price=array();
    foreach($_GET['fb'] as $key => $values) {
        foreach($values as $index => $value) {
            // do something with $key, $index and $value
            if($key=='size_id'){
                $size_id[$index]=$value;
            }
            if($key=='size'){
                $size[$index]=$value;
            }
            if($key=='price'){
                $price[$index]=$value;
            }
            
        }
       
    }
    $i=0;
    while($i< sizeof($size_id)){
        $sql= "UPDATE `frabic` SET `frabic_name`='$size[$i]',`frabic_price`=$price[$i] WHERE frabic_id=$size_id[$i]";
        $conn->query($sql);
        $i++;
    }
    $conn->close();
    //echo '<pre>'; print_r($size_id); echo '</pre>';
    //echo '<pre>'; print_r($size); echo '</pre>';
    //echo '<pre>'; print_r($price); echo '</pre>';
    
    header("Location: customize_price.php");  
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
                        
                        <li class="sidebar-item ">
                            <a href="index.php" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>ข้อมูลคำสั่งซื้อ</span>
                            </a>
                        </li>
                        <li class="sidebar-item active ">
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
                            <h3>การตั้งค่าราคา</h3>
                            <p class="text-subtitle text-muted">สำหรับการตั้งค่าราคาไซส์และราคาเนื้อผ้าเท่านั้น</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Form Layout</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- // Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">แก้ไขราคาไซส์ผู้ชายเพิ่มเติมจากการเลือกเนื้อผ้า</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="customize_price.php" method="GET">
                                            <div class="row">
                                                <?php foreach($res1 as $a){?>
                                                <input type="hidden" name="by[size_id][]" class="form-control" value="<?php echo  $a['size_id']; ?>">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">ไซส์</label>
                                                        <input type="text" name="by[size][]" class="form-control" value="<?php echo $a['size_name']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="last-name-column">ราคา (บาท)</label>
                                                        <input type="text" name="by[price][]" class="form-control" value="<?php echo $a['size_price']; ?>">
                                                    </div>
                                                </div>
                                                <?php
                                                }
                                                ?>
                                                  <div class="col-12 d-flex justify-content-center pt-4">
                                                    <button type="submit" name="boy" class="btn btn-primary me-1 mb-1 w-100">Submit</button>
                                                   
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic multiple Column Form section end -->
                <!-- // Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">แก้ไขราคาไซส์ผู้หญิงเพิ่มเติมจากการเลือกเนื้อผ้า</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="customize_price.php" method="GET">
                                            <div class="row">
                                                <?php foreach($res2 as $a){?>
                                                <input type="hidden" name="gl[size_id][]" class="form-control" value="<?php echo  $a['size_id']; ?>">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">ไซส์</label>
                                                        <input type="text" name="gl[size][]" class="form-control" value="<?php echo $a['size_name']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="last-name-column">ราคา (บาท)</label>
                                                        <input type="text" name="gl[price][]" class="form-control" value="<?php echo $a['size_price']; ?>">
                                                    </div>
                                                </div>
                                                <?php
                                                }
                                                ?>
                                                  <div class="col-12 d-flex justify-content-center pt-4">
                                                    <button type="submit" name="girl" class="btn btn-primary me-1 mb-1 w-100">Submit</button>
                                                   
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic multiple Column Form section end -->
                <!-- // Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">แก้ไขราคาเนื้อผ้า</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="customize_price.php" method="GET">
                                            <div class="row">
                                                <?php foreach($res3 as $a){?>
                                                <input type="hidden" name="fb[size_id][]" class="form-control" value="<?php echo  $a['frabic_id']; ?>">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">ชื่อเนื้อผ้า</label>
                                                        <input type="text" name="fb[size][]" class="form-control" value="<?php echo $a['frabic_name']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="last-name-column">ราคา (บาท)</label>
                                                        <input type="text" name="fb[price][]" class="form-control" value="<?php echo $a['frabic_price']; ?>">
                                                    </div>
                                                </div>
                                                <?php
                                                }
                                                ?>
                                                  <div class="col-12 d-flex justify-content-center pt-4">
                                                    <button type="submit" name="frabic" class="btn btn-primary me-1 mb-1 w-100">Submit</button>
                                                   
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic multiple Column Form section end -->
            </div>

            <?php

                require __DIR__.'/footer.php';

            ?>
        </div>
    </div>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
    
<?php

require __DIR__.'/footer_tagbody.php';

?>