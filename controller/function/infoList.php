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


<!--<div id="sidebar">-->
<!--    <a href="#" class="visible-phone"><i class="icon icon-home"></i> 首页</a>-->
<!--    <ul>-->
<!--        <li ><a href="index.php"><i class="icon icon-home"></i> <span>首页</span></a></li>-->
<!--        <li class="active submenu open">-->
<!--            <a href="#"><i class="icon icon-th-list"></i> <span>表单组件</span> <span class="label">3</span></a>-->
<!--            <ul>-->
<!--                <li><a href="form-common.php">通用组件</a></li>-->
<!--                <li class="active"><a href="form-validation.html">表单验证</a></li>-->
<!--                <li><a href="form-wizard.html">表单提示</a></li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>按钮 &amp; 图标</span></a></li>-->
<!--        <li><a href="interface.html"><i class="icon icon-pencil"></i> <span>UI元素</span></a></li>-->
<!--        <li><a href="tables.html"><i class="icon icon-th"></i> <span>表格</span></a></li>-->
<!--        <li><a href="grid.html"><i class="icon icon-th-list"></i> <span>网格布局</span></a></li>-->
<!--        <li class="submenu">-->
<!--            <a href="#"><i class="icon icon-file"></i> <span>其他页面</span> <span class="label">4</span></a>-->
<!--            <ul>-->
<!--                <li><a href="invoice.html">清单</a></li>-->
<!--                <li><a href="chat.html">聊天</a></li>-->
<!--                <li><a href="calendar.html">日历</a></li>-->
<!--                <li><a href="gallery.html">相册</a></li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="charts.html"><i class="icon icon-signal"></i> <span>图表统计</span></a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="widgets.html"><i class="icon icon-inbox"></i> <span>插件</span></a>-->
<!--        </li>-->
<!--    </ul>-->
<!---->
<!--</div>-->

<div id="style-switcher">
    <i class="icon-arrow-left icon-white"></i>
    <span>Style:</span>
    <a href="#grey" style="background-color: #555555;border-color: #aaaaaa;"></a>
    <a href="#blue" style="background-color: #2D2F57;"></a>
    <a href="#red" style="background-color: #673232;"></a>
</div>

<div id="content">
    <div id="content-header">
        <h1>Form validation</h1>
        <div class="btn-group">
            <a class="btn btn-large tip-bottom" title="Manage Files"><i class="icon-file"></i></a>
            <a class="btn btn-large tip-bottom" title="Manage Users"><i class="icon-user"></i></a>
            <a class="btn btn-large tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a>
            <a class="btn btn-large tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a>
        </div>
    </div>
    <div id="breadcrumb">
        <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="#">Form elements</a>
        <a href="#" class="current">Validation</a>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title">
								<span class="icon">
									<i class="icon-align-justify"></i>									
								</span>
                        <h5>Basic validation</h5>
                        <span class="label label-important">48 notices</span>
                    </div>
                    <div class="widget-content nopadding">
                        <form class="form-horizontal" method="post" action="#" name="basic_validate" id="basic_validate" novalidate="novalidate" />
                        <div class="control-group">
                            <label class="control-label">Required</label>
                            <div class="controls">
                                <input type="text" name="required" id="required" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Email</label>
                            <div class="controls">
                                <input type="text" name="email" id="email" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Date</label>
                            <div class="controls">
                                <input type="password" name="date" id="date" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">URL</label>
                            <div class="controls">
                                <input type="password" name="url" id="url" />
                            </div>
                        </div>
                        <div class="form-actions">
                            <input type="submit" value="Validate" class="btn btn-primary" />
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title">
								<span class="icon">
									<i class="icon-align-justify"></i>									
								</span>
                        <h5>Number validation</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form class="form-horizontal" method="post" action="#" name="number_validate" id="number_validate" novalidate="novalidate" />
                        <div class="control-group">
                            <label class="control-label">Minimal value</label>
                            <div class="controls">
                                <input type="text" name="min" id="min" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Maximum value</label>
                            <div class="controls">
                                <input type="text" name="max" id="max" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Only number</label>
                            <div class="controls">
                                <input type="text" name="number" id="number" />
                            </div>
                        </div>
                        <div class="form-actions">
                            <input type="submit" value="Validate" class="btn btn-primary" />
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title">
									<span class="icon">
										<i class="icon-align-justify"></i>									
									</span>
                            <h5>Password validation</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form class="form-horizontal" method="post" action="#" name="password_validate" id="password_validate" novalidate="novalidate" />
                            <div class="control-group">
                                <label class="control-label">Password</label>
                                <div class="controls">
                                    <input type="password" name="pwd" id="pwd" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Confirm password</label>
                                <div class="controls">
                                    <input type="password" name="pwd2" id="pwd2" />
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" value="Validate" class="btn btn-primary" />
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div id="footer" class="span12">
                2012 &copy; UniAdmin.</div>
        </div>
    </div>
</div>



<script src="js/jquery.min.js"></script>
<script src="js/jquery.ui.custom.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.uniform.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/unicorn.js"></script>
<script src="js/unicorn.form_validation.js"></script>
</body>
</html>