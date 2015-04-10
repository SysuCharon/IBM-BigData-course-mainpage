<?php 
    include_once("../model/public.php");
    include_once("../presenter/public.action.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>课程网站</title>
    <link rel="stylesheet" type="text/css" href="<?=$DIR['CSS']?>public.css" />
    <link rel="stylesheet" type="text/css" href="<?=$DIR['CSS']?>head.css" />
    <link rel="stylesheet" type="text/css" href="<?=$DIR['CSS']?>body.css" />
</head>
<body>
    <div id="cover"></div>
    <div id="header">
        <div class="container">
            <h1 id="head-title">课程信息网</h1>
            <?php if(!isLogin()) { ?>
                <div class="right">
                    <button id="button-login">教师登录</button>
                </div>
            <?php } else { ?>
                <form action="../presenter/admin.action.php" method="post" class="right">
                    <input type="hidden" name="func" value="logout" />
                    <input type="submit" value="退出登录" id="button-logout" />
                </form>
            <?php } ?>
        </div>
    </div>
    <div class="clear-float">
        <ul id="menu">
            <li class="selectedItem">
                <a href="index.php">主页</a>
            </li>
            <li>
                <a href="informs.php">通知</a>
            </li>
            <li>
                <a href="resources.php">资源</a>
            </li>
        </ul>
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
                <div id="autoLogin">
                    <input type="checkbox" name="autoLogin" checked="checked" />自动登录
                </div>
                <div class="submit">
                    <input type="submit" value="提交" id="button-submit" />
                    <input type="button" value="取消" id="button-cancel" />
                </div>
            </form>
        </div>

        <div class="container">
    
