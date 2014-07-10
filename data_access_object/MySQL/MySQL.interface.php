<?php
	
abstract class MySQL_interface{
	
	protected function MySQL_connect(){
		$db_dsn="mysql:dbname=marknewc_my_music_collection";
		$db_username="marknewc_mark";
		$db_password="Escher5150";
		try{
			$connection=new PDO($db_dsn,$db_username,$db_password);
			$connection->setAttribute(PDO::ATTR_PERSISTENT,true);
			$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			return $connection;
		}
		catch(PDOException $e){
			die("connection failed: ".$e->getMessage());
		}	
	}

	abstract protected function build_MySQL_statement($params);
	
	public static function purge($input){
		$input=gettype($input)!='array' ? htmlspecialchars($input, ENT_QUOTES) : $input;
		//$input=str_replace(",", "&#44;", $input);
		//$input=str_replace("'",'&#39;',$input);
		return $input;
	}
	
	public static function binge($input){
		$input=gettype($input)!='array' ? htmlspecialchars_decode($input, ENT_QUOTES) : $input;
		//$input=str_replace("&#44;",",", $input);
		//$input=str_replace("&#39;","'",$input);
		return $input;
	}
}
	
?>