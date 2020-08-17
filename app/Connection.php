<?php

namespace App;

class Connection {


	public static  function getDb() {
		try{
			//try
			$conn = new \PDO(
				"mysql:host=localhost;dbname=twitter_clone;charset=utf8",
				"root",
				""
			);
			return $conn;
		}catch(\PDOException $e){

		}
	}
}



?>