<?php
//Update.MySQL.php

class Update_MySQL extends MySQL_interface{
	
	public function algorithm($params){
		//print_r($params);
		$connection=$this->MySQL_connect();
		$SQL_statement=$this->build_MySQL_statement($params);
		
		try{
			$SQL_prep=$connection->prepare($SQL_statement);
			//$SQL_prep->bindValue(":username","$username",PDO::PARAM_STR);
			$SQL_prep->execute();
			$this->SQL=$SQL_statement;
			$this->error_message="Update succesful";
			
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
		if(gettype(($params->index_set)=='array')&&(gettype($params->value_set)=='array')){
			if(count($params->index_set)==(count($params->value_set))){
				$i=0;
				$index="";
				foreach($params->index_set as $key){
					$index.=$params->index_set[$i]."='".$params->value_set[$i]."'";
					if($i<count($params->index_set)-1){
						$index.=", ";
					}
					$i++;
				}
			}
		}
		elseif((gettype($params->index_set)=="string")&&(gettype($params->value_set)=="string")){
			$index=$params->index_set."='".$params->value_set."'";
		}
		else{
			$index=NULL;
		}
		
		if(isset($params->table_set)){
			if(gettype($params->table_set)=='array'){
				$table=implode(", ", $params->table_set);
			}
			elseif(gettype($params->table_set)=='string'){
				$table=$params->table_set;
			}else{$table=NULL;}
		}
		else{$table=NULL;}
		
		if(isset($params->condition_set)){
			$condition=" WHERE ".$params->condition_set;
		}
		else{$condition=NULL;}
				
		$SQL_statement="UPDATE $table SET $index$condition";
		//echo $SQL_statement;
		return $SQL_statement;
	}
	
}

?>