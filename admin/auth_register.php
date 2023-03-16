<?php
require('../config.php');
error_reporting(0);
if (isset($_POST['submit'])) {
	$email = $_POST['email'];
    $username = $_POST['username'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	if ($password == $cpassword) {
		$sql = "SELECT * FROM user WHERE email='$email'";
		$result = mysqli_query($conn, $sql); 
		if (!$result->num_rows > 0) {
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
			$sql = "INSERT INTO user (user_id , username, email,password,user_status)
					VALUES (NULL,'$username', '$email', '$passwordHash',0)";
			$result = mysqli_query($conn, $sql);
			if ($result) {

                header("Location: auth_login.php");  
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			$em="**อีเมลนี้ถูกใช้งานแล้วกรุณาใส่อีเมลใหม่เพื่อทำการสมัครสมาชิก";
		}
		
	} else {
		$pm="**รหัสผ่านไม่ตรงกันกรุณาใส่ใหม่อีกครั้ง";
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
                    <h2 class="pb-5">สมัครบัญชีผู้ใช้งาน</h2>

                    <form action="auth_register.php" method="POST">
                    <span class="text-danger pb-4"><?php echo $em; ?></span>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Email" name="email" maxlength="200" value="<?php echo $email; ?>" required>
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Username" name="username" maxlength="44" value="<?php echo $username; ?>" required> 
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <span class="text-danger pb-4"><?php echo $pm; ?></span>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Password" name="password" maxlength="12" minlength="6" required>
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <span class="text-danger pb-4"><?php echo $pm; ?></span>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Confirm Password" name="cpassword" maxlength="12"  minlength="6" required>
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">สมัครบัญชีผู้ใช้งาน</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class='text-gray-600'>หากมีชื่อบัญชีผู้ใช้งาน <a href="auth_login.php"
                                class="font-bold">กรุณาล๊อคอินที่นี่</a>.</p>
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