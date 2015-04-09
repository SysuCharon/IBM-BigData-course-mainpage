<?php 
    include_once("../model/public.php");
    include_once("../presenter/public.action.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>课程网站</title>
    <link rel="stylesheet" type="text/css" href="<?=$DIR['CSS']?>head.css">
    <link rel="stylesheet" type="text/css" href="<?=$DIR['CSS']?>body.css">
</head>
<body>
    <div id="header">
        <div class="container">
            <p id="left">课程信息网</p>
            <?php if(!isLogin()) { ?>
                <div id="right">
                    <button id="button-login">教师登录</button>
                </div>
            <?php } else { ?>
                <form action="../presenter/admin.action.php" method="post" id="right">
                    <input type="hidden" name="func" value="logout" />
                    <input type="submit" value="退出登录" id="button-logout" />
                </form>
            <?php } ?>
        </div>
    </div>

    <div id="index">
        <div class="container">
            <ul>
                <li>
                    <a class="selectedItem" href="index.php">主页</a>
                </li>
                <li>
                    <a href="informs.php">通知</a>
                </li>
                <li>
                    <a href="resources.php">资源</a>
                </li>
            </ul>
        </div>
    </div>
    
    <div id="bodybox">
        <div id="login">
            <form action="../presenter/admin.action.php" method="post">
                <input type="hidden" name="func" value="login" />
                <div>
                    <label class="inform">用户名：</label>
                    <input type="text" name="uname" placeholder="用户名" />
                </div>
                <div>
                    <label class="inform">密码：</label>
                    <input type="password" name="password" placeholder="密码" />
                </div>
                <div id="submit">
                    <input type="checkbox" name="autoLogin" checked="checked" />自动登录
                    <input type="submit" value="提交" />
                </div>
            </form>
        </div>
    
