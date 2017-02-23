$(document).ready(function(){
//滚轮事件
	jQuery.fn.extend({           //给jQuery的原型加的
		mousewheel:function(upFun,downFun){
			this.each(function(index,dom){
				if(dom.attachEvent){
					dom.attachEvent("onmousewheel",fun);
				}else{
					dom.addEventListener("mousewheel",fun,false);
					dom.addEventListener("DOMMouseScroll",fun,false);
				}
				function fun(e){
					if(e.preventDefault){
						e.preventDefault();
					}else{
						e.returnValue=false;
					}
					var num=e.wheelDelta||e.detail;
					if(num==120||num==-3){
						upFun.call(dom);
					}else if(num==-120||num==3){
						downFun.call(dom);
					}
				}
			})
		}
	})
	
	
	jQuery.extend({             //给jQuery加的
		returnTop:function(obj,time){
			obj.on("click",function(){
				var top=$(document).scrollTop();
				var newobj={top:top};
				$(newobj).animate({top:0},{
					duration:time,
					step:function(){
						$(document).scrollTop(newobj.top)
					}
				})
			})
		}
	})
})