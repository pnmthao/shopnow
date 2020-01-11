<?php
	include 'includes/session.php';
	$conn = $pdo->open();

	if(isset($_POST['login'])){
		
		$email = $_POST['email'];
		$password = $_POST['password'];

		try{

			$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE email = :email");
			$stmt->execute(['email'=>$email]);
			$row = $stmt->fetch();
			if($row['numrows'] > 0){
				if($row['status']){
					if(password_verify($password, $row['password'])){
						if($row['type']){
							$_SESSION['admin'] = $row['id'];
						}
						else{
							$_SESSION['user'] = $row['id'];
						}
					}
					else{
						$_SESSION['error'] = 'Sai mật khẩu';
					}
				}
				else{
					$_SESSION['error'] = 'Tài khoản chưa kích hoạt.';
				}
			}
			else{
				$_SESSION['error'] = 'Email không tìm thấy';
			}
		}
		catch(PDOException $e){
			echo "Lỗi Kết Nối: " . $e->getMessage();
		}

	}
	else{
		$_SESSION['error'] = 'Nhập thông tin đăng nhập';
	}

	$pdo->close();

	header('location: login.php');

?>