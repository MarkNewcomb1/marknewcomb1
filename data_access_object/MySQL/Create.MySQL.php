<?php
//Create.MySQL.php

class Create_MySQL extends MySQL_interface{
	
	public function algorithm($params){
		
		$connection=$this->MySQL_connect();
		$SQL_statement=$this->build_MySQL_statement($params);
		
		try{
			$SQL_prep=$connection->prepare($SQL_statement);
			//$SQL_prep->bindValue(":username","$username",PDO::PARAM_STR);
			$SQL_prep->execute();
			$this->SQL=$SQL_statement;
			$this->error_message="Data submitted";
			$connection=NULL;
			return $this;
		}
		catch (PDOException $e){
			$this->SQL=$SQL_statement;
			$this->error_message=$e->getMessage();
			$connection=NULL;
			return $this;
    	}
	}
	
	protected function build_MySQL_statement($params){
		
		if(isset($params->table_set)){
			if(gettype($params->table_set)=='array'){
				$table=implode(", ", $params->table_set);
			}
			elseif(gettype($params->table_set)=='string'){
				$table=$params->table_set;
			}
			else{
				$table=NULL;
			}
		}else{$table=NULL;}
	
		if(count($params->index_set)===count($params->value_set)){
			$table_params="";
			$i=0;
			foreach($params->index_set as $value){
				$index=$params->index_set[$i];
				$val=$params->value_set[$i];
				
				$table_params.=$index." ".$val;
				if($i<count($params->index_set)){
					$table_params.=",";
				}
				
				$i++;
			}
		}
		else{
			return;
		}
		
		if(isset($params->primary_key)){
			$primary=" PRIMARY KEY(".$params->primary_key[0].")";
		}else{$primary=NULL;}
		
		$SQL_statement="CREATE TABLE $table ($table_params$primary);";
		//echo $SQL_statement;
		return $SQL_statement;
	}
	
}
?>