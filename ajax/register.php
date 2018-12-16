<?

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['address'])) {
    // Đưa dữ liệu vào các biến
    $fields = [];
    $fields['tentaikhoan'] = $_POST['username'];
    $fields['email'] = $_POST['email'];
    $fields['diachi'] = $_POST['address'];
    $fields['matkhau'] = md5($_POST['password']);
    $fields['laquanly'] = 0;
    $fields['dakichhoat'] = 1;
    $fields['daxoa'] = 0;

    // $name=strip_tags(mysql_real_escape_string($name)); 
    // $email=strip_tags(mysql_real_escape_string($email)); 
  
    $check = $db->lay_du_lieu("TAIKHOAN", "tentaikhoan='".$username."' OR email ='".$email."'");
    
    if (!empty($kq)) //Trùng
    {
        echo "Tên tài khoản hoặc email đã tồn tại !";
    }
    else //Hợp lệ
    {
        if ($db->them_moi($fields, "TAIKHOAN"))
        {
            echo "Tạo tài khoản thành công";
        }
    }
}