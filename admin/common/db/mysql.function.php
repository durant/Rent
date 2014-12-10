<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 14/12/7
 * Time: 上午2:14
 */

require_once(dirname(dirname(dirname(__FILE__))).'/base.php');

require(BASE_PATH . '/config/config.php');

class MysqlFunction
{

    private $conn;
    private static $_instance;

    private function __construct()
    {

    }

    private function __clone()
    {

    }

    public static function getInstance()
    {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function connectToDB()
    {
        $this->conn = mysql_connect(DB_HOST, DB_USER, DB_PWD);
        if (!$this->conn) {
//            die('Could not connect: ' . mysql_error()) . "<br>";
        }
//        echo 'Connected successfully' . "<br>";
        mysql_select_db(DB_NAME, $this->conn);
        mysql_set_charset(CHARSET);
    }

    public function closeDB()
    {
        mysql_close($this->conn);
    }

    public function insert($arr, $table)
    {

        $keys = "`".implode("`,`",array_keys($arr))."`";
        $values = "'".implode("','",array_values($arr)) . "'";

        $sql = "insert into `" . $table . "` (" . $keys . ") " . "values ( " . $values . ")";
//        echo $sql . "<br>" ;

        $result = mysql_query($sql);
        if($result)
        {
//            echo "insert successfully" . "<br>";
        }
        else
        {
//            echo "insert failed" . "<br>";
        }
        return $result;
    }

    function deleteByUserId($uid)
    {
        $sql = "delete from rent_admin WHERE username='" . $uid . "'";
//        echo $sql . "<br>" ;
        $result = mysql_query($sql);
        if($result)
        {
//            echo "delete successfully" . "<br>";
        }
        else
        {
//            echo "delete failed" . "<br>";
        }
        return $result;
    }

    public function findUserByUsername($table,$username =null ,$id = null)
    {
        $temp = $username == null ? ($id == null ? null : $id) : $username;

        $varName = $temp ==null ? null : $this->get_variable_name($username, get_defined_vars());
        $where = $varName == null ? "" : (" where " . $varName . "='" . $temp . "'");

        $sql = "select * from `" . $table ."`" . $where;

//        echo $sql . "<br>" ;
        $result = mysql_query($sql);
        if(!$result)
        {
            return false;
        }
        $users = mysql_fetch_assoc($result);
        return $users;
    }

    function get_variable_name($var, $scope=null){

        $scope = $scope==null? $GLOBALS : $scope; // 如果没有范围则在globals中找寻

        // 因有可能有相同值的变量,因此先将当前变量的值保存到一个临时变量中,然后再对原变量赋唯一值,以便查找出变量的名称,找到名字后,将临时变量的值重新赋值到原变量
        $tmp = $var;

//        $var = 'tmp_value_'.mt_rand();
        $name = array_search($var, $scope, true); // 根据值查找变量名称

        $var = $tmp;
        return $name;
    }

    function getUserWithUnameAndPWD($table,$username,$pwd)
    {
        $where = 'username=' . '\'' . $username . '\'' . ' AND ' . 'password=' . '\'' . $pwd . '\'';
        $sql = 'SELECT * FROM `' . $table . '` WHERE ' . $where;
        $result = mysql_query($sql);
        if(!$result)
        {
            return null;
        }
        $user = mysql_fetch_assoc($result);
        return $user;
    }

}

?>

