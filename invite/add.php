<?php
$db_config= array();
$isSAE = true;
if($isSAE){
	$db_config['host'] = SAE_MYSQL_HOST_M;
	$db_config['port'] = SAE_MYSQL_PORT;
	$db_config['user'] = SAE_MYSQL_USER;
	$db_config['passwd'] = SAE_MYSQL_PASS;
	$db_config['dbname'] = SAE_MYSQL_DB;
}else{
	$db_config['host'] = '127.0.0.1';
	$db_config['user'] = 'root';
	$db_config['passwd'] = '';
	$db_config['dbname'] = 'db_demo';
}
$guest["r_name"] = $_POST["r_name"];
$guest["r_phone"] = $_POST["r_phone"];
$guest["r_email"] = $_POST["r_email"];
$guest["r_sex"] = $_POST["r_sex"];
$guest["r_tag"] = $_POST["r_tag"];
$sql = "INSERT INTO `t_guest` (`r_name` ,`r_phone` ,`r_email` ,`r_sex` ,`r_tag`)VALUES ('".$guest["r_name"]."','".$guest["r_phone"]."','".$guest["r_email"]."','".$guest["r_sex"]."','".$guest["r_tag"]."');";
$link ="";
if(in_array("port", array_keys($db_config)) && $db_config['port'] !=""){
	$link = mysql_connect($db_config['host'].":".$db_config['port'], $db_config['user'], $db_config['passwd']);
}else{
	$link = mysql_connect($db_config['host'], $db_config['user'], $db_config['passwd']);
}
mysql_select_db($db_config['dbname'], $link);
mysql_query("set names utf8");
$dbResult = mysql_query($sql);
$id = mysql_insert_id();
echo "finished:$id";
?>