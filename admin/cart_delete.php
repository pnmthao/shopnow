<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$userid = $_POST['userid'];
		$cartid = $_POST['cartid'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM cart WHERE id=:id");
			$stmt->execute(['id'=>$cartid]);

			$_SESSION['success'] = 'Sản Phẩm Đã Xóa Khỏi Giỏ Hàng';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();

		header('location: cart.php?user='.$userid);
	}

?>