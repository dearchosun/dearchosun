<?php if(!defined("__XE__"))exit;
$__Context->rd_idx=0;
$__Context->mi->fdb_style='fdb_v2';
 ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/board/skins/sketchbook5/filter','insert.xml');$__xmlFilter->compile(); ?>
<div class="bd_guest clear">
	<div class="sum"><a href="<?php echo getUrl('','mid',$__Context->mid) ?>">Footprints <em>'<?php echo number_format($__Context->total_count) ?>'</em></a></div>
	
	<?php if($__Context->grant->write_document){ ?><form action="./" method="post" onsubmit="return procFilter(this, window.insert)" class="bd_wrt bd_wrt_main css3pie clear"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
		<input type="hidden" name="comment_status" value="ALLOW" id="comment_status" />
		<input type="hidden" name="allow_trackback" value="Y" id="allow_trackback" />
		<input type="hidden" name="content"<?php if($__Context->mi->content_default){ ?> value="<?php echo $__Context->mi->content_default ?>"<?php } ?> />
		<input type="hidden" name="document_srl" value="" />
		<?php if($__Context->mi->cmt_wrt=='editor'){ ?><div class="wysiwyg"><?php echo $__Context->oDocument->getEditor() ?></div><?php } ?>
		<?php if($__Context->mi->cmt_wrt!='editor'){ ?><div class="simple_wrt">
			<input type="hidden" name="use_html" value="Y" />
			<input type="hidden" id="htm_1" value="n" />
			<textarea id="editor_1" rows="10" cols="50"></textarea>
		</div><?php } ?>
		<div class="edit_opt">
			<?php if(!$__Context->is_logged){ ?>
			<span class="itx_wrp">
				<label for="nick_name"><?php echo $__Context->lang->writer ?></label>
				<input type="text" name="nick_name" id="nick_name" value="<?php echo htmlspecialchars($__Context->oDocument->get('nick_name')) ?>" class="itx n_p" />
			</span>
			<span class="itx_wrp">
				<label for="password"><?php echo $__Context->lang->password ?></label>
				<input type="password" name="password" id="password" class="itx n_p" />
			</span>	
			<span class="itx_wrp">
				<label for="email_address"><?php echo $__Context->lang->email_address ?></label>
				<input type="text" name="email_address" id="email_address" value="<?php echo htmlspecialchars($__Context->oDocument->get('email_address')) ?>" class="itx m_h" />
			</span>
			<span class="itx_wrp">
				<label for="homepage"><?php echo $__Context->lang->homepage ?></label>
				<input type="text" name="homepage" id="homepage" value="<?php echo htmlspecialchars($__Context->oDocument->get('homepage')) ?>" class="itx m_h" />
			</span>
			<?php } ?>
			<input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" class="bd_btn fr" />
		</div>
		<div class="opt_chk fl">
			<?php if($__Context->is_logged){ ?><div class="section">
				<input type="checkbox" name="notify_message" value="Y"<?php if($__Context->oDocument->useNotify() || (!$__Context->oDocument->useNotify() && @in_array('notify',$__Context->mi->wrt_opt))){ ?> checked="checked"<?php } ?> id="notify_message" />
				<label for="notify_message"><?php echo $__Context->lang->notify ?></label>
			</div><?php } ?>
			<?php if(is_array($__Context->status_list)){ ?><div class="section">
				<?php if($__Context->status_list&&count($__Context->status_list))foreach($__Context->status_list AS $__Context->key=>$__Context->value){ ?>
				<?php if(@!in_array('secret',$__Context->mi->wrt_opt)){ ?><input type="radio" name="status" value="<?php echo $__Context->key ?>" id="<?php echo $__Context->key ?>"<?php if($__Context->oDocument->get('status')==$__Context->key || ($__Context->key=='PUBLIC' && !$__Context->document_srl)){ ?> checked="checked"<?php } ?> /><?php } ?>
				<?php if(@in_array('secret',$__Context->mi->wrt_opt)){ ?><input type="radio" name="status" value="<?php echo $__Context->key ?>" id="<?php echo $__Context->key ?>"<?php if($__Context->oDocument->get('status')==$__Context->key || ($__Context->key=='SECRET' && !$__Context->document_srl)){ ?> checked="checked"<?php } ?> /><?php } ?>
				<label for="<?php echo $__Context->key ?>"><?php echo $__Context->value ?></label>
				<?php } ?>
			</div><?php } ?>
		</div>
		<?php if($__Context->mi->cmt_wrt!='editor'){ ?><a class="fl" href="<?php echo getUrl('act','dispBoardWrite','document_srl','') ?>" style="margin-top:12px;font-size:11px"><b class="tx_ico_circ bg_color"><span class="ie8_only color">●</span><b>?</b></b> <?php echo $__Context->lang->use_wysiwyg ?></a><?php } ?>
		<?php if($__Context->mi->cmt_wrt=='sns'){ ?><div class="sns_wrt clear">
			<p><b class="tx_ico_circ bg_color"><span class="ie8_only color">●</span><b>?</b></b> <?php echo $__Context->lang->sns_wrt ?>.</p>
			<img class="zbxe_widget_output" widget="socialxe_info" colorset="<?php echo $__Context->mi->colorset ?>" skin="default" />
		</div><?php } ?>
	</form><?php } ?>
	<?php if(!$__Context->grant->write_document){ ?><div class="bd_wrt bd_wrt_main">
		<a class="cmt_disable bd_login" href="#"><?php echo $__Context->lang->cmd_write ?> <?php echo $__Context->lang->msg_not_permitted;
if(!$__Context->is_logged){ ?> <?php echo $__Context->lang->bd_login;
} ?></a>
	</div><?php } ?>
<?php if($__Context->mi->cmt_wrt=='sns'){ ?>
<?php  $__Context->mi->cmt_wrt = 'simple' ?>
<?php } ?>
	
	<?php if($__Context->document_list&&count($__Context->document_list))foreach($__Context->document_list as $__Context->no=>$__Context->oDocument){;
if($__Context->grant->view){ ?><div class="guest_itm fdb_nav_btm clear"<?php if($__Context->oDocument->isSecret() && !$__Context->oDocument->isGranted()){ ?> style="padding:0"<?php } ?>>
		<?php if($__Context->oDocument->isSecret() && !$__Context->oDocument->isGranted()){ ?>
		<form action="./" method="get" onsubmit="return procFilter(this, input_password)" class="secretMessage clear"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
			<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
			<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
			<input type="hidden" name="document_srl" value="<?php echo $__Context->oDocument->document_srl ?>" />
			<p>&quot;<?php echo $__Context->lang->msg_is_secret ?>&quot;</p>
			<span class="itx_wrp">
				<label for="cpw_<?php echo $__Context->oDocument->document_srl ?>"><?php echo $__Context->lang->password ?></label>
				<input type="password" name="password" id="cpw_<?php echo $__Context->oDocument->document_srl ?>" class="itx" />
			</span>
			<input class="bd_btn" type="submit" value="<?php echo $__Context->lang->cmd_input ?>" />
		</form>
		<?php }else{ ?>
		
		<?php if($__Context->mi->profile_img!='N'){ ?><div class="guest_profile">
			<?php if($__Context->oDocument->getProfileImage()){ ?><img class="img profile" src="<?php echo $__Context->oDocument->getProfileImage() ?>" alt="profile" title="<?php echo $__Context->oDocument->getNickName() ?>" /><?php } ?>
			<?php if(!$__Context->oDocument->getProfileImage()){ ?><span class="img profile no_img">?</span><?php } ?>
		</div><?php } ?>
		
		<div class="guest_meta">
			<?php if(!$__Context->oDocument->getMemberSrl() && $__Context->oDocument->isExistsHomepage()){ ?><a href="<?php echo $__Context->oDocument->getHomepageUrl() ?>" onclick="window.open(this.href);return false"><?php echo $__Context->oDocument->getNickName() ?></a><?php } ?>
			<?php if(!$__Context->oDocument->getMemberSrl() && !$__Context->oDocument->isExistsHomepage()){ ?><b><?php echo $__Context->oDocument->getNickName() ?></b><?php } ?>
			<?php if($__Context->oDocument->getMemberSrl()){ ?><a href="#popup_menu_area" class="member_<?php echo $__Context->oDocument->get('member_srl') ?>" onclick="return false"><?php echo $__Context->oDocument->getNickName() ?></a><?php } ?>
			<span class="date"><?php echo getTimeGap($__Context->oDocument->get('regdate'), "Y.m.d H:i") ?></span><?php if($__Context->grant->manager || $__Context->mi->display_ip_address=='Y'){ ?><small class="m_no">(<?php echo $__Context->oDocument->getIpaddress() ?>)</small><?php } ?>
			<?php if($__Context->oDocument->isSecret()){ ?><span class="ico_secret">SECRET</span><?php } ?>
		</div>
		
		<?php echo $__Context->oDocument->getContent(false) ?>
		
		<div class="guest_itm_nav fdb_nav">
			<?php if($__Context->oDocument->isEditable()){ ?>
			<a href="<?php echo getUrl('act','dispBoardWrite','document_srl',$__Context->oDocument->document_srl,'comment_srl','') ?>"><?php echo $__Context->lang->cmd_modify ?></a>
			<a href="<?php echo getUrl('act','dispBoardDelete','document_srl',$__Context->oDocument->document_srl,'comment_srl','') ?>"><?php echo $__Context->lang->cmd_delete ?></a>
			<?php } ?>
			<a href="#" onclick="jQuery(this).parent().next().slideToggle().find('.fdb_lst_ul,.bd_pg').show();return false"><?php echo $__Context->lang->comment ?><em><?php echo $__Context->oDocument->getCommentcount() ?></em></a>
		</div>
		
		<div class="guest_cmt fdb_v2 clear <?php echo $__Context->mi->profile_img ?> <?php echo $__Context->mi->fdb_hide ?>">
			
			<?php if($__Context->oDocument->getCommentcount()){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5','_comment.html');
} ?>
			
			<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5','_comment_write.html') ?>
		</div>
		<?php  $__Context->rd_idx=1 ?>
		<?php } ?>
	</div><?php }} ?>
</div>