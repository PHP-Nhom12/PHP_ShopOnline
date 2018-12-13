<?

session_start();

if (isset($_REQUEST['pid']) && isset($_REQUEST['nums'])) {
	$pid = $_REQUEST['pid'];
	$nums = (int)$_REQUEST['nums'];

	echo $pid;


	if (isset($_SESSION['gio-hang'])) {
		foreach ($_SESSION['gio-hang'] as $index => $value) {
			if ($_SESSION['gio-hang'][$index]['pid'] == $pid)
			{
				$_SESSION['gio-hang'][$index]['so_luong'] = $nums;
			}
		}
	}
}

?>