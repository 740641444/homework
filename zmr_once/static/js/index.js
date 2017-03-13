$(function(){
//floor01文字淡入开始
function floor01_zi(obj){
	$(obj).animate({opacity:1},800,function(){
		floor01_zi(obj.next());
	});
}
floor01_zi($(".zmr_text").eq(0));
//floor01文字淡入结束
})
