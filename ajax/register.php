<?

require_once '../libs/xulydb.php';

$db = new XuLyDB();

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['address'])) {
    // Đưa dữ liệu vào các biến
    $return = array();
    $fields = [];
    $fields['tentaikhoan'] = $_POST['username'];
    $fields['matkhau'] = md5($_POST['password']);
    $fields['email'] = $_POST['email'];
    $fields['diachi'] = $_POST['address'];
    $fields['laquanly'] = 0;
    $fields['dakichhoat'] = 1;
    $fields['daxoa'] = 0;
  
    $kq = $db->lay_du_lieu("TAIKHOAN", "tentaikhoan='".$_POST['username']."' OR email ='".$_POST['email']."'");
    if (!empty($kq)) //Trùng
    {
        $return['code'] = 0;
        $return['msg'] = "Tên tài khoản hoặc email đã tồn tại !";
    }
    else //Hợp lệ
    {
        $result = $db->them_moi($fields, "TAIKHOAN");
        if ($result)
        {
            $return['code'] = 1;
            $return['msg'] = "Chúc mừng bạn đã tạo tài khoản thành công!";
        }
    }

    echo json_encode($return);
}