<?php
session_start();ob_start();
require_once("dbcon.php");
  // Các giá trị dược lưu trong biến $_POST
  // Kiểm tra nếu được post
  if($_POST) {
  // Đưa dữ liệu vào các biến
    $username = $_POST['tentaikhoan'];
    $password = $_POST['matkhau'];
    
    
  // Phần xử lý của các bạn..
    $sql = "SELECT * FROM TAIKHOAN WHERE tentaikhoan='$username' AND matkhau='$password'";
    $user = mysql_query($sql);

    if (mysql_num_rows($user)==1)//Thành công     
    {    
        $_SESSION['username'] = $username; // Lưu name vào session
        echo '<p class="success">Chúc mừng bạn <span style="color:blue">'.$_SESSION['username'].'</span> đã đăng nhập thành công <br><a href="logout.php">Đăng xuất</a> !</p>'; 
    }
    else //Thất bại 
            echo '<p class="success">Username hoặc password không đúng !</p>';
}
ob_end_flush();
?>
