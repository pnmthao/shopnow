<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: cart_view.php');
  }
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page">
<div class="login-box">
  	<?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='bs-callout text-center'  >
            <p id='mgsError' >".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }
      if(isset($_SESSION['success'])){
        echo "
          <div class='callout callout-success text-center'>
            <p>".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?>
  	<div class="login-box-body">
    	<p class="login-box-msg col-lg-4 col-centered" >LOGIN</p>
      <br>
    	<form action="verify.php" method="POST" class="form1">
      		<div class="form-group has-feedback">
        		<input type="email" class="form-control" name="email" placeholder="Email" required>
        		<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
      		<div class="row">
    			  <div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="login" id="btnLogin"><i class="fa fa-sign-in"></i> OK</button>
        		</div>
      		</div>
    	</form>
      <br>
      <a href="password_forgot.php">Quên mật khẩu</a>
      <a href="signup.php" class="text-center">Đăng ký thành viên mới</a><br>
      <a href="index.php" style="top=15px;"><i class="fa fa-home"></i> Trang chủ</a>
  	</div>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>