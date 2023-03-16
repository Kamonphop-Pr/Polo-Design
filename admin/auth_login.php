<?php
require('../config.php');
error_reporting(0);            
session_start();
if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
    
    $sql = "SELECT * FROM user WHERE email='$email'";
    $result = mysqli_query($conn, $sql); 
    $row = mysqli_fetch_assoc($result);
    if($email==$row['email']){
        if(password_verify($password, $row['password'])){

            $_SESSION['user_id']=$row['user_id'];
            $_SESSION['email']=$row['email'];
            $_SESSION['username'] = $row['username'];
            $_SESSION["user_status"] = $row["user_status"];
            if($_SESSION["user_status"]!="1"){ 
                header("Location: ../index.php");  
            }
            else{
                header("Location: index.php");
            }
        }else{
            $pro="*รหัสผ่านของท่านไม่ถูกต้องกรุณาใส่อีกครั้ง";
        }
    }else{
        $ero="*กรุณาใส่อีเมลที่ทำการสมัครบัญชีผู้ใช้งาน";
    }
}
require __DIR__.'/header.php';
?>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                    <h1 class="auth-title text-center">N&C Polo Design</h1>
                    </div>
                    <h2 >ลงชื่อเข้าใช้งาน</h2>
                    <p class="auth-subtitle mb-5">กรุณาใช้ข้อมูลของคุณที่ทำการสัมครสมาชิกไว้เท่านั้น</p>

                    <form action="" method="POST">
                    <span class="text-danger pb-4"><?php echo  $ero; ?></span>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="email" class="form-control form-control-xl" placeholder="อีเมลของคุณ" name="email" value="<?php echo $email; ?>" required>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                    <span class="text-danger pb-4"><?php echo  $pro; ?></span>    
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="รหัสผ่านของคุณ" name="password" value="<?php echo $password; ?>" required>
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">ลงชื่อเข้าใช้งาน</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">หากยังไม่มีชื่อบัญชีผู้ใช้งาน<a href="auth_register.php"
                                class="font-bold">กรุณาสมัครสมาชิกที่นี่</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">
                </div>
            </div>
        </div>

    </div>
<?php
require __DIR__.'/footer_tagbody.php';
?>