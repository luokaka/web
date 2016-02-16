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
                <div class="security-alarm">
                    <div class="security-alarm-top">
                        <span class="leftspan">今天共有 <span class="c-organe f20">0</span>条安全告警</span>
                        <span class="rightspan"><span class="labetit">安全等级:</span>
                        <span class="bar">
                        <i style="width:70%" class="bar_width"></i>
                       </span>
                        <span class="aqxs c-red">危险</span>
                        <a href="#" class="dcbtn c-blue"><i class="iconfont">&#xe61b;</i>导出告警</a>
                        </span>
                    </div>
                    <div class="security-alarm-bottom">
                        <div class="ui-tabs monitor" id="alerttab">
                            <div class="tab-hd">
                                <ul>
                                    <li class="on p50"> 入侵式攻击告警 <span class="c-organe">（0）</span></li>
                                    <li class="p50"> 探测式攻击告警<span class="c-organe">（0）</span></li>
                                    <li class="p50">网络流量攻击告警<span class="c-organe">（0）</span></li>
                                    <li class="p50">健康告警<span class="c-organe">（0）</span></li>
                                </ul>
                            </div>
                            <div class="content-search">
                                <span>为了更方便您的查询，您也可以</span>
                                <span><a class="c-green" href="#" id="searchbox">点击这里进行搜索<i class="iconfont">&#xe61d;</i></a></span>
                                <div class="search-from" style="display: none;">
                                    <div class="form-group">
                                        <label class="form-title">服务器：</label>
                                        <input class="form-date" type="text" name="">
                                        <label class="form-title">网站：</label>
                                        <input class="form-date" type="text" name="">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-title">时间从：</label>
                                        <input class="form-date" type="text" name="" readonly="true">
                                        <label class="form-title w35">到</label>
                                        <input class="form-date" type="text" name="" readonly="true">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-title w50">类型：</label>
                                        <select class="form-select mr10 w150" name="">
                                            <option>全部告警分类</option>
                                        </select>
                                        <select class="form-select w150" name="">
                                            <option>全部告警项</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input class="btn btn-blue w70 ml60" type="submit" value="搜索">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-bd">
                                <div class="bd-item on">
                                    <p style="text-align: center;"><i class="iconfont c-organe f20">&#xe617;</i>暂无相关告警记录，更改查询条件可查询更多</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    diyou.use("app/common", function(fn) {
        fn.alerttab();
        fn.searchboxdispalay();
    })
    </script>
</body>

</html>