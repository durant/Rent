<?php

/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 14/12/9
 * Time: 下午7:33
 */

header('Content-Type:application/json;charset=utf-8');

require_once(dirname(__FILE__).'/db/mysql.function.php');

class RequestValidation
{
    static function validateTime($time)
    {
        $curTime = time();
        $diff = $curTime - $time;
        if($diff > 10 * 60 * 1000)
        {
            return false;
        }
        return true;
    }

    static function validateSessionId($time)
    {
    }

    static function validateVersion($v)
    {
        if($v == V)
        {
            return true;
        }
        return false;
    }

    static function validateUsername($username,$pwd)
    {
        $mysql = MysqlFunction::getInstance();
        $mysql->connectToDB();
        $result = $mysql->getUserWithUnameAndPWD('rent_users',$username,$pwd);
        $mysql->closeDB();
        return $result;
    }
}


?>