<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 14/12/1
 * Time: 上午12:59
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>表单验证页面_很简洁漂亮的Bootstrap响应式后台管理系统模板UniAdmin - JS代码网</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="../../css/uniform.css" />
    <link rel="stylesheet" href="../../css/select2.css" />
    <link rel="stylesheet" href="../../css/unicorn.main.css" />
    <link rel="stylesheet" href="../../css/unicorn.grey.css" class="skin-color" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>
<div id="content">
    <div id="content-header">
        <h1>用户列表</h1>
        <div class="btn-group">
            <a class="btn btn-large tip-bottom" title="Manage Files"><i class="icon-file"></i></a>
            <a class="btn btn-large tip-bottom" title="Manage Users"><i class="icon-user"></i></a>
            <a class="btn btn-large tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a>
            <a class="btn btn-large tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a>
        </div>
    </div>
    <div id="breadcrumb">
        <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> 用户管理</a>
        <a href="#" class="current">用户列表</a>
    </div>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
                <th style="width: 26px;"></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Tompson</td>
                <td>the_mark7</td>
                <td>
                    <a href="user.php"><i class="icon-pencil"></i></a>
                    <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Ashley</td>
                <td>Jacobs</td>
                <td>ash11927</td>
                <td>
                    <a href="user.php"><i class="icon-pencil"></i></a>
                    <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Audrey</td>
                <td>Ann</td>
                <td>audann84</td>
                <td>
                    <a href="user.php"><i class="icon-pencil"></i></a>
                    <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>John</td>
                <td>Robinson</td>
                <td>jr5527</td>
                <td>
                    <a href="user.php"><i class="icon-pencil"></i></a>
                    <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Aaron</td>
                <td>Butler</td>
                <td>aaron_butler</td>
                <td>
                    <a href="user.php"><i class="icon-pencil"></i></a>
                    <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>Chris</td>
                <td>Albert</td>
                <td>cab79</td>
                <td>
                    <a href="user.php"><i class="icon-pencil"></i></a>
                    <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>


    <div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Delete Confirmation</h3>
        </div>
        <div class="modal-body">
            <p class="error-text"><i class="icon-warning-sign modal-icon"></i>Are you sure you want to delete the user?</p>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
            <button class="btn btn-danger" data-dismiss="modal">Delete</button>
        </div>
    </div>
</div>
</body>
</html>