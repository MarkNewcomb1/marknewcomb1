<?php
require_once('MySQL.interface.php');
include_once('Context.MySQL.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/data_access_object/collect_params.php');
include_once('Create.MySQL.php');
include_once('Select.MySQL.php');
include_once('Insert.MySQL.php');
include_once('Update.MySQL.php');

class Client_MySQL{
	
	public function db_select(){
		$context=new Context_MySQL(new Select_MySQL());
		$collect_params=func_get_args();
		$result=$context->algorithm($collect_params);
		return $result;
	}
	
	public function db_insert(){
		$context=new Context_MySQL(new Insert_MySQL());
		$collect_params=func_get_args();
		$result=$context->algorithm($collect_params);
		return $result;
	}
	
	public function db_update(){
		$context=new Context_MySQL(new Update_MySQL());
		$collect_params=func_get_args();
		$result=$context->algorithm($collect_params);
		return $result;
	}
	
	public function db_create(){
		$context=new Context_MySQL(new Create_MySQL());
		$collect_params=func_get_args();
		$result=$context->algorithm($collect_params);
		return $result;
	}
	
}	
?>