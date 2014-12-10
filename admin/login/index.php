<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 14/12/9
 * Time: 下午4:56
 */

require_once(dirname(dirname(__FILE__)) . '/common/requestValidation.php');

header('Content-Type:application/json;charset=utf-8');

$err = null;
$msg = null;
$code = 0;

// 校验API接口


if(isset($_POST["method"]))
{
    $method = $_POST["method"];
    if($method != "login")
    {
        $err = "方法名错误";
        $code = 11;
        $result = generateJson($code,null,$err);
        exit($result);
    }
}

if(isset($_POST['createTime']))
{
    $createTime = $_POST['createTime'];
    $isOutTime = RequestValidation::validateTime($createTime);
    if (!$isOutTime)
    {
        $err = '请求已过期';
        $code = 12;
        $result = generateJson($code,null,$err);
        exit($result);
    }
}

if(isset($_POST['v']))
{
    $version = $_POST['v'];
    $isVersion = RequestValidation::validateVersion($version);
    if(!$isVersion)
    {
        $err = '参数错误';
        $code = 13;
        $result = generateJson($code,null,$err);
        exit($result);
    }
}


if(isset($_POST['username']) && isset($_POST['password']))
{
    global $user;

    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);
    $user = RequestValidation::validateUsername($username,$password);
    if($user == null)
    {
        $err = '用户名或密码错误';
        $code = 14;
        $result = generateJson($code,null,$err);
        exit($result);
    }
    else
    {
        $code = 100;
        $msg = '登录成功';
        $user_array = array('userid'=>$user['userid'],'username'=>$username,'gender'=>$user['gender'],'age'=>$user['age'],'iconid'=>$user['iconid'],'email'=>$user['email']);
        $result = generateJson($code,$user_array,$msg);
        exit($result);
    }
}
else
{
    $err = '缺少参数';
    $code = 16;
    $result = generateJson($code,null,$err);
    exit($result);
}

function generateJson($code,$result,$msg)
{
    $resultJson = array('code'=>$code,'result'=>$result,'message'=>$msg);
    return json_encode($resultJson);
}

?>
