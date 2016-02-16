/****
	*author:ray;
	*date:2015-10-23;
*****/

define(function(require, exports, module){

 	/*圆形百分比*/
	exports._initProg = function(obj,degree,color,width,depth){
		Raphael = require('raphael');
		var paper =  null;
		var w = width ? width : 52;
		var r = parseInt((w-2)/2);
		degree = degree >= 1 ? 0.9999 : degree; //进度比例，0到1-下面的算法不支持画100%，要按99.99%来画
		depth = depth ? depth : 3;
		
		this.paper = Raphael(obj, w, w); //初始化Raphael画布 

		function getPath(degree){
			//开始计算各点的位置，见后图 
			//r1是内圆半径，r2是外圆半径 
			var r1 = r-depth, r2 = r, PI = Math.PI, 
				p1 = { 
					x:(w-2)/2,  
					y:w-2 
				}, 
				p4 = { 
					x:p1.x, 
					y:p1.y - r2 + r1 
				}, 
				p2 = {  
					x:p1.x + r2 * Math.sin(2 * PI * (1 - degree)), 
					y:p1.y - r2 + r2 * Math.cos(2 * PI * (1 - degree)) 
				}, 
				p3 = { 
					x:p4.x + r1 * Math.sin(2 * PI * (1 - degree)), 
					y:p4.y - r1 + r1 * Math.cos(2 * PI * (1 - degree)) 
				}, 
				path = [ 
					'M', p1.x, ' ', p1.y, 
					'A', r2, ' ', r2, ' 0 ', degree > 0.5 ? 1 : 0, ' 1 ', p2.x, ' ', p2.y, 
					'L', p3.x, ' ', p3.y, 
					'A', r1, ' ', r1, ' 0 ', degree > 0.5 ? 1 : 0, ' 0 ', p4.x, ' ', p4.y, 
					'Z' 
				].join(''); 
			return path;
		}
		
		//用path方法画图形，由两段圆弧和两条直线组成，画弧线的算法见后 
		this.paper.path(getPath(0.9999)).attr({"stroke-width":0, "stroke":"#d5d5d5", "fill":"#d5d5d5"});
		if(degree){
			this.paper.path(getPath(degree)).attr({"stroke-width":0, "stroke":color, "fill":color}); 			 
		}
	}
   
	//监控
	exports.monitorProgress = function(){	

		$('.progbar').each(function(){
			var prog = $(this).attr('id');			
			var degree = parseInt($(this).attr('data'))/100;
			var color = $(this).attr('data-color');

			exports._initProg(prog, degree, color, 185, 5);
		})

		//exports._initProg('prog1', '#'+progTxt, degree, '#f6ab00');
		// $('.progbar').each(function(i){
		// 	var prog = $(this).find('.prog-inner').attr('id');
		// 	var progTxt = $(this).find('.prog-txt').attr('id');
		// 	var degree = parseInt($(this).find('.prog-txt').text())/100;
		//	exports._initProg(prog, '#'+progTxt, degree, '#f6ab00');
		// })
	}
 })