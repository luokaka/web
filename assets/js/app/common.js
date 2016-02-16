 define(function(require, exports, module) {

     //tab切换
     exports.uiTabs = function() {
         require('superSlide');
         $('#monitor').slide({
             trigger: "click",
             titCell: ".tab-hd ul li",
             mainCell: ".tab-bd",
             autoPlay: false
         });
     }

     //注册弹出框
     exports.regDialog = function() {
         require("layer");
         $('.a_reg').on('click', function() {
             layer.open({
                 type: 2,
                 title: '',
                 shadeClose: true,
                 shade: 0.8,
                 area: ['381px', '360px'],
                 content: '/注册弹出框.html' //iframe的url
             });
         })
     }

     //网盾宝数据监测-监控设置弹窗
     exports.MonitoringDialog = function() {
         require("layer");
         $('#Monitoring').on('click', function() {
             layer.open({
                 type: 2,
                 title: '监控配置',
                 shadeClose: true,
                 shade: 0.8,
                 area: ['716px', '550px'],
                 content: '/网盾宝数据监测-监控设置弹窗.html' //iframe的url
             });
         })
     }


     //首页-修改密码弹出框
     exports.editpasswordDialog = function() {
         require("layer");
         $('.editpassword').on('click', function() {
             layer.open({
                 type: 2,
                 title: '修改登录密码',
                 shadeClose: true,
                 shade: 0.8,
                 area: ['576px', '330px'],
                 content: "/?a=uppwd" //iframe的url
             });
         })
     }


     //首页-邮箱认证未通过弹出框
     exports.mailDialog = function() {
         require("layer");
         $('.newmail').on('click', function() {
             layer.open({
                 type: 2,
                 title: '邮箱认证',
                 shadeClose: true,
                 shade: 0.8,
                 area: ['381px', '250px'],
                 content: '/?a=checkemail' //iframe的url
             });
         })
     }


     //首页-新的邮箱认证弹出框
     exports.editmailDialog = function() {
         require("layer");
         $('.editmail').on('click', function() {
             layer.open({
                 type: 2,
                 title: '修改邮箱认证',
                 shadeClose: true,
                 shade: 0.8,
                 area: ['470px', '350px'],
                 content: '/?a=upemail' //iframe的url
             });
         })
     }

     exports.iframedisplay = function() {
         $("#nextstept").on('click', function() {
             $('#stept1').css("display", "none"),
                 $("#stept2").css("display", "block")
         })
     }


     //首页-手机认证未通过弹出框
     exports.phoneDialog = function() {
         require("layer");
         $('.newphone').on('click', function() {
             layer.open({
                 type: 2,
                 title: '手机认证',
                 shadeClose: true,
                 shade: 0.8,
                 area: ['381px', '300px'],
                 content: '/?a=checkphone' //iframe的url
             });
         })
     }

     //首页-修改手机认证弹出框
     exports.editphoneDialog = function() {
         require("layer");
         $('.editphone').on('click', function() {
             layer.open({
                 type: 2,
                 title: '修改手机认证',
                 shadeClose: true,
                 shade: 0.8,
                 area: ['400px', '350px'],
                 content: '/?a=upphone' //iframe的url
             });
         })
     }

     //首页-新增服务器IP弹出框
     exports.addIPDialog = function() {
         require("layer");
         $('.addIP').on('click', function() {
             layer.open({
                 type: 2,
                 title: '新增服务器IP',
                 shadeClose: true,
                 shade: 0.8,
                 area: ['400px', '250px'],
                 content: "/?a=addip" //iframe的url
             });
         })
     }

     //日志-警告中心选项卡切换
     exports.alerttab = function() {
         require("superSlide");
         jQuery("#alerttab").slide({
             trigger: "click",
             titCell: ".tab-hd ul li",
             mainCell: ".tab-bd",
             autoPlay: false
         });
     }

     //首页-新增服务器IP弹出框
     exports.searchboxdispalay = function() {
         $('#searchbox').on('click', function() {

             $(".search-from").toggle();
         });
     }

     exports.sideMenutab = function() {
         require("superSlide");
         jQuery(".sideMenu").slide({
				titCell:"h3", //鼠标触发对象
				targetCell:"ul", //与titCell一一对应，第n个titCell控制第n个targetCell的显示隐藏
				effect:"slideDown", //targetCell下拉效果
				trigger:"click", //效果时间
				
				defaultPlay:true,//默认是否执行效果（默认true）
				returnDefault:true //鼠标从.sideMen移走后返回默认状态（默认false）
				});
     }
 })
