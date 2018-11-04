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
			$this->conn = null;
		}
	}

	// Hàm insert
	public function them_moi($params, $table) {
		$fields = "";
		$values = "";
		foreach ($params as $key => $value) {
			$fields .= $key . ",";
			$values .= "'" . $value . "',";
		}

		$sql = "INSERT INTO " . $table . "(". trim($fields, ",") . ") VALUES (" . trim($values, ",") . ")";

		$kq = $this->conn->query($sql);

		$this->conn->close();

		if ($kq === TRUE) {
			return TRUE
		}
		
		return false;

		// return mysqli_query($this->$conn, $sql);
	}


	public function lay_du_lieu($table) {
		$sql = "SELECT * FROM " . $table;

		$result = $this->conn->query($sql);
		$n = $result->num_rows;

		if ($n > 0) {
			$ket_qua = $result->fetch_assoc();
		}

		$conn->close();

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




}