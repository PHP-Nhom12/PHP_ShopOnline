<?

if(isset($_GET['q']))
{

	$where = "tentaikhoan LIKE '%" . $_GET['q'] . "%'";
	require('libs/xulydb.php');
	$db = new XuLyDB();
	$result = $db->tim_kiem('TAIKHOAN', $where);

}
else {
	echo 'query not found!';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>test</title>
</head>
<body>
	
<?
	foreach ($result as $usr) {
		?>
		<span>Ho ten:
			<?=$usr['tentaikhoan']?>
		</span><br>
		<span>Email: 
			<?=$usr['email']?>
		</span>
		<?
	}
?>
</body>
</html>

