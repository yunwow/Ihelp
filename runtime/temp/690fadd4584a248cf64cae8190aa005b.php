<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:38:"./views/home/mobile/charge\index.phtml";i:1555171596;s:72:"C:\phpStudy\PHPTutorial\WWW\public\views\home\mobile\common\header.phtml";i:1555171596;}*/ ?>
﻿<!DOCTYPE HTML>
<html>

    <head>
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>资金流水</title>
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
        <link rel="shortcut icon" href="clientapp/images/new_images/favicon.ico" />
        <link href="/static/home/mobile/css/reset_5.css" rel="stylesheet" type="text/css" />
        <link href="/static/home/mobile/css/style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="/static/home/mobile/css/new_page.css">
        <link rel="stylesheet" href="/static/home/mobile/css/layui.css">
    </head>

    <body>
        <header class="new-header">
            <a onclick="history.back()" class="back">
                <img src="/static/home/mobile/picture/return.png" />
            </a>
            <div class="tit-name">资金流水</div>
        </header>
        <div class="new-gold-detial">
            
            <div class="new-all-profit">
                您的总收益：<span id="all_profit"><?php echo $credit2; ?></span>元
            </div>
            <div class="update-box mx_list" id="table">
                <ul id="flow">
                </ul>
                <!-- <div class="alipa-box">
                    <div class="task-none" style="display: none;text-align: center;">暂无数据</div>
                </div> -->
            </div>
        </div>
        <script type="text/javascript" src="/static/home/mobile/js/layui/layui.js"></script>
        <script type="text/javascript">
        $(function(){
                //流加载
                layui.use('flow', function(){
                    var flow = layui.flow;
                    flow.load({
                            elem: '#table'
                            ,done: function(page, next){
                                    var lis = [];
                                    $.get('/home/charge/ajax?page='+page, function(res){
                                        layui.each(res.data.data, function(index, item){
                                                $("#flow").append('<li><b><i>'+item.num+'元</i><time>'+item.create_time+'</time></b><p>'+item.title+'<span>'+item.remark+'</span></p>    </li>');
                                        });
                                        next(lis.join(''), res.data.length > 0 ? true : false);
                                    });
                            }
                    });
                });
        });
        </script>
</body>

</html>