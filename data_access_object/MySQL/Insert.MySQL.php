<?php
//Insert.MySQL.php

class Insert_MySQL extends MySQL_interface{
	
	public function algorithm($params){
		
		$connection=$this->MySQL_connect();
		$SQL_statement=$this->build_MySQL_statement($params);
		
		try{
			$SQL_prep=$connection->prepare($SQL_statement);
			//$SQL_prep->bindValue(":username","$username",PDO::PARAM_STR);
			$SQL_prep->execute();
			$this->SQL=$SQL_statement;
			$this->error_message="Data submitted";
			return $this;
		}
		catch (PDOException $e){
			$this->SQL=$SQL_statement;
			$this->error_message=$e->getMessage();
			$connection="";
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
		if(isset($params->index_set)){
			if(gettype($params->index_set)=='array'){
				$index="";
				$i=0;
				foreach($params->index_set as $value){
					$index.=$value;
					if($i<count($params->index_set)-1){
						$index.=",";
					}
					$i++;
				}
			}
			elseif(gettype($params->index_set)=='string'){
				$index=$index_set;
			}
			else{
				$index=NULL;
			}
		}else{$index=NULL;}
		if(isset($params->value_set)){
			if(gettype($params->value_set)=='array'){
				$values="";
				$i=0;
				foreach($params->value_set as $value){
					$values.="'".$value."'";
					if($i<count($params->value_set)-1){
						$values.=",";
					}
					$i++;
				}
			}
			elseif(gettype($params->value_set)=='string'){
				
			}
			else{
				$values=NULL;
			}
		}else{$values=NULL;}
	
		$SQL_statement="INSERT INTO $table ($index) VALUES($values);";
		//echo $SQL_statement;
		return $SQL_statement;
	}
	
}

?>