<?php 
	$conn = mysqli_connect("localhost","root","","de8");
	$sql = "SELECT * FROM sanpham";
	$query = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>ĐỀ 8 - SHOW SẢN PHẨM</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="khungngoaicung">
		<div class = "tieude">
			<label id = "td">SẢN PHẨM NỔI BẬT</label>
		</div>
		<?php 
			if($query){
				while ($row = mysqli_fetch_assoc($query)) {
		?>
		<div class="sanpham">
			<img src="<?php echo $row['image']?>" id="anhsp">
			<br>
			<label id="inforsp"><?php echo $row['name']?></label>
			<br>
			<br>
			<label id="inforsp"><?php echo 'Giá:'.number_format($row['price']).'đ'?></label>
		</div>
		<?php 
			}
		}
		?>
	</div>
</body>
</html>