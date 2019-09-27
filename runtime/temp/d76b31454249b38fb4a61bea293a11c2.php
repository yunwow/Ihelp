<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:40:"./views/home/mobile/recharge\index.phtml";i:1569495567;s:72:"C:\phpStudy\PHPTutorial\WWW\public\views\home\mobile\common\header.phtml";i:1555171596;}*/ ?>
<html>
<head>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>充值</title>
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
    <!-- 弹出层 -->
    <script src="/static/plugins/dialog/js/dialog.js"></script>
    <!-- 弹出层 -->
    <link href="/static/home/mobile/css/reset_5.css" rel="stylesheet" type="text/css" />
    <!-- <link href="/static/home/mobile/css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/static/home/mobile/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/static/home/mobile/css/new_page.css" />
    <link rel="stylesheet" href="/static/plugins/dialog/css/dialog.css" /> -->

    <link rel="stylesheet" type="text/css" href="/static/home/mobile/css/ydui.css"/>
    <script type="text/javascript" src="/static/home/mobile/js/ydui.flexible.js"></script>

    <style type="text/css">
    .new-top-up{
        margin-top:0.1rem;
    }
        .images-box{
            display: flex;
            display: -webkit-flex;
            flex-flow: wrap;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .images-box .item{
            margin-right: 5px;
            margin-bottom: 5px;
            width: 100px;
            height: 100px;
            position: relative;
        }
        .images-box .item input{
            position: absolute;
            z-index: 3;
            opacity: 0;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
        }
        .images-box .item span{
            display: block;
            width: 100px;
            height: 100px;
            text-align: center;
            line-height: 60px;
        }
        .images-box .img-item img{
            width: 100%;
            height: 100%;
        }
        .dialog {
          position: fixed;
          left: 0;
          top: 0;
          z-index: 10001;
          width: 100%;
          height: 100%;
        }
        .dialog-content {
            width: 70%;
        }
        .dialog-overlay {
          position: absolute;
          top: 0;
          left: 0;
          z-index: 10002;
          width: 100%;
          height: 100%;
          background-color: rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
    <!-- <header class="new-header" style="padding-top: 15px;">
        <a href="javascript:history.go(-1)" class="back">
            <img src="/static/home/mobile/picture/return.png" />
        </a>
        <div class="tit-name">充值</div>
        <span class="dowm-btn publish-task-btn">
            <a href="/home/account/rechargelog.html" class="sc" style="color: #fff;">明细</a>
        </span>
    </header> -->
    <header class="m-navbar">
			<a href="javascript:history.go(-1)"class="navbar-item">
				<i class="back-ico"></i>
			</a>
			<div class="navbar-center">
				<span class="navbar-title">账号信息</span>
			</div>
			<a href="/home/account/rechargelog.html" class="navbar-item">
            明细
			</a>
		</header>
    <div class="new-top-up">
        <div class="update-box" id="hasZfb" style="">
            <form id="post_form" action="/home/recharge/post.html" method="post">

                
            <div class="m-cell">
                <div class="cell-item">
                    <div class="cell-left">姓名：</div>
                    <div class="cell-right">
                        <input type="text" name="realname" value="<?php echo !empty($member['alipay_realname'])?$member['alipay_realname']:''; ?>" class="m_txt cell-input" placeholder="请输入真实姓名">
                    </div>
                </div>
                <div class="cell-item">
                    <div class="cell-left">账号：</div>
                    <div class="cell-right">
                        <input type="text" name="account" value="<?php echo !empty($member['alipay_account'])?$member['alipay_account']:''; ?>" class="m_txt cell-input" placeholder="请输入卡号、支付宝、微信账号">
                    </div>
                </div>
                <div class="cell-item">
                    <div class="cell-left">￥</div>
                    <div class="cell-right">
                    <input type="text" class="m_txt cell-input" placeholder="请输入充值金额" id="credit2" name="credit2">
                    </div>
                </div>
                
            </div>
            
            <div class="member-btn">
            <input type="hidden" name="pay_type" id="pay_type" />
                    <input type="button" class="button1" value="确认">
            </div>
               
            </form>
        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            $('.button1').click(function () {
                var credit2 = $("#credit2").val();
                var floatReg = /^\d+(\.\d+)?$/;
                if (!floatReg.test(credit2)) {
                    message('请输入正确格式的充值金额','','error');
                    event.preventDefault();//  阻止元素发生默认的行为
                    return;
                }

                $(document).dialog({
                    type : 'confirm',
                    titleShow: false,
                    overlayClose: true,
                    content: '选择支付方式',
                    buttonStyle: 'stacked',  // side: 并排; stacked: 堆叠
                    buttons: [          
                        {
                            name: '微信支付',
                            callback: function() {
                                $("#pay_type").val(1);
                                submit_post();
                            }
                        },
                        {
                            name: '支付宝',
                            callback: function() {
                                $("#pay_type").val(2);
                                submit_post();
                            }
                        },
                        {
                            name: '取消充值',
                            callback: function() {
                            }
                        }
                    ]
                });
            });

            function submit_post() {
                $("form").submit();
            }
        });
    </script>
</body>
</html>