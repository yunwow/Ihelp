<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:42:"./views/home/mobile/profile\password.phtml";i:1569494784;s:72:"C:\phpStudy\PHPTutorial\WWW\public\views\home\mobile\common\header.phtml";i:1555171596;}*/ ?>
﻿

<!DOCTYPE HTML>
<html>

<head>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>修改密码</title>
    		
		<link rel="stylesheet" type="text/css" href="/static/home/mobile/css/ydui.css"/>
    <script type="text/javascript" src="/static/home/mobile/js/ydui.flexible.js"></script>
    <link rel="shortcut icon" href="clientapp/images/new_images/favicon.ico" />
<link href="/static/home/mobile/css/reset_5.css" rel="stylesheet" type="text/css" />
<link href="/static/home/mobile/css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/static/home/mobile/css/font-awesome.min.css">
<link href="/static/home/mobile/css/new_style.css" rel="stylesheet" type="text/css" />
<!-- 弹出层 -->
<link rel="stylesheet" href="/static/plugins/dialog/css/dialog.css" />
<script src="/static/home/mobile/js/jquery-2.0.3.min.js"></script>
<script src="/static/plugins/dialog/js/dialog.js"></script>
<!-- 弹出层 -->
<script type="text/javascript" src="/static/plugins/clipboard.min.js"></script>
<script type="text/javascript" src="/static/home/mobile/js/global.js?v=2"></script>
    <style>
        body{
            background: #F5F5F5 !important;
        }
    </style>
</head>
<body>

<header class="m-navbar">
    <a href="javascript:history.back()" class="navbar-item">
        <i class="back-ico"></i>
    </a>
    <div class="navbar-center">
        <span class="navbar-title">修改密码</span>
    </div>
    <a href="#" class="navbar-item">
    </a>
</header>
<div class=" bindMail">
    <form id="post_form">
        <div class="m-cell">
            <div class="cell-item">
                <div class="cell-left">原始密码：</div>
                <div class="cell-right">
                    <input type="text" name="old_password" id="pwd" class="cell-input m_txt"  placeholder="输入原始密码" autocomplete="off" >
                </div>
            </div>
            <div class="cell-item">
                <div class="cell-left">新密码：</div>
                <div class="cell-right">
                    <input type="text" name="password" id="newPwd" class="cell-input m_txt"  placeholder="输入新密码" autocomplete="off">
                </div>
            </div>
            <div class="cell-item">
                <div class="cell-left">重复新密码：</div>
                <div class="cell-right">
                    <input type="text" name="password_confirm" class="cell-input m_txt" id="againPwd"  placeholder="重复新密码" autocomplete="off"  >
                </div>
            </div>
        </div>
    </form>
    <div class="member-btn">
            <input type="button" class="button1" value="提交">
    </div>
</div>
<script type="text/javascript">
    $(function () {
            //设置邮箱
            $('.button1').click(function () {
                $.post(
                    window.location.href,
                    $('#post_form').serialize(),
                    function (ret) {
                        message(ret.message,ret.redirect,ret.type);
                    },'json'
                );
            });
        });
</script>
</body>
</html>