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
    <div class="page page-monitor">
        <!-- header start -->
        <div class="header header-fixed">
            <div class="header-main">
                <a class="logo" href=""><img src="assets/images/logo2.png"></a>
                <ul class="topbar">
                    <li><span class="wel"><a href="">diyou</a>,  欢迎您！</span></li>
                    <li><a class="iconfont exit">&#xe608;</a></li>
                </ul>
            </div>
        </div>
        <!-- header end  -->
        <div class="frame-body frame-sidebar-full">
            <!-- 侧栏 -->
            <div class="frame-sidebar">
    <div class="side-item">
        <div class="side-hd"><a>监控</a><i class="iconfont">&#xe60d;</i><em></em></div>
        <div class="side-bd">
            <ul>
                <?php if($action == 'cpuload' or $action == 'cpuused' ): ?><li class="on" ><a class="nav-link" href="<?php echo U(cpuload);?>"><i class="iconfont">&#xe60c;</i>CPU</a>
                <?php else: ?>
                 <li  ><a class="nav-link" href="<?php echo U(cpuload);?>"><i class="iconfont">&#xe60c;</i>CPU</a><?php endif; ?>
                    <dl class="sed-nav">
                        <?php if($action == 'cpuload' ): ?><dd><a class="on" href="<?php echo U(cpuload);?>">负载</a></dd>
                        <?php else: ?>
                            <dd><a href="<?php echo U(cpuload);?>">负载</a></dd><?php endif; ?>
                        <?php if($action == 'cpuused' ): ?><dd><a class="on" href="<?php echo U(cpuused);?>">利用情况</a></dd>
                        <?php else: ?>
                            <dd><a href="<?php echo U(cpuused);?>">利用情况</a></dd><?php endif; ?>
                        
                    </dl>
                </li>
                <?php if($action == 'memery' or $action == 'memeryswap' ): ?><li class='on'> <a class="nav-link" href="<?php echo U(memery);?>"><i class="iconfont">&#xe615;</i>内存</a>
                <?php else: ?>
                  <li > <a class="nav-link" href="<?php echo U(memery);?>"><i class="iconfont">&#xe615;</i>内存</a><?php endif; ?>
                    
                    <dl class="sed-nav">
                        <?php if($action == 'memeryswap' ): ?><dd><a class="on" href="<?php echo U(memeryswap);?>">swap</a></dd>
                        <?php else: ?>
                           <dd><a href="<?php echo U(memeryswap);?>">swap</a></dd><?php endif; ?>
                        <?php if($action == 'memery' ): ?><dd><a class="on" href="<?php echo U(memery);?>">利用情况</a></dd>
                        <?php else: ?>
                           <dd><a href="<?php echo U(memery);?>">利用情况</a></dd><?php endif; ?> 
                    </dl>
                </li>
                
                    <?php if($action == 'diskused' or $action == 'diskio' ): ?><li class='on'> <a class="nav-link" href="<?php echo U(diskused);?>"><i class="iconfont">&#xe60f;</i>硬盘</a>
                        <?php else: ?>
                          <li >  <a class="nav-link" href="<?php echo U(diskused);?>"><i class="iconfont">&#xe60f;</i>硬盘</a><?php endif; ?>
                   
                    <dl class="sed-nav">
                        <?php if($action == 'diskio' ): ?><dd><a class="on" href="<?php echo U(diskio);?>">IO</a></dd>
                        <?php else: ?>
                           <dd><a  href="<?php echo U(diskio);?>">IO</a></dd><?php endif; ?>

                        <?php if($action == 'diskused' ): ?><dd><a class="on" href="<?php echo U(diskused);?>">利用情况</a></dd>
                        <?php else: ?>
                           <dd><a href="<?php echo U(diskused);?>">利用情况</a></dd><?php endif; ?>
                        
                        
                    </dl>
                </li>               
                    <?php if($action == 'netused' ): ?><li class='on'><a class="nav-link" href="<?php echo U(netused);?>"><i class="iconfont">&#xe613;</i>网络</a>
                    <?php else: ?>
                        <li><a class="nav-link" href="<?php echo U(netused);?>"><i class="iconfont">&#xe613;</i>网络</a><?php endif; ?>
                    <dl class="sed-nav">
                        <dd><a class='on' href="<?php echo U(netused);?>">利用情况</a></dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>
    <div class="side-item">
        <div class="side-hd"><a>日志</a><i class="iconfont">&#xe611;</i><em></em></div>
        <div class="side-bd">
            <ul>
                <li><a class="nav-link" href="<?php echo U(log);?>"><i class="iconfont">&#xe60e;</i>日志分析</a></li>
                <li><a class="nav-link" href="<?php echo U(loginfo);?>"><i class="iconfont">&#xe614;</i>统计分析</a></li>
                <li><a class="nav-link" href="<?php echo U(logwarning);?>"><i class="iconfont">&#xe616;</i>警告中心</a></li>
            </ul>
        </div>
    </div>
</div>
            <!-- 状态栏 -->
            <ul class="frame-statusbar">
                <li>当前数据更新时间为：<span class="c-blue">2014-11-27 12:00:00</span></li>
                <li>还剩 : <span class="c-green">03：</span><span class="c-blue">00</span></li>
                <li>进行数据更新 : <span class="c-orange">55</span></li>
            </ul>
            <!-- 内容 -->
            <div class="frame-content">
                <div class="page-container page-scanning">
                    <div class="page-scanning-list">
                        <select class="form-select mr10 ml10 w200" name="">
                            <option>192.168.1.2</option>
                            <option>192.168.1.3</option>
                        </select>
                        <ul>
    <li>
        <a href="<?php echo U(logadd);?>">
            <dl>
                <dt>
                    <img src="assets/images/member/Journal1.png">
                </dt>
                <dd>添加日志</dd>
            </dl>
        </a>
    </li>
    <li>
        <a href="<?php echo U(logsearch);?>">
            <dl>
                <dt>
                    <img src="assets/images/member/Journal2.png">
                </dt>
                <dd>搜索日志</dd>
            </dl>
        </a>
    </li>
    <li>
        <a href="#">
            <dl>
                <dt>
                    <img src="assets/images/member/Journal3.png">
                </dt>
                <dd>帮助文档</dd>
            </dl>
        </a>
    </li>
</ul>
                    </div>
                    <div class="page-scanning-middle">
                        <div class="page-scanning-tit">
                            <span class="titcon">
                                 <i class="titstyle"></i>
                                 添加日志
                            </span>
                        </div>
                        <div class="page-scanning-detil">
                            <form class="add-log" id="add-log">
                                <div class="formrow">
                                    <span><input type="checkbox" name="apache" checked="checked">
                                    <label for="apache">Apache</label></span>
                                    <span><input type="checkbox" name="nginx">
                                    <label for="nginx">Nginx</label></span>
                                    <span><input type="checkbox" name="iis">
                                    <label for="iis"> IIS</label></span>
                                    <span><input type="checkbox" name="tomcat">
                                    <label for="tomcat">Tomcat </label></span>
                                    <span><input type="checkbox" name="sel-all" checked="checked">
                                    <label for="sel-all">全选</label></span>
                                </div>
                                <div class="formrow c-red">如果以上都没有您想要的，也可以下面自定义：</div>
                                <div class="formrow">
                                    <input type="text" class="inp-tex" name="printurl" placeholder="请输入URL路径">
                                    <input type="text" class="inp-tex"  name="printkey" placeholder="请输入关键字">
                                </div>
                                <div class="formrow">
                                    <input type="button" name="open" class="openbtn" value="开启">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    diyou.use("app/progress", function(fn) {
        fn.monitorProgress();
    })
    </script>
</body>

</html>