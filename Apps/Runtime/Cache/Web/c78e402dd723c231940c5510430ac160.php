<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>帝友网</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="/assets/js/plugin/layer/skin/layer.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/member/member.css">
    <script type="text/javascript" src="/assets/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/assets/js/diyou.js"></script>
    <script type="text/javascript" src="/assets/js/base.js"></script>
</head>
<body>
    <!-- 登录 -->
    <div class="page page-login">
        <div class="login-box register-box">
            <div class="hd">
                <a class="logo" href=""><img src="assets/images/logo.png"></a>
            </div>
            <div class="bd">
                <form action="" method="post" >
                    <div class="form-group">
                        <input class="form-control" type="text" name="" placeholder="用户名" />
                        <i class="iconfont">&#xe602;</i>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="passowrd" name="" placeholder="密码" />
                        <i class="iconfont">&#xe603;</i>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="" placeholder="邮箱" />
                        <i class="iconfont">&#xe604;</i>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="" placeholder="手机号码" />
                        <i class="iconfont">&#xe600;</i>
                    </div>
                    <div class="form-group form-group-code">
                        <input class="form-control" type="text" name="" placeholder="验证码" />
                        <input class="btn" type="button" value="获取验证码">
                        <i class="iconfont">&#xe605;</i>
                    </div>
                    <div class="form-group  mt40">
                        <input class="btn btn-blue btn-lg btn-block" type="submit" value="注册" />
                    </div>
                    <div class="form-group">
                        已有帐号？<a class="c-blue" href="">马上登录</a>
                    </div>
                </form>
            </div>            
        </div>
    </div>

    <script type="text/javascript">
        diyou.use("index", function(fn) {
            //fn.index();
        })
    </script>
</body>
</html>