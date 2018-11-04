<?

session_start();
if (isset($_SESSION['myname'])) {
    unset($_SESSION['myname']); // Hủy sessionk
}

// trở về trang chủ
header('Location: index.php');