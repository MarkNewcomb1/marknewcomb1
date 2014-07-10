<?php

class Context_MySQL{
	
	private $handler;
	
	public function __construct($request){
		$this->handler=$request;
		$this->type_of=get_class($request);
	}//end constructor
	
	public function algorithm($params){
		$params=new collect_params($params,$this->type_of);
		$result=$this->handler->algorithm($params);
		
		return $result;	
	}//end function algorithm
	
}
	
?>