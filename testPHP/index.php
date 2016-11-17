<?php
ini_set('display_errors', true);
error_reporting(E_ERROR);
// 测试mem
$memLink = new Memcache;
$memLink->connect('127.0.0.1', '11211');
$memLink->set("testkey","testValue",0,3600*24);
var_dump($memLink->get("testkey"));
//测试mysql

$link = mysql_connect('localhost', 'user', 'password');
mysql_select_db('dbname', $link);
mysql_query("set names utf8");
$query = "select * from t_table";
$result = mysql_query($query,$link);
printf("Select returned %d rows.\n", mysql_num_rows($result));

//测试XML
$note=<<<XML
<note>
<to>temp@bihe0832.com</to>
<from>blog@bihe0832.com/from>
<heading>Test</heading>
<body>This is a test e-mail</body>
</note>
XML;
$xml=simplexml_load_string($note);
print_r($xml);

//测试json
$testArray = array();
$testArray["name"] = "zixie";
$testArray["mail"] = "temp@bihe0832.com";
var_dump($testArray);
$testJson = json_encode($testArray);
var_dump($testJson);
?>