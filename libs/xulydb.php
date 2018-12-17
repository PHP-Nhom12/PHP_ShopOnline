<?

class XuLyDB {
	private $servername;
	private $username;
	private $password;
	private $dbname;
	private $conn;


	//Hàm khởi tạo

	public function __construct() {
		$this->servername = "localhost";
		$this->username = "root";
		$this->password = "root";
		$this->dbname = "QuanLyCuaHang";
		$this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

		if ($this->conn->connect_error) {
			die("Loi ket noi: " . $conn->connect_error);
			$this->conn = null;
		}
		$this->conn->query("set names 'utf-8'");
	}

	public function __destruct() {
		if ($this->conn != null)
		{
			$this->conn->close();
		}
	}

	// Hàm insert
	public function them_moi($params, $table) {
		$fields = [];
		$values = [];
		foreach ($params as $key => $value) {
			$fields[]= $key;
			$values[]= "'" . $value . "'";
		}

		$fields = implode(",", $fields);
		$values = implode(",", $values);

		$sql = "INSERT INTO " . $table . "(". $fields . ") VALUES (" . $values . ")";
		
		return $this->conn->query($sql);
	}


	// public function lay_du_lieu($table) {
	// 	$sql = "SELECT * FROM " . $table . " WHERE daxoa = 0";

	// 	$result = $this->conn->query($sql);
	// 	$n = $result->num_rows;

	// 	$ket_qua = [];

	// 	while ($row = $result->fetch_assoc()) {
	// 		$ket_qua[] = $row;
	// 	}

	// 	return $ket_qua;
	// }


	public function lay_du_lieu($table, $param=null) {

		if ($param != null)
			$sql = "SELECT * FROM " . $table . " WHERE " . $param;
		else
			$sql = "SELECT * FROM " . $table . " WHERE daxoa = 0";

		$result = $this->conn->query($sql);
		$n = $result->num_rows;

		$ket_qua = [];

		if ($n > 0) {
			while ($row = $result->fetch_assoc()) {
				$ket_qua[] = $row;
			}			
		}



		return $ket_qua;
	}

	public function lay_du_lieu_moi_nhat($table, $param=null) {

		if ($param != null)
			$sql = "SELECT * FROM " . $table . " WHERE daxoa = 0 ORDER BY " . $param . " DESC";
		else
			$sql = "SELECT * FROM " . $table . " WHERE daxoa = 0";

		$result = $this->conn->query($sql);
		$n = $result->num_rows;

		$ket_qua = [];

		if ($n > 0) {
			while ($row = $result->fetch_assoc()) {
				$ket_qua[] = $row;
			}
		}

		return $ket_qua;
	}


	public function tim_kiem($table, $where) {
		$sql = "SELECT * FROM ".$table." WHERE ".$where;

		$result = $this->conn->query($sql);
		$n = $result->num_rows;

		$ket_qua = [];

		if ($n > 0) {
			while ($row = $result->fetch_assoc()) {
				$ket_qua[] = $row;
			}
		}
		
		return $ket_qua;
	}


	// Hàm Update
	function update($params, $table, $where)
	{
	    // Kết nối
	    $this->connect();
	    $sql = '';
	    // Lặp qua data
	    foreach ($data as $key => $value){
	        $sql .= "$key = '".mysql_escape_string($value)."',";
	    }
	 
	    // Vì sau vòng lặp biến $sql sẽ thừa một dấu , nên ta sẽ dùng hàm trim để xóa đi
	    $sql = 'UPDATE '.$table. ' SET '.trim($sql, ',').' WHERE '.$where;
	 
	    return mysqli_query($this->__conn, $sql);
	}

	public function dem_so_dong($table, $param=null)
	{
		if ($param != null)
			$sql = "SELECT * FROM " . $table . " WHERE " . $param;
		else
			$sql = "SELECT * FROM " . $table;

		$result = $this->conn->query($sql);

		return $result->num_rows;
	}


	public function lay_du_lieu_phan_trang($table, $limit ,$offset, $param=null)
	{
		
		if ($param != null)
			$sql = "SELECT * FROM " . $table . " WHERE " . $param . " LIMIT " . $offset . ", " . $limit;
		else
			$sql = "SELECT * FROM " . $table . " LIMIT " . $offset . ", " . $limit;

		$result = $this->conn->query($sql);

		$n = $result->num_rows;

		$ket_qua = [];

		if ($n > 0) {
			while ($row = $result->fetch_assoc()) {
				$ket_qua[] = $row;
			}
		}

		return $ket_qua;
	}


}