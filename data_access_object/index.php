<?php
ini_set('display_errors','1');

require_once('MySQL/Client.MySQL.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<title>Database Access Model</title>
</head>
<body>
<?php

/*-- MySQL update --*/
echo "<hr/><h2>MySQL Create</h2>";
$query_set=array(
	'table_set'=>array("resource"),
	'index_set'=>array(
		"id",
		"title",
		"alias",
		"extension",
		"status",
		"parent",
		"menu_title",
		"menu_order",
		"menu_visibility",
		"template",
		"created",
		"created_by",
		"modified",
		"modified_by",
		"meta_description",
		"meta_keywords",
		"content"
	),
	'value_set'=>array(
		"SMALLINT UNSIGNED AUTO_INCREMENT NOT NULL UNIQUE",
		"VARCHAR(120) NOT NULL UNIQUE",
		"VARCHAR(120) BINARY NOT NULL UNIQUE",
		"VARCHAR(15) NOT NULL",
		"BOOLEAN NOT NULL",
		"INT",
		"VARCHAR(30) UNIQUE",
		"SMALLINT UNSIGNED",
		"BOOLEAN",
		"VARCHAR(60)",
		"DATETIME NOT NULL",
		"VARCHAR(30) NOT NULL",
		"DATETIME",
		"VARCHAR(30)",
		"TEXT",
		"TEXT",
		"MEDIUMTEXT"
	),
	'primary_key'=>array("id")
);

$request=new Client_MySQL();
$result=$request->db_create($query_set);

echo "<pre>";
print_r($result);
echo "</pre>";




/*-- MySQL select --*/
/*
echo "<hr/><h2>MySQL Select</h2>";
$query_set=array(
	'table_set'=>array("resource","system_settings"),
	'index_set'=>array("id","title","extension"),
	//'condition_set'=>'id=1',
	'limit_set'=>5,
	'order_set'=>'id DESC'
);

$request=new Client_MySQL();
$result=$request->db_select($query_set);

echo "<pre>";
print_r($result);
echo "</pre>";
*/




/*-- MySQL insert --*/
/*
echo "<hr/><h2>MySQL Insert</h2>";
$query_set=array(
	'table_set'=>array("resource"),
	'index_set'=>array("title","extension"),
	'value_set'=>array("test v@lu3, and again","value no.2")
);

$request=new Client_MySQL();
$result=$request->db_insert($query_set);

echo "<pre>";
print_r($result);
echo "</pre>";
*/





/*-- MySQL update --*/
/*
echo "<hr/><h2>MySQL Update</h2>";
$query_set=array(
	'table_set'=>array("resource"),
	'index_set'=>array("title","extension"),
	'value_set'=>array("test v@lu3, and again","value no.2"),
	'condition_set'=>'id=1'
);

$request=new Client_MySQL();
$result=$request->db_update($query_set);

echo "<pre>";
print_r($result);
echo "</pre>";
*/


?>
</body>
</html>