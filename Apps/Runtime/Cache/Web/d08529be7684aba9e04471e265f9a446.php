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
    <div class="page page-index">
        <!-- header start -->
       <div class="header header-fixed">
    <div class="header-main">
        <a class="logo" href=""><img src="assets/images/logo2.png"></a>
        <ul class="topbar">
            <li><span class="wel"><a href="">diyou</a>,  欢迎您！</span></li>
            <li><a href="<?php echo U('Api/logout');?>" class="iconfont exit">&#xe608;</a></li>
        </ul>
    </div>
</div>
        <!-- header end  -->
        <div class="databar">
            <ul class="wrapper fn-clear">
                <li class="col-lg-5"><i class="iconfont">&#xe601;</i>当前数据更新时间为：<span class="c-blue">2014-11-27 12:00:00</span></li>
                <li class="col-lg-2">还剩 : <span class="c-green">03：</span><span class="c-blue">00</span></li>
                <li class="col-lg-5">进行数据更新 : <span class="c-orange">55</span></li>
            </ul>
        </div>
        <div class="indmain wrapper">
            <div class="alert mb15">
                <p>晚上好，夜深了记得早点休息。 您上次登录的时间是：2014-12-17 09:50:04　IP:192.168.10.93</p>
                <a class="iconfont close">&#xe609;</a>
            </div>
            <div class="userbar fn-clear mb15">
                <div class="u-face"><img src="assets/images/face.png"></div>
                <div class="u-info">
                    <div class="u-info-hd">
                        <span class="tit">Hi, <em>1227965220</em></span>
                        <span class="auth">
                        <a class="a1" href=""><i></i></a>
                        <a class="a2" href=""></a>
                        <a class="a3" href=""></a>
                        <a class="a4" href=""></a>
                    </span>
                        <!--首页弹出框测试-->
                        <span>
                        <a href="#" class="newmail">邮箱认证</a>
                        <a href="#" class="editmail">邮箱修改</a>
                         <a href="#" class="newphone">手机认证</a>
                        <a href="#" class="editphone">手机修改</a>
                        <a href="#" class="editpassword">修改登入密码</a>
                        <a href="#" class="addIP">新增服务器IP</a>
                        
                    </span>
                    </div>
                    <div class="u-info-bd">
                        <span class="safe-tit">安全等级：</span>
                        <div class="safe-prog">
                            <span class="prog-inner" style="width:30%"></span>
                            <span class="prog-text c-red">危险</span>
                        </div>
                        <a class="c-blue" href="">完善资料</a>
                    </div>
                </div>
                <div class="u-data">
                    <dl>
                        <dt>账户余额</dt>
                        <dd><em class="c-orange">45546,895.00</em> 元</dd>
                    </dl>
                    <dl>
                        <dt>短信余额</dt>
                        <dd><em class="c-blue">10</em> 条</dd>
                    </dl>
                    <dl>
                        <dt>安全币</dt>
                        <dd><em class="c-red">32</em> 个</dd>
                    </dl>
                </div>
                <div class="btns">
                    <a class="btn btn-orange-border btn-xs" href="">充值</a>
                    <a class="btn btn-blue-border btn-xs" href="">购买</a>
                    <a class="btn btn-blue-border btn-xs" href="">获取</a>
                </div>
            </div>
            <div class="ui-tabs monitor" id="monitor">
                <div class="tab-hd">
                    <ul>
                        <li class="on">总量<span class="c-orange">（5台）</span></li>
                        <li>安全异常<span class="c-orange">（2台）</span></li>
                        <li>监控异常<span class="c-orange">（3台）</span></li>
                        <li>离线<span class="c-orange">（2台）</span></li>
                        <li>今日警告<span class="c-orange">（2台）</span></li>
                    </ul>
                </div>
                <div class="tab-bd">
                    <div class="bd-item on">
                        <table class="ui-table">
                            <thead>
                                <tr>
                                    <th class="ip">服务器IP</th>
                                    <th>健康状况</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ip"><span class="title">211.211.211.211</span></td>
                                    <td><span class="state s1">优秀</span></td>
                                    <td><a class="link" href="<?php echo U(jiankong);?>">查看监控情况</a></td>
                                </tr>
                                <tr>
                                    <td class="ip"><span class="title">211.211.211.211</span></td>
                                    <td><span class="state s2">良好</span></td>
                                    <td><a class="link" href="">查看监控情况</a></td>
                                </tr>
                                <tr>
                                    <td class="ip"><span class="title">211.211.211.211</span></td>
                                    <td><span class="state s3">差</span></td>
                                    <td><a class="link" href="">查看监控情况</a></td>
                                </tr>
                                <tr>
                                    <td class="ip"><span class="title">211.211.211.211</span></td>
                                    <td><span class="state s4">危险</span></td>
                                    <td><a class="link" href="">查看监控情况</a></td>
                                </tr>
                                <tr>
                                    <td class="ip"><span class="title">211.211.211.211</span></td>
                                    <td><span class="state s5">未检测</span></td>
                                    <td><a class="link" href="">查看监控情况</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    diyou.use("app/common", function(fn) {
        fn.editpasswordDialog();
        fn.mailDialog();
        fn.editmailDialog();
        fn.phoneDialog();
        fn.editphoneDialog();
        fn.addIPDialog();
        fn.uiTabs();
    })
    </script>
</body>

</html>