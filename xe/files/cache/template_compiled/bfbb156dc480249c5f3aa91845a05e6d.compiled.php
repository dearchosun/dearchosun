<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/skins/sketchbook5_member_skin','common_header.html') ?>
<div class="border">
<h1 class="h1"><?php echo $__Context->lang->cmd_resend_auth_mail ?></h1>
<p><?php echo sprintf($__Context->lang->about_reset_auth_mail, $__Context->memberInfo->email_address) ?></p>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/member/skins/sketchbook5_member_skin/reset_mail/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<form action="./" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="member" />
	<input type="hidden" name="act" value="procMemberResendAuthMail" />
	<input type="hidden" name="email_address" value="<?php echo $__Context->memberInfo->email_address ?>" />
	<input type="hidden" name="xe_validator_id" value="modules/member/skins/sketchbook5_member_skin/reset_mail/1" />
	<div class="input-append">
		<input type="text" readonly="readonly" disabled="disabled" value="<?php echo $__Context->memberInfo->email_address ?>" title="<?php echo $__Context->lang->cmd_resend_auth_mail ?>" /> 
		<input type="submit" id="resend_button" name="" value="<?php echo $__Context->lang->cmd_resend_auth_mail ?>" class="btn btn-inverse" />
	</div>
</form>
<?php Context::addJsFile("modules/member/ruleset/resetAuthMail.xml", FALSE, "", 0, "body", TRUE, "") ?><form  action="./" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="resetAuthMail" />
	<input type="hidden" name="module" value="member" />
	<input type="hidden" name="act" value="procMemberResetAuthMail" />
	<div class="input-append">
		<input type="text" id="email_address" name="email_address" value="" placeholder="<?php echo $__Context->lang->cmd_modify_new_auth_email_address ?>" title="<?php echo $__Context->lang->cmd_modify_new_auth_email_address ?>" /> 
		<input type="submit" value="<?php echo $__Context->lang->cmd_send_auth_new_emaill_address ?>" class="btn btn-inverse" />
	</div>
	<p><?php echo $__Context->lang->about_reset_auth_mail_submit ?></p>
</form>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/skins/sketchbook5_member_skin','common_footer.html') ?>
