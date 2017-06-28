function bookmark(title,url){
  if(document.all){
    window.external.AddFavorite(url, title);
  }else if(window.sidebar){
    window.sidebar.addPanel(title, url, "");
  }else if(window.opera && window.print){
    var obj = document.createElement('a');
    obj.setAttribute('href',url);
    obj.setAttribute('title',title);
    obj.setAttribute('rel','sidebar');
    obj.click();
  }
  else {
    alert("즐겨찾기는 InternetExplorer, FireFox, Opera에서만 가능합니다.");
  }
}
(function($){
  jQuery(function($){
   // 변수 설정 //
   var top_menu = $("div.layout_topmenu");
   var lnb = $("div.lnb>ul");
   var timeout = new Array();
   
   // CSS 정의를 위한 클래스 정의 //
   top_menu.find("li>ul>li:has(ul)").addClass("has_sub");
   top_menu.find("ul ul:not(:has(ul))").addClass("nohas_sub");
   lnb.find(">li:has(ul)").addClass("has_sub");
   
   // TopBox - 언어선택 //
   $(".select_lang>a").click(function(){
    $(".select_lang ul:not(:animated)").animate({"height":"toggle"},200);
   });
   $(".select_lang").mouseleave(function(){
    $(".select_lang ul").animate({"height":"hide"},200);
   });
   
   // GNB - Load //
   top_menu.find(">ul ul").each(function(){
     $(this).css("display","block");
     $(this).attr("jquery_height",$(this).height()).css({"width":$(this).width()+30});
     $(this).css("display","none");
   });
   
   // GNB - 메인 메뉴 //
   function gOver(){
    var t = $(this)
    t.find(">ul:not(:animated)").slideDown(200);
   }
   
   function gOut(){
    var t = $(this)
    t.find(">ul").hide(200);
   }
   
   top_menu.find("li").mouseover(gOver).mouseleave(gOut);
   
   top_menu.find("li.menu_top").hover(function(){
    $(this).siblings(".selected").addClass("bgnone");
   },function(){
    $(this).siblings(".selected").removeClass("bgnone");
   });
   
   // GNB - 서브메뉴 //
   top_menu.find("ul.sub>li:has(ul)").each(function(){
    $(this).find(">ul").css("margin-left",$(this).parent().width());
   });
   
   // GNB - 글씨 흔들림 효과 //
   top_menu.find("li>ul>li").hover(function(){
    $(this).find(">a .mtext").stop().animate({"margin-left":"30px"}, 200, "swing");
   },function(e){
    $(this).find(">a .mtext").stop().animate({"margin-left":"10px"}, 200, "swing");
   });
   
   // LNB - 글씨 + background 위치 흔들림 효과 //
   lnb.find("li>a").hover(function(){
    $(this).stop().animate({"background-position-x":"24px","padding-left":"35px"}, 200);
   },function(){
     $(this).stop().animate({"background-position-x":"4px","padding-left":"15px","color":"#444"}, 200);
   });
   
   // FOOT - 패밀리 사이트 메뉴 //
   var family_speed = 0;
   $("div.layout_foot div.notice div.family_site li").each(function(){
     family_speed += 100;
   });
   $("div.layout_foot div.notice div.family_site span").click(function(){
     $(this).siblings("ul:not(:animated)").animate({"height":"toggle"},family_speed);
   });
   $("div.layout_foot div.notice div.family_site").mouseleave(function(){
     $(this).find("ul").animate({"height":"hide"},family_speed);
   });
  });
})(jQuery);