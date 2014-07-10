<?php

class collect_params{
		
	public function __construct($collect_params,$type_of){
		
		//echo $type_of;

		$valid_params=array("table_set","index_set","value_set","condition_set","order_set","limit_set");
		
		//if($type_of=='Select_MySQL'){
			foreach($collect_params[0] as $key=>$value){
				if(gettype($value)=='array'){
					$catch=array();
					foreach($value as $val){
						$val=MySQL_interface::purge($val);
						array_push($catch, $val);
					}
					$this->$key=$catch;
				}
				else{
					//$val=MySQL_interface::purge($value);
					$val=$value;
					$this->$key=$val;
				}
			}
		//}
	}
	
}


?>