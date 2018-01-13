<?php

class Database extends Form {

  public $username = 'root';
  public $password;
  public $servername = 'localhost';
  public $dbname;
  public $conn;
	public $table;
	public $columns = [];

	public function __construct($dbname = null, $username = null, $password = null) {
    $this->formData = $_POST;
		$this->table = static::class;

    foreach(array_keys($_POST) as $column) {
      array_push($this->columns, $column);
    }

    $this->dbname = $dbname;
	}

  /*
  * Create a connection
  */
  public function connect() {
    $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
  }

  /*
  * Do some tests
  */
  public function test() {

  }

  /*
  * Set db user
  */
  public function setUsername($username) {
    $this->username = $username;
  }

  /*
  * Set db password
  */
  public function setPassword($password) {
    $this->password = $password;
  }

  /*
  * Set server name
  */
  public function setServer($servername) {
    $this->servername = $servername;
  }

  /*
  * Set db
  */
  public function setDatabase($dbname) {
    $this->dbname = $dbname;
  }

  /*
  * Set table name
  */
  public function setTable($tableName) {
    $this->table = $tableName;
  }

  /*
  * Check if table exists
  */
  public function checkTableExists($table) {
    $columns = [];

    foreach ($this->columns as $column) {
      $column = str_replace('-', '_', $column);
      $column = preg_split('/(?=[A-Z])/', $column);
      array_push($columns, $column);
    }

    foreach ($columns as $i => $row) {
      $column = strtolower(implode('_', $columns[$i]));
      $columns[$i] = $column;
    }

    foreach ($columns as $i => $row) {
      $columns[$i] = $row . " varchar(255) NOT NULL";
    }

    $columns = implode(',', $columns);

    $table .= "(" . substr($table, 0, -1) . "_id int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,";
    $table .= "$columns";
    $table .= ")";
    $sql = "CREATE TABLE IF NOT EXISTS $table";

    print_r($table);
    // $conn->query($sql);
  }

  /*
  * Save data to table
  */
	public function saveToTable($table = null) {

    /*
    * Set table name
    */
		if ($table !== null) {
			$this->table = $table;
		} else {
      if (subtr($table, -1) === 'y') {
        $table = strtolower($this->table) . 'ies';
      } else {
        $table = strtolower($this->table) . 's';
      }
		}

    /*
    * Convert input names to string
    */
    $columns = [];

    foreach ($this->columns as $column) {
      $column = str_replace('-', '_', $column);
      $column = preg_split('/(?=[A-Z])/', $column);
      array_push($columns, $column);
    }

    foreach ($columns as $i => $row) {
      $column = strtolower(implode('_', $columns[$i]));
      $columns[$i] = $column;
    }

    $columns = implode(',', $columns);

    /*
    * Set prepared statement
    */
		$substitute = [];

    for ($i = 0; $i < count($this->columns); $i++) {
			$substitute[$i] = '?';
		}

		$substitute = implode(',', $substitute);

    /*
    * Convert form data to string
    */
    $formData = implode(',', $this->formData);

    /*
    * Set data types
    */
    $dataTypes = '';

    for ($i = 0; $i < count($this->columns); $i++) {
			$dataTypes .= 's';
		}

    echo "INSERT INTO $table ($columns) VALUES ($substitute)";

    echo $dataTypes;

		// $stmt = $this->conn->prepare("INSERT INTO $table ($columns) VALUES ($substitute)");
    //
		// $stmt->bind_param($dataTypes, $formData);
    //
		// $stmt->execute();
	}

  //
  // // set column names
	// public function setColumns($arr) {
	// 	$this->data = $arr;
	// }

}
