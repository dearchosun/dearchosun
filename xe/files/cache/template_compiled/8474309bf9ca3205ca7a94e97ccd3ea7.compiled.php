<?php if(!defined("__XE__"))exit;?><!--#Meta:layouts/we_home/js/script.js--><?php $__tmp=array('layouts/we_home/js/script.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:layouts/we_home/css/style.css--><?php $__tmp=array('layouts/we_home/css/style.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->layout_info->module_srl_alert == 'Y'){ ?>
  <script type="text/javascript">
    alert("- WE_HOME 레이아웃의 메세지 -\nmodule_srl : <?php echo $__Context->module_info->module_srl ?>");
  </script>
<?php } ?>
<style type="text/css">
  /* Layout Style */
  <?php if($__Context->layout_info->layout_style == 'Sub'){ ?>
     .layout_content .main_content { width:775px; float:left; margin:0 0 0 5px; }
  <?php }else if($__Context->layout_info->layout_style == 'NoMenu'){ ?>
     .layout_content .main_content { width:980px; margin:0; }
  <?php }else{ ?>
     .layout_content .main_content { width:600px; float:left; margin:0 0 10px 5px; }
  <?php } ?>
  <?php if($__Context->layout_info->gnb_radius == 'Y'){ ?>
     .layout_head .layout_topmenu .sub,
     .layout_head .layout_topmenu .sub li:first-child { border-top-right-radius:0; }
     .layout_head .layout_topmenu ul ul { border-radius:15px; border-top-left-radius:0; border-bottom-right-radius:0; background:#fafafa; }
     .layout_head .layout_topmenu .nohas_sub { border-top-right-radius:15px; border-bottom-right-radius:15px; }
     .layout_head .layout_topmenu .nohas_sub li:first-child { border-top-right-radius:15px; }
     .layout_head .layout_topmenu .nohas_sub li:last-child { border-bottom-right-radius:15px; }
     .layout_head .layout_topmenu .sub li:last-child { border-bottom-left-radius:15px; }
     .layout_head .layout_topmenu .sub .ssub { border-bottom-right-radius:15px; }
  <?php } ?>
     .layout_head .logo_line .head_ad { left:<?php echo $__Context->layout_info->head_ad_left+200 ?>px; top:<?php echo $__Context->layout_info->head_ad_top+10 ?>px; }
     .layout_search { right:<?php echo $__Context->layout_info->search_right+5 ?>px; top:<?php echo $__Context->layout_info->search_top+5 ?>px; }
     .layout_foot .notice .family_site { right:<?php echo $__Context->layout_info->family_site_right+10 ?>px; top:<?php echo $__Context->layout_info->family_site_top+7 ?>px; }
  <?php if($__Context->layout_info->logo_left){ ?>
     .layout_head .logo_line h1 { left:<?php echo $__Context->layout_info->logo_left ?>px; }
  <?php } ?>
  <?php if($__Context->layout_info->logo_top){ ?>
     .layout_head .logo_line h1 { top:<?php echo $__Context->layout_info->logo_top ?>px; }
  <?php } ?>
  <?php if($__Context->layout_info->gnb_color){ ?>
    .layout_head .layout_topmenu .home_menu img { background:<?php echo $__Context->layout_info->gnb_color ?>; }
    .layout_head .layout_topmenu { background-color:<?php echo $__Context->layout_info->gnb_color ?>; }
  <?php } ?>
  <?php if($__Context->layout_info->gnb_img){ ?>
    .layout_head .layout_topmenu { background-image:url("<?php echo $__Context->layout_info->gnb_img ?>"); }
  <?php } ?>
  <?php if($__Context->layout_info->gnb_hover){ ?>
    .layout_head .layout_topmenu .menu_top:hover { background:url("<?php echo $__Context->layout_info->gnb_hover ?>") repeat-x left top; }
    .layout_head .layout_topmenu .menu_top.selected { background:url("<?php echo $__Context->layout_info->gnb_hover ?>") repeat-x left top; }
  <?php } ?>
</style>
<div class="layout_body">
  <div class="top_box">
   <div class="layout_width">
    <ul class="box_right">
     <?php if($__Context->layout_info->topbox_home == 'Y'){ ?><li><a href="<?php echo getUrl() ?>">Home</a></li><?php } ?>
     <?php if($__Context->is_logged && $__Context->layout_info->topbox_info == 'Y'){ ?><li><a href="<?php echo getUrl('act','dispMemberInfo') ?>"><?php echo $__Context->lang->cmd_view_member_info ?></a></li><?php } ?>
     <?php if($__Context->is_logged && $__Context->layout_info->topbox_login == 'Y'){ ?><li><a href="<?php echo getUrl('act','dispMemberLogout') ?>"><?php echo $__Context->lang->cmd_logout ?></a></li><?php } ?>
     <?php if($__Context->is_logged && $__Context->layout_info->topbox_nickname == 'Y'){ ?><li><?php if($__Context->grant->manager){ ?><a href="<?php echo getUrl('','module','admin') ?>" onclick="window.open(this.href);return false;"><?php echo $__Context->logged_info->nick_name ?> [<?php echo $__Context->lang->cmd_management ?>]</a><?php } ?></li><?php } ?>
     <?php if(!$__Context->is_logged && $__Context->layout_info->topbox_signup == 'Y'){ ?><li><a href="<?php echo getUrl('act','dispMemberSignUpForm') ?>"><?php echo $__Context->lang->cmd_signup ?></a></li><?php } ?>
     <?php if(!$__Context->is_logged && $__Context->layout_info->topbox_login == 'Y'){ ?><li><a href="<?php echo getUrl('act','dispMemberLoginForm') ?>"><?php echo $__Context->lang->cmd_login ?></a></li><?php } ?>
     <?php if($__Context->top_menu->list&&count($__Context->top_menu->list))foreach($__Context->top_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['link']){ ?><li><a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a></li><?php }} ?>
     <?php if($__Context->layout_info->topbox_lang == 'Y'){ ?><li class="select_lang">
      <a href="#"><?php echo $__Context->lang_supported[$__Context->lang_type] ?></a>
      <ul>
       <?php if($__Context->lang_supported&&count($__Context->lang_supported))foreach($__Context->lang_supported as $__Context->key=>$__Context->val){;
if($__Context->key!= $__Context->lang_type){ ?><li><a onclick="doChangeLangType('<?php echo $__Context->key ?>');return false;"><?php echo $__Context->val ?></a></li><?php }} ?>
      </ul>
     </li><?php } ?>
    </ul>
    <?php if($__Context->layout_info->topbox_bookmark == 'Y'){ ?><div class="bookmark"><a href="#" onclick="bookmark('<?php echo Context::getBrowserTitle() ?>','<?php echo getUrl() ?>'); return false;">즐겨찾기 추가</a></div><?php } ?>
   </div>
  </div>
 <div class="layout_head">
  <div class="logo_line">
   <h1>
    <a href="<?php echo $__Context->layout_info->logo_href ?>"><?php if($__Context->layout_info->logo_image){ ?><img src="<?php echo $__Context->layout_info->logo_image ?>" alt="<?php echo $__Context->layout_info->logo_alt ?>" /><?php };
if(!$__Context->layout_info->logo_image){ ?><span><?php echo $__Context->layout_info->logo_alt ?></span><?php } ?></a>
   </h1>
   <div class="head_ad">
    <?php echo $__Context->layout_info->head_ad ?>
   </div>
  </div>
  <div class="layout_topmenu">
   <ul class="main_menu"<?php if($__Context->layout_info->gnb_home_menu == 'N'){ ?> style="margin-left:10px;"<?php } ?>>
    <?php if($__Context->layout_info->gnb_home_menu == 'Y'){ ?><li class="home_menu"><a href="<?php echo getUrl() ?>"><img src="/xe/layouts/we_home/images/ColorHome.png" alt="home" /></a></li><?php } ?>
    <?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['link']){ ?><li class="menu_top<?php if($__Context->val1['selected']){ ?> selected<?php } ?>">
     <a href="<?php echo $__Context->val1['href'] ?>" class="first_a"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a>
     <?php if($__Context->val1['list']){ ?><ul class="sub">
      <?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){;
if($__Context->val2['link']){ ?><li <?php if($__Context->val2['selected']){ ?>class="selected"<?php } ?>>
       <a href="<?php echo $__Context->val2['href'] ?>" class="second_a"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><span class="mtext"><?php echo $__Context->val2['link'] ?></span><?php if($__Context->val2['list']){ ?><span class="hassub"></span><?php } ?></a>
       <?php if($__Context->val2['list']){ ?><ul class="ssub">
        <?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){;
if($__Context->val3['link']){ ?><li <?php if($__Context->val3['selected']){ ?>class="selected"<?php } ?>>
         <a href="<?php echo $__Context->val3['href'] ?>"<?php if($__Context->val3['open_window']=='Y'){ ?> target="_blank"<?php } ?>><span class="mtext"><?php echo $__Context->val3['link'] ?></span></a>
        </li><?php }} ?>
       </ul><?php } ?>
      </li><?php }} ?>
     </ul><?php } ?>
    </li><?php }} ?>
   </ul>
  </div>
  <?php if($__Context->layout_info->updatenews != 'N'){ ?><div class="update_news">
   <?php if($__Context->layout_info->search == 'Y'){ ?><form action="<?php echo getUrl() ?>" method="post" class="layout_search"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" />
    <?php if($__Context->vid){ ?><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>"/><?php } ?>
    <input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
    <input type="hidden" name="act" value="IS" />
    <input type="hidden" name="search_target" value="title_content" />
    <input type="text" name="is_keyword" value="<?php echo $__Context->is_keyword ?>" title="검색 할 단어를 입력해 주세요." class="search_text" />
    <input type="image" src="/xe/layouts/we_home/images/search_button.gif" alt="<?php echo $__Context->lang->cmd_search ?>" class="submit" />
   </form><?php } ?>
   <?php if($__Context->layout_info->updatenews != 'W'){ ?><div class="update_widget">
    <div class="rows">업데이트 소식</div>
    <div class="rows">&gt;</div>
    <?php if($__Context->layout_info->updatenews == 'L'){ ?><div class="rows" style="float:none"><img class="zbxe_widget_output" widget="content" skin="updatenews" colorset="default"<?php if($__Context->layout_info->updatenews_srl){ ?> module_srls="<?php echo $__Context->layout_info->updatenews_srl ?>"<?php } ?> content_type="document" option_view="title,regdate,nickname" show_browser_title="N" show_comment_count="Y" show_trackback_count="Y" show_category="N" show_icon="Y" order_target="list_order" order_type="desc" /></div><?php } ?>
    <?php if($__Context->layout_info->updatenews == 'U'){ ?><div class="rows" style="float:none"><?php echo $__Context->layout_info->updatenews_text ?></div><?php } ?>
   </div><?php } ?>
   <?php if($__Context->layout_info->updatenews == 'W'){ ?><div><?php echo $__Context->layout_info->updatenews_text ?></div><?php } ?>
  </div><?php } ?>
 </div>
 <div class="layout_content">
  <?php if($__Context->layout_info->layout_style != 'NoMenu'){ ?><div class="leftside">
   <?php if($__Context->layout_info->login){ ?><div class="layout_login"><?php echo $__Context->layout_info->login ?></div><?php } ?>
   <?php if(!$__Context->layout_info->login){ ?><div class="layout_login"><img class="zbxe_widget_output" widget="login_info" skin="xe_official" colorset="default" /></div><?php } ?>
   <?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['selected']){ ?><div class="lnb">
    <div class="top_menu"><a href="<?php echo $__Context->val1['href'] ?>"><?php echo $__Context->val1['link'] ?></a></div>
    <?php if($__Context->val1['selected'] && $__Context->val1['list']){ ?><ul>
     <?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){;
if($__Context->val2['link']){;
if($__Context->val1['selected']){ ?><li <?php if($__Context->val2['selected']){ ?>class="selected"<?php } ?>>
     <a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'] ?></a>
      <?php if($__Context->val2['list']){ ?><ul>
       <?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){;
if($__Context->val3['link']){ ?><li <?php if($__Context->val3['selected']){ ?>class="selected"<?php } ?>>
        <a href="<?php echo $__Context->val3['href'] ?>"<?php if($__Context->val3['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val3['link'] ?></a>
       </li><?php }} ?>
      </ul><?php } ?>
     </li><?php }}} ?>
    </ul><?php } ?>
   </div><?php }} ?>
   <?php if($__Context->layout_info->left_content){ ?><div class="layout_left_content"><?php echo $__Context->layout_info->left_content ?></div><?php } ?>
  </div><?php } ?>
  <div class="main_content">
   <?php echo $__Context->content ?>
  </div>
  <?php if($__Context->layout_info->layout_style == 'Main'){ ?><div class="rightside">
   <?php if($__Context->layout_info->right_content){;
echo $__Context->layout_info->right_content;
} ?>
  </div><?php } ?>
 </div>
 <div class="layout_foot">
  <?php if($__Context->layout_info->notice != 'N'){ ?><div class="notice">
   <div><?php if($__Context->layout_info->notice == 'L'){ ?><img class="zbxe_widget_output" widget="content" skin="default" colorset="white"<?php if($__Context->layout_info->notice_srl){ ?> module_srls="<?php echo $__Context->layout_info->notice_srl ?>"<?php } ?> content_type="document" list_type="normal" tab_type="none" markup_type="list" list_count="1" subject_cut_size="70" option_view="title" show_browser_title="Y" show_comment_count="Y" show_trackback_count="Y" show_category="N" show_icon="Y" order_target="list_order" order_type="desc" /><?php } ?></div>
   <?php if($__Context->layout_info->notice == 'U'){ ?><div style="height:20px;"><?php echo $__Context->layout_info->notice_text ?></div><?php } ?>
    <?php if($__Context->family_menu->list){ ?><div class="family_site">
     <span>패밀리 사이트</span>
     <ul>
      <?php if($__Context->family_menu->list&&count($__Context->family_menu->list))foreach($__Context->family_menu->list as $__Context->key=>$__Context->val){ ?><li><a href="<?php echo $__Context->val['href'] ?>" target="_blank"><?php echo $__Context->val['link'] ?></a></li><?php } ?>
     </ul>
    </div><?php } ?>
  </div><?php } ?>
  <div class="bottom_menu_copy">
   <?php if($__Context->bottom_menu->list){ ?><div class="bottom_menu">
    <ul>
     <?php if($__Context->bottom_menu->list&&count($__Context->bottom_menu->list))foreach($__Context->bottom_menu->list as $__Context->key1=>$__Context->val1){ ?><li <?php if($__Context->val1['selected']){ ?>class="selected"<?php } ?>><a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a></li><?php } ?>
    </ul>
   </div><?php } ?> 
   <?php $__Context->layout_info->copyright = str_replace("#year#",date("Y"),$__Context->layout_info->copyright) ?>
   <div class="copy"><?php echo $__Context->layout_info->copyright ?></div>
   <div class="designedby">Designed By <a href="http://www.webengine.co.kr/">WebEngine</a>.</div>
  </div>
 </div>
</div>
