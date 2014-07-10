<?php
//Select.MySQL.php
	
class Select_MySQL extends MySQL_interface{
		
	public function algorithm($params){
		
		$connection=$this->MySQL_connect();
		$SQL_statement=$this->build_MySQL_statement($params);
		
		try{
			$SQLpre=$connection->prepare($SQL_statement);
			$SQLpre->execute();
			if(empty($params->condition_set)){
				$row=$SQLpre->fetchAll(PDO::FETCH_ASSOC);
				
			}
			else{
				$row=$SQLpre->fetch(PDO::FETCH_ASSOC);
				
			}
			if($row){
				$query_array=array();
				foreach($row as $key=>$value){
					$val=$value;
					$val=MySQL_interface::binge($val);
					$query_array[$key]=$val;
				}
			}
		}
		catch (PDOException $e){
			$this->SQL=$SQL_statement;
			$this->error_message="Query failed: ".$e->getMessage();
			return $this;
		}
		if($row){
			$this->SQL=$SQL_statement;
			$this->error_message="Query success";
			$this->rows=count($row);
			$this->query=$query_array;
			return $this;
		}
		else{
			$this->SQL=$SQL_statement;
			$this->error_message="No results returned";
			return $this;
		}	
	}
	
	protected function build_MySQL_statement($params){
		
		if(isset($params->index_set)){
			if(gettype($params->index_set)=='array'){
				$index="";
				$n=0;
				foreach($params->index_set as $value){
					$index.=$value;
					if($n<count($params->index_set)-1){
						$index.=", ";
						$n++;
					}
				}
			}
			else{
				$index=$params->index_set;
			}
		}
		else{
			$index="*";
		}
		if(isset($params->table_set)){
			if(gettype($params->table_set)=='array'){
				$table=implode(", ", $params->table_set);
			}
			else{
				$table=$params->table_set;
			}
		}
		else{
			$table="";
		}
		if(isset($params->condition_set)){
			$condition=" WHERE ".$params->condition_set;
		}
		else{
			$condition="";
		}
		if(isset($params->order_set)){
			$order=" ORDER BY ".$params->order_set;
		}
		else{
			$order="";
		}
		if(isset($params->limit_set)){
			$limit=" LIMIT ".$params->limit_set;
		}
		else{
			$limit="";
		}
		$SQL_statement="SELECT ".$index." FROM ".$table.$condition.$order.$limit.";";
		//echo $SQL_statement;
		return $SQL_statement;
		
	}
	
}
	
?>