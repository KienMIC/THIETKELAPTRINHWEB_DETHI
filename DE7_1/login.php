<?php 
	$conn = mysqli_connect("localhost","root","","de7_1");
	if($conn){
		echo "Ket noi thanh cong!";
	}
	else{
		echo "Ket noi that bai!";
	}
	if(!empty($_POST['login'])){
		if(isset($_POST['username'])&&isset($_POST['password'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' AND status = '1'";
			$query = mysqli_query($conn,$sql);
			if($query){
				if(mysqli_num_rows($query) >0){
					echo "Đăng nhập thành công!";
				}
				else{
					echo "Đăng nhập thất bại, vui lòng kiểm tra lại tài khoản và mật khẩu!";
				}
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>ĐỀ 7</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="khungngoaicung">
		<div class="tieude">
			<label id="td">ĐĂNG NHẬP HỆ THỐNG</label>
		</div>
	<form method="post" name="login_form" onsubmit="return check()">
		<label id="l1">Tài khoản</label>
		<input type="text" name="username">
		<br>
		<label id="l1">Mật khẩu</label>
		<input type="password" name="password">
		<br>
	<div id = "bt">
		<button type="submit" name="login" value="giatrinutsubmit">Đăng nhập</button>
		<button>Thoát</button>
	</div>
	</form>	
	</div>
</body>
</html>

<script type="text/javascript">
	function check(){
		var username = document.forms["login_form"]["username"].value;
		var password = document.forms["login_form"]["password"].value;
		if(username == ""){
			alert("Vui lòng nhập tên tài khoản!");
			return false;
		}
		else if (password == ""){
			alert("Vui lòng nhập mật khẩu!");
			return false;
		}
	}
	
</script>