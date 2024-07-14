<?php
	class dbConnect{
		function __construct(){
		}
		public function conn(){
			$conn=mysqli_connect("localhost", "root", "",'examresult');
			if(!$conn){
				die("CONNOT CONNECT TO DB");
			}
			return $conn;
		}
		public function Close(){
			mysqli_close();
		}
	}
?>