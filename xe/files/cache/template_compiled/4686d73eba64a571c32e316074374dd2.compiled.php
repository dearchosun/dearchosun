<?php if(!defined("__XE__"))exit;
if(version_compare(__XE_VERSION__, '1.8.0', '<')){ ?>
	<link rel="stylesheet" href="//cdn.jsdelivr.net/xeicon/1.0.4/xeicon.min.css" />
<?php }else{ ?>
	<!--#Meta:common/xeicon/xeicon.min.css--><?php $__tmp=array('common/xeicon/xeicon.min.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php } ?>
<!--#Meta:widgets/soo_kma_rss/skins/soo_kuple/js/content_widget.js--><?php $__tmp=array('widgets/soo_kma_rss/skins/soo_kuple/js/content_widget.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:widgets/soo_kma_rss/skins/soo_kuple/css/css.css--><?php $__tmp=array('widgets/soo_kma_rss/skins/soo_kuple/css/css.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php Context::loadLang('widgets/soo_kma_rss/skins/soo_kuple/lang'); ?>
<?php $__Context->datas_orginal = $__Context->datas ?>
<?php $__Context->location_array = $__Context->datas->location_array ?>
<section class="widgetContainer">
	<h1 class="soo_weather_title"><?php echo $__Context->lang->soo_weather ?></h1>
	<div class="misolWeather">
		<?php if(trim($__Context->datas_orginal->location2->link) != ''){ ?><div class="misolTab">
			<ul class="misolWeatherTabA widgetTab">
				<?php $__Context->point_n = 0 ?>
				<?php if($__Context->location_array&&count($__Context->location_array))foreach($__Context->location_array as $__Context->point_key=>$__Context->point_data){;
if($__Context->point_data->data->link){ ?>
					<li<?php if($__Context->point_n == 0){ ?> class="active"<?php } ?>><a href="<?php echo $__Context->point_data->data->link ?>" onmouseover="content_widget_tab_show(jQuery(this),jQuery(this).parents('div.misolTab').next('dl.widgetDivider'),<?php echo $__Context->point_n ?>)" onclick="this.onmouseover();return false;"><span><?php echo $__Context->point_data->name ?></span></a><?php $__Context->point_n++ ?></li>
				<?php }} ?>
				
			</ul>
		</div><?php } ?>
		<?php if(trim($__Context->datas_orginal->location2->link) == ''){ ?><div class="misolTop">
			<a href="<?php echo $__Context->datas->location1->link ?>" onclick="window.open(this.href);return false;" class="misol_top_a"><h2><?php echo $__Context->location1 ?></h2><span class="misol_more"><i class="xi-angle-right" title="<?php echo $__Context->lang->detail_view ?>"></i></span></a>
		</div><?php } ?>
		<?php if(trim($__Context->datas_orginal->location2->link) != ''){ ?><dl class="widgetDivider">
			<?php $__Context->point_n2 = 0 ?>
			<?php if($__Context->location_array&&count($__Context->location_array))foreach($__Context->location_array as $__Context->point_key=>$__Context->point_data){;
if($__Context->point_data->data->link){ ?>
				<dt><?php echo $__Context->point_data->name ?></dt>
				<dd<?php if($__Context->point_n2 == 0){ ?> class="open"<?php } ?>>
					<?php  $__Context->datas = $__Context->point_data->data ?>
					<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('widgets/soo_kma_rss/skins/soo_kuple','normal.html') ?>
				</dd><?php $__Context->point_n2++ ?>
			<?php }} ?>
		</dl><?php } ?>
		<?php if(trim($__Context->datas_orginal->location2->link) == ''){ ?><div>
			<?php  $__Context->datas = $__Context->datas_orginal->location1 ?>
			<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('widgets/soo_kma_rss/skins/soo_kuple','normal.html') ?>
		</div><?php } ?>
		<footer class="soo_weather_footer"><?php echo $__Context->lang->soo_pubtime ?>: <time datetime="<?php echo date('Y-m-d\TH:i\+09:00',$__Context->datas_orginal->pubtime) ?>"><?php echo date('m/d H:i',$__Context->datas_orginal->pubtime) ?></time>, <address><?php echo $__Context->lang->soo_copyright ?> &copy; <a href="http://www.kma.go.kr" onclick="window.open(this.href);return false"><?php echo $__Context->lang->soo_kma ?></a></address></footer>
	</div>
</section>