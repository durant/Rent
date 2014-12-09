<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 14/12/7
 * Time: 上午2:43
 */

header("Content-type:text/html;charset=utf-8");

require_once(dirname(__FILE__) . '/common/db/mysql.function.php');

$mysql = MysqlFunction::getInstance();
$mysql->connectToDB();

$time = time();
$array = array("username"=>"admin","password"=>md5("admin"),"email"=>"317327966@qq.com","uid"=>md5($time));
$result = $mysql->findUserByUsername("rent_admin","kevin");
if($result)
{
}
else
{
    $mysql->insert($array,"rent_admin");
}

//$user = $mysql->getUserWithUnameAndPWD('rent_admin','admin',md5('admin'));
$mysql->closeDB();


//$mysql->deleteByUserId("admin");
//$mysql->findUserByUsername("rent_admin",null,null);
