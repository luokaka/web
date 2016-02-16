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

<body class="bg-white">
    <div class="activeclick" id="stept1" style="display:block;">
        <div class="activeclick-title">
        第一步：填写申请
        </div>
        <div class="activeclick-con">
            <p>
                <label>您当前邮箱</label>
                <span class="lomail">5989656464@qq.com</span>
                <a href="javascript:;" class="makecode">获取验证码</a>
            </p>
             <p>
                <label><em>*</em>验证码</label>
                <input type="text" class="input-text" name="Emailcode">
            </p>
            <p>
            	<a class="clickMail" id="nextstept" href="javascript:;">下一步</a>
            </p>
            <p class="beiz"><i class="iconfont">&#xe61a;</i>修改成功后，原邮箱将无法继续再次登录。所有信息保存到新邮箱中。</p>
        </div>
    </div>
    <div class="activeclick" id="stept2" style="display: none;">
        <div class="activeclick-title">
        第二步：激活新邮箱
        </div>
        <div class="activeclick-con">
            <p>
                <label><em>*</em>输入新的邮箱</label>
               <input type="text" class="input-text" name="Email" >
                <a href="javascript:;" class="makecode">获取验证码</a>
            </p>
            <p class="c-red"><i class="iconfont">&#xe609;</i>邮箱格式有误</p>
             <p>
                <label><em>*</em>验证码</label>
                <input type="text" class="input-text" name="Emailcode">
            </p>
             <p class="c-red"><i class="iconfont">&#xe609;</i>请登录新的邮箱查看验证码</p>
             <p>
            <p>
                <a class="clickMail" href="javascript:;">确认提交</a>
            </p>
        </div>
    </div>
</body>
 <script type="text/javascript">
    diyou.use("app/common", function(fn) {
        fn.iframedisplay();      
    })
    </script>
</html>