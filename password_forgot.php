<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page">
<div class="login-box">
  	<?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center'>
            <p id='mgsError'>".$_SESSION['error']."</p> 
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
    	<p class="login-box-msg">Nhập email liên kết với tài khoản</p>
      <br>
    	<form action=" " method="POST">
      		<div class="form-group has-feedback">
        		<input type="email" class="form-control" name="email" placeholder="Email" required>
        		<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      		</div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="reset" id="btnForgotPass"><i class="fa fa-mail-forward"></i> Gửi</button>
        		</div>
      		</div>
    	</form>
      <br>
      <a href="login.php">Tôi đã nhớ mật khẩu</a>
      <a href="index.php"><i class="fa fa-home"></i> Trang Chủ</a>
  	</div>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>