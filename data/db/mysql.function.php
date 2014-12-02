<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 14/12/2
 * Time: 上午12:54
 */

require("../../libs/config/configs.php");

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
        if(!(self::$_instance instanceof self))
        {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    function connectToDB()
    {
        $this->conn = mysql_connect(DB_HOST,DB_USER,DB_PWD) or die("数据库连接失败".mysql_error());
        print_r("connect successfully");
        mysql_select_db(DB_NAME) or die("指定数据库不存在");
        mysql_set_charset(DB_CHARSET);
    }

    function closeDB()
    {
        mysql_close($this->conn);
    }
    /**
     * 插入操作
     * @param $table
     * @param $array
     * @return int
     */
    function insert($table,$array)
    {
        $keys = join(",",array_keys($array));
        $vals = "'".join("','",array_values($array))."'";
        $sql = "insert {$table} ($keys) values ({$vals}) ";
        mysql_query($sql);
        return mysql_insert_id();
    }

    /**
     * 更新数据
     *
     * @param $table
     * @param $array
     * @param null $where
     * @return int
     */
    function update($table,$array,$where = null)
    {
        $str = null;
        foreach($array as $key=>$value)
        {
            if($str == null)
            {
                $sep = "";
            }
            else
            {
                $sep = ", ";
            }

            $str .= $sep.$key."='".$value."'";
        }
        $sql = "update {$table} set {$str} ". ($where == null ? null : " where ". $where);

        mysql_query($sql);
        return mysql_affected_rows();
    }


}


?>