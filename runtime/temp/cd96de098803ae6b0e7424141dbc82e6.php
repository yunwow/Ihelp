<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:36:"./views/home/mobile/auth\login.phtml";i:1569485064;}*/ ?>
<!DOCTYPE HTML>
<html>

	<head>
		<meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>登录</title>
		<link href="/static/home/mobile/css/reset_5.css" rel="stylesheet" type="text/css" />
		<link href="/static/home/mobile/css/style.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="/static/home/mobile/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="/static/home/mobile/css/new_style.css" />
        <script type="text/javascript" src="/static/home/mobile/js/jquery.min.js"></script>
        <!-- 弹出层 -->
        <link rel="stylesheet" href="/static/plugins/dialog/css/dialog.css" />
        <script src="/static/plugins/dialog/lib/zepto.min.js"></script>
        <script src="/static/plugins/dialog/js/dialog.js"></script>
        <!-- 弹出层 -->
        <script type="text/javascript" src="/static/home/mobile/js/global.js"></script>
	</head>
	<style type="text/css">
		    .site-header .tit-name {
            overflow: initial;
        }
        html{
            height:100%;
        }
        #tomial {
            width: 100%;
            height: 30px;
            color: #fff;
            font-size: 14px;
            background-color: #098eff;
            pointer-events: initial;
            border: none;
            border-radius: 3px;
            outline: none;
            -webkit-appearance: none;
        }
        #body,#body>.content{
           width:100%;
           height:100%;
        }
        #body>div>div{
            width:100%;
        }
        .item-box {
           background: #f4f4f4;border: none;
    margin: 0 30px 15px 30px;
    border: 1px solid #fff;
    border-radius: 25px;
}
.item-box input {
    line-height: 40px;
    color: #fff;
    background-color: transparent;
    border: none;
    outline: none;
}
.logo{
    margin: 10% 0 10% 0;
}
	</style>
	<body class="login-panel" id="body">
		<!-- <div class="site-header loginTitle">
			<a href="/home.html" class="back"></a>
			<div class="tit-name"><img src="<?php echo to_media(!empty($site['logo'])?$site['logo']:''); ?>" /></div>
        </div> -->
        <div class="flex-ali content">
        <div class="flex-col">
            <div class="logo">
                <img class="tit-name" src="<?php echo to_media(!empty($site['logo'])?$site['logo']:''); ?>" style="display: block;margin: 0 auto;">
            </div>
            <div class="main-cont">
                <form id="login_form">
                    <div class="main loginMain">
                        <!-- <div class="member-tab">
                            <ul class="m_tab_tit">
                                <li class="active">
                                    <a href="/home/auth/login.html">账号登录</a>
                                </li>
                                <li>
                                    <a href="/home/register.html">免费注册</a>
                                </li>
                            </ul>
                        </div> -->
                        <div class="bk10"></div>
                        <div class="denglu-box">
                            <div class="dl-form">
                                <div class="item-box">
                                    <input type="text" class="m_txt" placeholder="用户名/手机号" name="username">
                                </div>
                                <div class="item-box">
                                    <input type="password" class="m_txt" placeholder="输入密码" name="password">
                                </div>
                                <div class="item-box">
                                    <input type="text" class="m_txt" placeholder="输入验证码" name="captcha">
                                    <div class="yzm">
                                        <img style="width:90px; height:30px;"  src="<?php echo captcha_src(); ?>" onclick="this.src='<?php echo captcha_src(); ?>?'+Math.random()" alt="captcha" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="member-btn">
                    <input type="button" class="button2 active js-login" value="登录">&nbsp;
                    <p>
                    <a href="/home/register.html">免费注册</a>
                        <a class="remember-btn" href="findpwd.html">忘记密码</a>
                    </p>
                </div>
                <div class="divider" style="display: none;">
                    <label>其他方式登录</label>
                </div>
                <div class="other-login" style="display: none;">
                    <div class="other-login-item weixinLogin">
                        <img src="/static/home/mobile/picture/weixin.png" />
                        <p>微信登录</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <script type="text/javascript">
            $(function () {
                //确认登陆
                $('.js-login').click(function () {
                    $.post(
                        window.location.href,
                        $('#login_form').serialize(),
                        function(res) {
                            $('.yzm img').click();
                            message(res.message,res.redirect,res.type);
                        },'json'
                    );
                });

                //回车登录
                $(document).keyup(function(event){
                    if(event.keyCode ==13){
                        $('.js-login').click();
                    }
                });
            });
        </script>
</body>
</html>