<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 14/12/7
 * Time: 上午2:43
 */

//header("Content-type:text/html;charset=utf-8");

require_once(dirname(__FILE__) . '/common/db/mysql.function.php');

$mysql = MysqlFunction::getInstance();
$mysql->connectToDB();

$time = time();
echo date('Y-m-d h:m:s',$time) . "<br>";

$date = new DateTime();
$zone = new DateTimeZone('Asia/Shanghai');
$date->setTimezone($zone);
$dateString = $date->format('Y-m-d');
echo $dateString;


//$array = array("username"=>"admin","password"=>md5("admin"),"email"=>"317327966@qq.com","uid"=>md5($time));
//$result = $mysql->findUserByUsername("rent_admin","kevin");
//if($result)
//{
//}
//else
//{
//    $mysql->insert($array,"rent_admin");
//}
//$username = 'admin';
//$password = md5('admin');
//$uid=md5($username.$password.strval($time));
//$clientid = md5(strval($time));
//$user = array('username'=>$username,'password'=>$password,'createTime'=>$time,'userid'=>$uid,'clientid'=>$clientid);
//var_dump($user);
//$mysql->insert($user,'rent_users');
//echo md5('secrete_rent_admin');

//$user = $mysql->getUserWithUnameAndPWD('rent_admin','admin',md5('admin'));
$mysql->closeDB();


//$mysql->deleteByUserId("admin");
//$mysql->findUserByUsername("rent_admin",null,null);
