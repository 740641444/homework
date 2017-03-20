/**
 * Created by Administrator on 2017/3/17.
 */
//nav开始
$(function () {
    var flag=1;
    $(".zmr_caidan").eq(0).click(function () {
        if (flag==1){
            flag=0;
            $(this).find(".zmr_line1").css({transform:"translate(0,6px) rotate(45deg)",transition:"transform 1s ease"});
            $(this).find(".zmr_line2").css({transform:"rotate(-45deg)",transition:"transform 1s ease"});
            $(".zmr_caidanul").eq(0).css("display","block").animate({height:650},1000)
            $(".zmr_nav").eq(0).css("background","rgba(0,0,0,1)")
        }else if(flag==0){
            flag=1;
            $(this).find(".zmr_line1").css({transform:"translate(0,0) rotate(-0deg)",transition:"transform 1s ease"});
            $(this).find(".zmr_line2").css({transform:"rotate(0deg)",transition:"transform 1s ease"});
            $(".zmr_caidanul").eq(0).animate({height:0},1000,function () {
                $(this).css("display","none")
                $(".zmr_nav").eq(0).css("background","rgba(0,0,0,0.8)")
            })
        }
    })

//nav结束

//banner开始

function bannerlunbo(time1){
	
	var num=0;
	var next=0;
	var flag=1;
	var tiaonum=0;
	var tiaonext=0;
	function move(){
		next++;
		if(next>2){
			next=0;
		}
//		tiaomove()
		$(".zmr_banner").eq(num).animate({height:465,left:-200},1000)
		$(".zmr_banner").eq(next).css("zIndex","2").animate({left:0},1000,function(){
			$(".zmr_banner").eq(num).css({"height":"120%","left":"100%"})
			$(".zmr_banner").eq(next).css("zIndex","0")
			num=next;
		})			
	
	}	
	function tiaomove(){
		tiaonext++
		if(tiaonext>2){
			tiaonext=0
		}
		$(".tiaoxuan").eq(tiaonum).animate({width:50},time1,function(){
			if($(".tiaoxuan").eq(2).css("width")=="50px"){
				$(".tiaoxuan").css("width","0")
			}			
			tiaonum=tiaonext
			clearTimeout(t2)
			t2=setTimeout(tiaomove,0)
		})
	}
	var t1=setInterval(move,time1)
	var t2=setTimeout(tiaomove,0)
	
//  function move2(obj){
//		next++;
//		if(next>2){
//			next=0;
//		}
//		if($(".tiao>div>div").eq(2).css("width")=="50px"){
//			$(".tiao>div>div").css("width","0")
//		}
//		obj.animate({width:50},3000,function(){
//			$(".zmr_banner").eq(num).animate({height:465,left:-200},1000)
//			$(".zmr_banner").eq(next).css("zIndex","2").animate({left:0},1000,function(){
//				$(".zmr_banner").eq(num).css({"height":"120%","left":"100%"})
//				$(".zmr_banner").eq(next).css("zIndex","0")
//				num=next;
//				move2($(".tiao>div>div").eq(num))
//			})			
//		})
//  }
//  move2($(".tiao>div>div").eq(num))
//  

    
	//左右单机事件开始
	$(".zmr_bleft").eq(0).hover(function(){
		$(".zmr_bleft_cir").eq(0).animate({opacity:1})
		$(".zmr_bleft_cir").eq(0).click(function(){
			if(flag==1){
				flag=0
				$(".zmr_banner").stop()
				$(".tiaoxuan").stop()
	            clearInterval(t1)
	            clearInterval(t2)
				next--
				if(next<0){
					next=2
				}
		    	$(".tiaoxuan").css("width","0").eq(next).css("width","100%")
				$(".zmr_banner").eq(num).css("zIndex","2").animate({left:"100%"},1000)
				$(".zmr_banner").eq(next).css({"height":"100%","left":"-200px","zIndex":"0"}).animate({left:0,height:"120%"},1000,function(){
					num=next;
					flag=1;
				})				
			}

		})
	},function(){
		$(".zmr_bleft_cir").eq(0).animate({opacity:0})
	})
	//右边 
	$(".zmr_bright").eq(0).hover(function(){
		$(".zmr_bright_cir").eq(0).animate({opacity:1})
		$(".zmr_bright_cir").eq(0).click(function(){
			if(flag==1){
				flag=0
				$(".zmr_banner").stop()
				$(".tiaoxuan").stop()
	            clearInterval(t1)
	            clearInterval(t2)
				next++
				if(next>2){
					next=0
				}
				$(".tiaoxuan").css("width","0").eq(next).css("width","100%")
				$(".zmr_banner").eq(num).animate({height:465,left:-200},1000)
				$(".zmr_banner").eq(next).css("zIndex","2").animate({left:0},1000,function(){
					$(".zmr_banner").eq(num).css({"height":"120%","left":"100%"})
					$(".zmr_banner").eq(next).css("zIndex","0")
					num=next;
					flag=1
				})					
			}

		})
	},function(){
		$(".zmr_bright_cir").eq(0).animate({opacity:0})
	})
	//左右单机事件结束    
    //单机点
    $(".tiao").children().each(function(){
    	$(this).click(function(){
			if(flag==1){
				flag=0
				$(".zmr_banner").stop()
				$(".tiaoxuan").stop()
	            clearInterval(t1)
	            clearInterval(t2)
				next=$(this).index()
				if(next>num){
					$(".tiaoxuan").css("width","0").eq(next).css("width","100%")
					$(".zmr_banner").eq(num).animate({height:465,left:-200},1000)
					$(".zmr_banner").eq(next).css("zIndex","2").animate({left:0},1000,function(){
						$(".zmr_banner").eq(num).css({"height":"120%","left":"100%"})
						$(".zmr_banner").eq(next).css("zIndex","0")
						num=next;
						flag=1
					})					
				}else if(next<num){
			    	$(".tiaoxuan").css("width","0").eq(next).css("width","100%")
					$(".zmr_banner").eq(num).css("zIndex","2").animate({left:"100%"},1000)
					$(".zmr_banner").eq(next).css({"height":"100%","left":"-200px","zIndex":"0"}).animate({left:0,height:"120%"},1000,function(){
						num=next;
						flag=1;
					})	
				}
					
			}
	    })
    })
    

}

bannerlunbo(3000)



//bottom小屏点击开始

var flag_foot=1
$(".zmr_footm_xiao>div").each(function(){
	$(this).click(function(){
		var that=this
		if(flag_foot==1){
			flag_foot=0
			$(this).find("li").animate({height:"27px","padding":"6px 14px"})
		}else if(flag_foot==0){
			flag_foot=1
			$(this).find("li").css({"height":"0","padding":"0"})
		}
		
	})
	
})

//bottom小屏点击结束



})
//banner结束