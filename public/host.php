<?php

class VMUSIK {
	/**
	 * Initial settings with constants
	 * Default values are strings
	 */
	private $HOST="a.db.shared.orchestra.io";
	private $USERNAME="user_13a6c8e4";
	private $PASSWORD="fBIAOOz%%DH0v9";
	private $PORT="";
	private $DBNAME="db_13a6c8e4";
	private $ENCODING="";

	public $con;
	/**
	 * automatically connect to server
	 */
	private function echo_error($error){
		echo "<p>".$error."</p>";
	}

	function __construct(){

		$this->con = mysql_connect($this->HOST, $this->USERNAME, $this->PASSWORD);
		if (!$this->con){
			$this->echo_error('Could not connect: '. mysql_error());
		}
		else{
			$this->echo_error('connect successful');
		}

		$select = mysql_select_db($this->DBNAME, $this->con); 
		if ($select){
			$this->echo_error('select successful');
		}
		else {

			$this->echo_error(mysql_error());
		}
	}


}

header("Content-type: text/html; charset=utf-8");
$foo = new VMUSIK();





