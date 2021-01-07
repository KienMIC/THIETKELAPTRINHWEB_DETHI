<?php 
    $conn = mysqli_connect("localhost","root","","de7");
    $username = "";
    $password = "";
    if(!empty($_POST['login'])){
        if(isset($_POST['username']) && isset($_POST['password'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
        }

        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' AND status = '1'";
        $query = mysqli_query($conn,$sql);
        if(mysqli_num_rows($query)>0){
            echo "Đăng nhập thành công!";
        }
        else{
            echo "Đăng nhập thất bại, vui lòng nhập lại thông tin!";
        }
    }
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>ĐỀ 7 - TRANG ĐĂNG NHẬP</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.5.1.slim.js"></script>
</head>
<body>
	<div class="container">
    <form method="post" id="form_login">
     <div class = "khungngoaicung">
         <div class = "tieude">
             <p style="text-align: center;">ĐĂNG NHẬP HỆ THÔNG</p>
         </div>
         <div class="row">
             <label>Tài khoản</label>
             <input type="text" name="username" id="username" placeholder="Nhập tài khoản">
         </div>
         <div class="row">
             <label>Mật khẩu</label>
             <input type="password" name="password" id="password" placeholder="Nhập mật khẩu">
         </div>
         <div class="row">
             <button type="submit" name = "login" value = "Dang nhap">ĐĂNG NHẬP</button>
             <button><a href="localhost">THOÁT</a></button>
         </div>
     </div>
     </form>   
    </div>
</body>
</html>

<script type="text/javascript">
    $(function(){
        $('#form_login').submit(function(){
            var username = $('#username').val();
            var password = $('#password').val();

            if(username == ""){
                alert("Vui lòng nhập tài khoản!");
                return false;
            }
            else if(password == ""){
                alert("Vui lòng nhập mật khẩu!");
                return false;
            }
        });
    });
</script>