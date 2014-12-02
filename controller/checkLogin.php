<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 14/12/2
 * Time: 上午1:48
 */

require_once "mysql.function.php";

$mysql = MysqlFunction::getInstance();
$mysql->connectToDB();

$array = array("user"=>"admin","password"=>md5("admin"),"email"=>"317327966@qq.com");
$mysql->insert("rent_admin",$array);
$mysql->closeDB();