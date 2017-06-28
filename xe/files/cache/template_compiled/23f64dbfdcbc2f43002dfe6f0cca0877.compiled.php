<?php if(!defined("__XE__"))exit;
if(version_compare(__XE_VERSION__, '1.8.0', '<')){ ?>
	<link rel="stylesheet" href="//cdn.jsdelivr.net/xeicon/1.0.4/xeicon.min.css" />
<?php }else{ ?>
	<!--#Meta:common/xeicon/xeicon.min.css--><?php $__tmp=array('common/xeicon/xeicon.min.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php } ?>
<!--#Meta:widgets/soo_kma_rss/skins/mini_icon/css/css.css--><?php $__tmp=array('widgets/soo_kma_rss/skins/mini_icon/css/css.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<section>
	<h1 class="soo_weather"><i class="xi-sunset"></i> <?php echo $__Context->location ?> <?php echo $__Context->lang->soo_tomorrow ?>(<?php echo intval(date('m',$__Context->datas->pubtime)) ?>/<?php echo intval(date('d',$__Context->datas->pubtime))+1 ?>) <?php echo $__Context->lang->soo_weather ?> <a href="<?php echo $__Context->datas->link ?>" onclick="window.open(this.href);return false"><?php echo $__Context->lang->detail_view ?></a></h1>
	<?php $__Context->time_arr = array(6,9,12,15,18,21,24) ?>
	<div class="soo_weather_mini">
		<ol class="soo_weather_mini">
			<?php if($__Context->time_arr&&count($__Context->time_arr))foreach($__Context->time_arr as $__Context->key=>$__Context->time){ ?><li>
				<ul>
					<li class="soo_time text"><i class="xi-time"></i> <?php echo $__Context->time ?>:00</li>
					<li class="soo_weather_mini_icon">
					<?php if($__Context->datas->tomorrow[$__Context->time]->pty->body == 0){ ?>
						<?php if($__Context->datas->tomorrow[$__Context->time]->sky->body == 1){ ?>
							<?php if($__Context->time < 20){ ?><i class="xi-sun" title="<?php echo $__Context->lang->sky_lang[1] ?>"></i><?php };
if($__Context->time >= 20){ ?><i class="xi-night" title="<?php echo $__Context->lang->sky_lang[1] ?>"></i><?php } ?><span class="soo_text_hide"><?php echo $__Context->lang->sky_lang[1] ?></span>
						<?php } ?>
						<?php if($__Context->datas->tomorrow[$__Context->time]->sky->body == 2){ ?>
							<?php if($__Context->time < 20){ ?><i class="xi-partly-cloudy" title="<?php echo $__Context->lang->sky_lang[2] ?>"></i><?php };
if($__Context->time >= 20){ ?><i class="xi-cloudy-night" title="<?php echo $__Context->lang->sky_lang[2] ?>"></i><?php } ?><span class="soo_text_hide"><?php echo $__Context->lang->sky_lang[2] ?></span>
						<?php } ?>
						<?php if($__Context->datas->tomorrow[$__Context->time]->sky->body == 3){ ?>
							<i class="xi-cloudy" title="<?php echo $__Context->lang->sky_lang[3] ?>"></i><span class="soo_text_hide"><?php echo $__Context->lang->sky_lang[3] ?></span>
						<?php } ?>
						<?php if($__Context->datas->tomorrow[$__Context->time]->sky->body == 4){ ?>
							<i class="xi-cloudiness" title="<?php echo $__Context->lang->sky_lang[4] ?>"></i><span class="soo_text_hide"><?php echo $__Context->lang->sky_lang[4] ?></span>
						<?php } ?>
					<?php } ?>
					<?php if($__Context->datas->tomorrow[$__Context->time]->pty->body == 1){ ?>
						<i class="xi-rain" title="<?php echo $__Context->lang->rain_lang[1] ?>"></i><span class="soo_text_hide"><?php echo $__Context->lang->rain_lang[1] ?></span>
					<?php } ?>
					<?php if($__Context->datas->tomorrow[$__Context->time]->pty->body == 2){ ?>
						<i class="xi-heavy-snow" title="<?php echo $__Context->lang->rain_lang[2] ?>"></i><span class="soo_text_hide"><?php echo $__Context->lang->rain_lang[2] ?></span>
					<?php } ?>
					<?php if($__Context->datas->tomorrow[$__Context->time]->pty->body == 3){ ?>
						<i class="xi-snow" title="<?php echo $__Context->lang->rain_lang[3] ?>"></i><span class="soo_text_hide"><?php echo $__Context->lang->rain_lang[3] ?></span>
					<?php } ?>
					</li>
					<li class="soo_temperature text" title="<?php echo $__Context->lang->soo_temperature ?>"><i class="xi-warm"></i> <?php echo $__Context->datas->tomorrow[$__Context->time]->temp->body ?>°C</li>
					<li class="soo_humidity text" title="<?php echo $__Context->lang->soo_humidity ?>"><i class="xi-humidity"></i> <?php echo $__Context->datas->tomorrow[$__Context->time]->reh->body ?>%</li>
					<li class="soo_p_rain text" title="<?php echo $__Context->lang->soo_p_rain ?>"><i class="xi-umbrella"></i> <?php echo $__Context->datas->tomorrow[$__Context->time]->pop->body ?>%</li>
				</ul>
			</li><?php } ?>
		</ol>
	</div>
	<footer class="soo_weather_footer"><?php echo $__Context->lang->soo_pubtime ?>: <time datetime="<?php echo date('Y-m-d\TH:i\+09:00',$__Context->datas->pubtime) ?>"><?php echo date('m/d H:i',$__Context->datas->pubtime) ?></time>, <address><?php echo $__Context->lang->soo_copyright ?> &copy; <a href="http://www.kma.go.kr" onclick="window.open(this.href);return false"><?php echo $__Context->lang->soo_kma ?></a></address></footer>
</section>