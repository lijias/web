(function($){
	//定义插件
	$.extend({
        "nav":function(){
            //插件处理程序
        	//限制下拉菜单的样式
        	$(".nav").css({
        		"margin":0,
        		"padding":0,
        		"display":"none"        		
        	});
        	//自定义插件的处理程序
        	$(".nav").parent().hover(function(){
        		//鼠标划入
        		$(this).find(".nav").stop().slideDown();
        	},function(){
        		//鼠标划出
        		$(this).find(".nav").stop().slideUp();
        	});
         }
     })
	
}(jQuery));












