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
            <li><a href="<?php echo U('Api/logout');?>" class="iconfont exit">&#xe608;</a></li>
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
            <div class="page-container monitor-cpu">
                <div class="hd hdbg">
                    <span class="tit">硬盘实时监控:</span>
                    <label class="form-title">时间从：</label>
                    <input class="form-date" type="text" name="" readonly="true">
                    <label class="form-title">到</label>
                    <input class="form-date" type="text" name="" readonly="true">
                    <select class="form-select mr10 ml10" name="">
                        <option>全部</option>
                        <option>类型类型</option>
                    </select>
                    <input class="btn btn-blue w70" type="submit" value="搜索">
                </div>
                <div class="bd bd-load">
                    <div class="alert mb15 bgcolor">
                        <p>
                            <span class="fr">
                                D盘: <b class="c-blue mr50">170G</b>
                                E盘：<b class="c-green">200G</b>
                            </span>
                            C盘：<b class="c-blue">100G</b>
                        </p>
                    </div>

                    <div class="echart mr0" id="loadChart">
                        <img src="assets/images/member/yply-char.png">
                    </div> 
                </div>
                <div class="latest-warning">
                <div class="latest-warning-tit"><span class="titstyle"></span>最新警告</div>
                  <div class="latest-warning-con">
                   <ul>
                       <li>
                           <a href="#">
                           <span class="listspan"><i class="iconfont c-red">&#xe612;</i>2015-08-27  17：17</span>
                           <span class="listspan">CPU负载量：
                           <span class="c-blue">90</span>
                           </span>
                           <span class="listspan c-red">C盘剩余空间不足！</span>
                           </a>
                       </li>
                       <li>
                           <a href="#">
                           <span class="listspan"><i class="iconfont c-red">&#xe612;</i>2015-08-27  17：17</span>
                           <span class="listspan">CPU负载量：
                           <span class="c-blue">90</span>
                           </span>
                           <span class="listspan c-red">C盘剩余空间不足！</span>
                           </a>
                       </li>
                       <li>
                           <a href="#">
                           <span class="listspan"><i class="iconfont c-red">&#xe612;</i>2015-08-27  17：17</span>
                           <span class="listspan">CPU负载量：
                           <span class="c-blue">90</span>
                           </span>
                           <span class="listspan c-red">C盘剩余空间不足！</span>
                           </a>
                       </li>
                     
                   </ul> 
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