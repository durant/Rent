<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 14/12/7
 * Time: 上午2:43
 */

header("Content-type:text/html;charset=utf-8");

include dirname(__FILE__) . '/common/mysql.function.php';

echo  dirname(__FILE__)  . "<br>";

$mysql = MysqlFunction::getInstance();
$time = time();
$array = array("username"=>"kevin","password"=>md5("admin"),"email"=>"317327966@qq.com","uid"=>md5($time));

var_dump($array);

echo "<br>";
$mysql->connectToDB();
$result = $mysql->findUserByUsername("rent_admin","kevin");
if($result)
{
    echo "该用户已存在";
}
else
{
    $mysql->insert($array,"rent_admin");
}
$mysql->closeDB();
//
//$mysql->deleteByUserId("admin");
//$mysql->findUserByUsername("rent_admin",null,null);
