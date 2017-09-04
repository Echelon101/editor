<?php
class query{
	public $connection = null;
	public function __construct($driver, $host, $dbname, $username, $password = null, $port = 3306, $charset = "utf8"){
		$this->connection = new  PDO("$driver:host=$host;port=$port;dbname=$dbname;charset=$charset", "$username", "$password");
	}
	public function doUpdateQuery($input_table, $replace_location, $replace_data, $check_col, $check_data){
		
		if($condition != null){
			$query = "UPDATE $input_table SET $replace_location = ? WHERE $check_table = ?";
		}else{
			$query = "UPDATE $input_table SET $replace_location = ?";
		}
		
		
	}
	public function setInsertQuery(){
		
	}
}