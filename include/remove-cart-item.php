<?

session_start();

if (isset($_GET['key'])) {
	$key = $_GET['key'];

	unset($_SESSION['gio-hang'][$key]);

	// var_dump($_SESSION);

	header("Location: ../cart.php");
}

?>