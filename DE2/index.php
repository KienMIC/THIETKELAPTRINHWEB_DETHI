<?php
	$conn = mysqli_connect("localhost","root","","contact");
	if($conn){
		echo "Ket noi thanh cong!";
	}
	else{
		echo "Ket noi that bai!";
	}
	if(!empty($_POST['submit'])){
		if(isset($_POST['name'])&&isset($_POST['surname'])&&isset($_POST['email'])&&isset($_POST['message'])){
			$name = $_POST['name'];
			$surname = $_POST['surname'];
			$email = $_POST['email'];
			$message = $_POST['message'];
			$sql = "INSERT INTO contact(name,surname,email,message) VALUES('$name','$surname','$email','$message')";
			$query = mysqli_query($conn,$sql);
			if($query){
				echo "Them thanh cong !";
			}
			else{
				echo "Them that bai !";
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>ĐỀ 2 - NGÔ TRUNG KIÊN - 74458</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class = "khungngoaicung">
		<div class = "tieude">DANH BẠ</div>
		<form method="post" name="form_contact" onsubmit="return check()">
		<div id = "name">
			<label>Name</label>
			<input type="text" name="name" placeholder="Enter your name">
		</div>

		<div id = "name">
			<label>Surname</label>
			<input type="text" name="surname" placeholder="Enter your surname">
		</div>

		<div id="name">
			<label>Email</label>
			<input type="text" name="email" placeholder="Enter your email">
		</div>

		<div id = "name">
			<label>Message</label>
			<textarea name="message" rows="4" cols="50"></textarea>
			
		</div>
		<div>
			<button type="submit" name="submit" value="submit">SEND</button>
		</div>
		</form>
	</div>
</body>
</html>

<script type="text/javascript">
	function check(){
		var name = document.forms["form_contact"]["name"].value;
		var surname = document.forms["form_contact"]["surname"].value;
		var email = document.forms["form_contact"]["email"].value;
		var message = document.forms["form_contact"]["message"].value;
		if(name ==""){
			alert("Please enter your name!");
			return false;
		}
		else if(surname == ""){
			alert("Please enter your surname!");
			return false;
		}
		else if(email == ""){
			alert("Please enter your email!");
			return false;
		}
		else if(message == ""){
			alert("Please enter your message!");
			return false;
		}
	}
	
</script>