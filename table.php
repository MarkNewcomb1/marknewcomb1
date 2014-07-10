<?php
ini_set('display_errors','1');
include($_SERVER['DOCUMENT_ROOT'].'/data_access_object/MySQL/Client.MySQL.php');

$query_set=array(
	'table_set'=>array("CDs"),
	'index_set'=>array("Artist","Album_Title","Notes"),
	//'limit_set'=>5,
	'order_set'=>'Artist ASC'
);

$request=new Client_MySQL();
$result=$request->db_select($query_set);

//echo "<pre>";
//print_r($result);
//echo "</pre>";

//static $n=0;
//foreach($result->query[$n] as $key=>$value){
//	echo $key."=".$value."<br/>";
//	$n++;
//}

//Clinton's Code:

//echo "<article>";
//$i=0;
//for($i=0;$i<count($result->query);$i++){
//	$album_title=$result->query[$i]['Album_Title'];
//	$artist=$result->query[$i]['Artist'];
//        $notes=$result->query[$i]['Notes'];
//?>
//	<h2><?php echo $artist; ?></h2>
//	<h3><?php echo $album_title; ?></h3>
//        <p><?php echo $notes; ?></p>
//<?php
//}

//echo "</article>";
?>

//Mark's try now!

<?php

echo "<table>";
echo "<tr><th>Artist</th><th>Album</th><th>Notes</th></tr>";

$i=0;
for($i=0;$i<count($result->query);$i++){
	$album_title=$result->query[$i]['Album_Title'];
	$artist=$result->query[$i]['Artist'];
        $notes=$result->query[$i]['Notes'];
?>
<tr><td><?php echo $artist; ?></td>
    <td><?php echo $album_title; ?></td>
    <td><?php echo $notes; ?></td>
</tr>
<?php
}
echo "</table>";
?>