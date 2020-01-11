<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];

		try{
			$stmt = $conn->prepare("UPDATE category SET name=:name WHERE id=:id");
			$stmt->execute(['name'=>$name, 'id'=>$id]);
			$_SESSION['success'] = 'Danh Mục cập nhật Thành Công';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Điền vào mẫu chỉnh sửa ';
	}

	header('location: category.php');

?>