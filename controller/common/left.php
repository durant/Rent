<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 14/12/1
 * Time: 上午12:24
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>表单验证页面_很简洁漂亮的Bootstrap响应式后台管理系统模板UniAdmin - JS代码网</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="../../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../../css/bootstrap-responsive.min.css"/>
    <link rel="stylesheet" href="../../css/uniform.css"/>
    <link rel="stylesheet" href="../../css/select2.css"/>
    <link rel="stylesheet" href="../../css/unicorn.main.css"/>
    <link rel="stylesheet" href="../../css/unicorn.grey.css" class="skin-color"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<div id="sidebar">
    <a href="#" class="visible-phone"><i class="icon icon-home"></i> 首页</a>
    <ul>
        <li class="active">
            <a href="../function/main.php" target="mainFrame"><i class="icon icon-home"></i> <span>首页</span></a></li>
        <li class="submenu">
            <a href="#"><i class="icon icon-th-list"></i> <span>功能管理</span> <span class="label">3</span></a>
            <ul>
                <li><a href="../function/publicInfo.php" target="mainFrame">发布信息</a></li>
                <li><a href="../function/infoList.php" target="mainFrame">信息列表</a></li>
            </ul>
        </li>
        <!--            <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>按钮 &amp; 图标</span></a></li>-->
        <!--            <li><a href="interface.html"><i class="icon icon-pencil"></i> <span>UI元素</span></a></li>-->
        <!--            <li><a href="tables.html"><i class="icon icon-th"></i> <span>表格</span></a></li>-->
        <!--            <li><a href="grid.html"><i class="icon icon-th-list"></i> <span>网格布局</span></a></li>-->
        <li class="submenu">
            <a href="#"><i class="icon icon-file"></i> <span>用户管理</span> <span class="label">4</span></a>
            <ul>
                <li><a href="<?php echo "index.php?action=userlist" ?>">用户列表</a></li>
                <li><a href="<?php echo "index.php?action=addUser" ?>">添加用户</a></li>
            </ul>
        </li>
        <!--            <li>-->
        <!--                <a href="charts.html"><i class="icon icon-signal"></i> <span>图表统计</span></a>-->
        <!--            </li>-->
        <!--            <li>-->
        <!--                <a href="widgets.html"><i class="icon icon-inbox"></i> <span>插件</span></a>-->
        <!--            </li>-->
    </ul>

</div>
<script src="js/excanvas.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.ui.custom.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.flot.min.js"></script>
<script src="js/jquery.flot.resize.min.js"></script>
<script src="js/jquery.peity.min.js"></script>
<script src="js/fullcalendar.min.js"></script>
<script src="js/unicorn.js"></script>
<script src="js/unicorn.dashboard.js"></script>
</body>
</html>
