<?

require_once '../libs/xulydb.php';

$db = new XuLyDB();

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
  
    $kq = $db->lay_du_lieu("TAIKHOAN", "tentaikhoan='".$_POST['username']."' OR email ='".$_POST['email']."'");
    // var_dump($kq);
    if (!empty($kq)) //Trùng
    {
        echo "Tên tài khoản hoặc email đã tồn tại !";
    }
    else //Hợp lệ
    {
        $result = $db->them_moi($fields, "TAIKHOAN");
        echo "aaa".$result;
        if ($result)
        {
            echo "Tạo tài khoản thành công";
        }
    }
}