
<div class="row">
	<div class="box box-solid">
	  	<div class="box-header with-border">
	    	<h3 class="box-title" style="font-size: 25px;
  										background: -webkit-linear-gradient(rgb(255, 4, 4), rgb(2, 54, 224));
 										-webkit-background-clip: text;
  										-webkit-text-fill-color: transparent;"><b>Sản phẩm hot nhất!!</b>
			</h3>
	  	</div>
	  	<div class="box-body">
	  		<ul id="trending">
	  		<?php
	  			$now = date('Y-m-d');
	  			$conn = $pdo->open();

	  			$stmt = $conn->prepare("SELECT * FROM products WHERE date_view=:now ORDER BY counter DESC LIMIT 10");
	  			$stmt->execute(['now'=>$now]);
	  			foreach($stmt as $row){
	  				echo "<li><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></li>";
	  			}

	  			$pdo->close();
	  		?>
	    	<ul>
	  	</div>
	</div>
</div>

<div class="row">
	<div class="box box-solid">
	<a href='#' ><img src="images/sale.png" ></a>
	</div>
<div class="row">
	<div class="box box-solid">
	<a href='#' ><img src="images/1.jpg" ></a>
	</div>
	
</div>

	
</div>
<div class="row">
	<div class='box box-solid'>
	  	<div class='box-header with-border'>
	    	<h3 class='box-title'><b>Theo dõi chúng tôi trên mạng xã hội</b></h3>
	  	</div>
	  	<div class='box-body'>
		 	<a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
	    	<a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
	    	<a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
	    	<a class="btn btn-social-icon btn-google"><i class="fa fa-google-plus"></i></a>
	  	</div>
	</div>
</div>
