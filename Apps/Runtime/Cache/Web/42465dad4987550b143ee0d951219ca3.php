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
        <div class="login-box">
            <div class="hd">
                <a class="logo" href=""><img src="assets/images/logo.png"></a>
            </div>
            <div class="bd">
                
                    <div class="form-group">
                        <input class="form-control" type="text" id="username" name="username" placeholder="用户名/邮箱/手机号码" />
                        <i class="iconfont">&#xe602;</i>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="passowrd" id="password"  name="password" placeholder="密码" />
                        <i class="iconfont">&#xe604;</i>
                    </div>
                    <div class="form-group  mt40">
                        <input class="btn btn-blue btn-lg btn-block"  id='login' type="submit" value="登录" />
                    </div>
                    <div class="form-group">
                        <label><input type="checkbox" name="" checked>一周内自动登录</label>
                    </div>
                
            </div>
            <div class="fd fn-clear">
                <div class="link">
                    <i class="iconfont">&#xe607;</i>
                    <a href="">忘记密码？马上找回</a>
                </div>
                <div class="link link-reg">
                    <i class="iconfont">&#xe606;</i>
                    <a href="<?php echo U('register');?>">没有帐号？马上注册</a>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        diyou.use("index", function(fn) {
            //fn.index();
        })
        $('#login').click(function(){
            $.ajax({
                    type: "post",
                    url: "<?php echo U('Api/dologin');?>",
                    data:"pid="+1,
                    cache:false,
                    beforeSend: function(XMLHttpRequest){ 
                        return check();
                    },
                    success: function(data, textStatus){
                        //alert(data);
                        if(data=='ok'){
                            window.location.href="<?php echo U('Index');?>";
                        }else{
                            alert(data);
                        }                                          
                    },
                    complete: function(XMLHttpRequest, textStatus){

                    },
                    error: function(){
                    //请求出错处理
                    }
                });

        });

        function check(){
          
                if($('#username').val()==''){
                    alert('用户名不能为空');
                    return false;
                }
                if($('#password').val()==''){
                    alert('密码不能为空');
                    return false;
                }
                return true;
        }
    </script>
</body>
</html>