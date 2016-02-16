<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>帝友网</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/js/plugin/layer/skin/layer.css">
    <link rel="stylesheet" type="text/css" href="assets/css/member/member.css">
    <script type="text/javascript" src="assets/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="assets/js/diyou.js"></script>
    <script type="text/javascript" src="assets/js/base.js"></script>
</head>

<body class="bg-white">
    <div class="activeclick">
        <div class="activeclick-con">
            <p>
                <label><em>*</em>原始密码</label>
                <input type="text" class="input-text" name="oldpassword">
                <span class="msgnotice"><i class="iconfont c-green">&#xe60b;</i></span>
            </p>
             <p>
                <label><em>*</em> 新密码</label>
                <input type="text" class="input-text" name="newpassword">
                 <span class="msgnotice"><i class="iconfont c-blue">&#xe61a;</i>请输入6-15位英文数字组合</span>
                <div class="pw_strength">
                <div class="pw_bar"></div>
                <div class="pw_letter">
                    <span data-phase-id="r_1_8" class="tsl">弱</span>
                    <span data-phase-id="r_1_9" class="tsl">中</span>
                    <span data-phase-id="r_1_10" class="tsl">强</span>
                </div>
                </div>
            </p>
            <p>
                <label><em>*</em>确认密码</label>
                <input type="text" class="input-text" name="checkpassword">
                <span class="msgnotice c-red"><i class="iconfont">&#xe609;</i>请重复上面的密码</span>
            </p>
            <p class="mt20">
            	<a class="clickMail" href="javascript:;">确认提交</a>
            </p>
        </div>
    </div>
</body>