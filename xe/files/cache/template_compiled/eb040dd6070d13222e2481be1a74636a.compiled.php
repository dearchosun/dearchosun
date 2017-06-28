<?php if(!defined("__XE__"))exit;
if(version_compare(__XE_VERSION__, '1.8.0', '<')){ ?>
	<link rel="stylesheet" href="//cdn.jsdelivr.net/xeicon/1.0.4/xeicon.min.css" />
<?php }else{ ?>
	<!--#Meta:common/xeicon/xeicon.min.css--><?php $__tmp=array('common/xeicon/xeicon.min.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php } ?>
<!--#Meta:widgets/soo_kma_rss/skins/mobile_banner/css/css.css--><?php $__tmp=array('widgets/soo_kma_rss/skins/mobile_banner/css/css.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="soo_weather_m">
	<ol class="soo_weather_m">
		<li>
			<a href="<?php echo $__Context->datas->location1->link ?>" onclick="window.open(this.href);return false">
				<ul>
					<li class="soo_location text"><i class="xi-compass"></i> <?php echo $__Context->location1 ?></li>
					<li class="soo_weather_m_icon">
					<?php if($__Context->datas->location1->recent->pty->body == 0){ ?>
						<?php if($__Context->datas->location1->recent->sky->body == 1){ ?>
							<?php if($__Context->time < 20){ ?><i class="xi-sun" title="<?php echo $__Context->lang->sky_lang[1] ?>"></i><?php };
if($__Context->time >= 20){ ?><i class="xi-night" title="<?php echo $__Context->lang->sky_lang[1] ?>"></i><?php } ?><span class="soo_text_hide"><?php echo $__Context->lang->sky_lang[1] ?></span>
						<?php } ?>
						<?php if($__Context->datas->location1->recent->sky->body == 2){ ?>
							<?php if($__Context->time < 20){ ?><i class="xi-partly-cloudy" title="<?php echo $__Context->lang->sky_lang[2] ?>"></i><?php };
if($__Context->time >= 20){ ?><i class="xi-cloudy-night" title="<?php echo $__Context->lang->sky_lang[2] ?>"></i><?php } ?><span class="soo_text_hide"><?php echo $__Context->lang->sky_lang[2] ?></span>
						<?php } ?>
						<?php if($__Context->datas->location1->recent->sky->body == 3){ ?>
							<i class="xi-cloudy" title="<?php echo $__Context->lang->sky_lang[3] ?>"></i><span class="soo_text_hide"><?php echo $__Context->lang->sky_lang[3] ?></span>
						<?php } ?>
						<?php if($__Context->datas->location1->recent->sky->body == 4){ ?>
							<i class="xi-cloudiness" title="<?php echo $__Context->lang->sky_lang[4] ?>"></i><span class="soo_text_hide"><?php echo $__Context->lang->sky_lang[4] ?></span>
						<?php } ?>
					<?php } ?>
					<?php if($__Context->datas->location1->recent->pty->body == 1){ ?>
						<i class="xi-rain" title="<?php echo $__Context->lang->rain_lang[1] ?>"></i><span class="soo_text_hide"><?php echo $__Context->lang->rain_lang[1] ?></span>
					<?php } ?>
					<?php if($__Context->datas->location1->recent->pty->body == 2){ ?>
						<i class="xi-heavy-snow" title="<?php echo $__Context->lang->rain_lang[2] ?>"></i><span class="soo_text_hide"><?php echo $__Context->lang->rain_lang[2] ?></span>
					<?php } ?>
					<?php if($__Context->datas->location1->recent->pty->body == 3){ ?>
						<i class="xi-snow" title="<?php echo $__Context->lang->rain_lang[3] ?>"></i><span class="soo_text_hide"><?php echo $__Context->lang->rain_lang[3] ?></span>
					<?php } ?>
					</li>
					<li class="soo_temperature text" title="<?php echo $__Context->lang->soo_temperature ?>"><i class="xi-warm"></i> <?php echo $__Context->datas->location1->recent->temp->body ?>°C</li>
					<li class="soo_humidity text" title="<?php echo $__Context->lang->soo_humidity ?>"><i class="xi-humidity"></i> <?php echo $__Context->datas->location1->recent->reh->body ?>%</li>
					<li class="soo_p_rain text" title="<?php echo $__Context->lang->soo_p_rain ?>"><i class="xi-umbrella"></i> <?php echo $__Context->datas->location1->recent->pop->body ?>%</li>
				</ul>
			</a>
		</li>
		<li>
			<a href="<?php echo $__Context->datas->location2->link ?>" onclick="window.open(this.href);return false">
				<ul>
					<li class="soo_location text"><i class="xi-compass"></i> <?php echo $__Context->location2 ?></li>
					<li class="soo_weather_m_icon">
					<?php if($__Context->datas->location2->recent->pty->body == 0){ ?>
						<?php if($__Context->datas->location2->recent->sky->body == 1){ ?>
							<?php if($__Context->time < 20){ ?><i class="xi-sun" title="<?php echo $__Context->lang->sky_lang[1] ?>"></i><?php };
if($__Context->time >= 20){ ?><i class="xi-night" title="<?php echo $__Context->lang->sky_lang[1] ?>"></i><?php } ?><span class="soo_text_hide"><?php echo $__Context->lang->sky_lang[1] ?></span>
						<?php } ?>
						<?php if($__Context->datas->location2->recent->sky->body == 2){ ?>
							<?php if($__Context->time < 20){ ?><i class="xi-partly-cloudy" title="<?php echo $__Context->lang->sky_lang[2] ?>"></i><?php };
if($__Context->time >= 20){ ?><i class="xi-cloudy-night" title="<?php echo $__Context->lang->sky_lang[2] ?>"></i><?php } ?><span class="soo_text_hide"><?php echo $__Context->lang->sky_lang[2] ?></span>
						<?php } ?>
						<?php if($__Context->datas->location2->recent->sky->body == 3){ ?>
							<i class="xi-cloudy" title="<?php echo $__Context->lang->sky_lang[3] ?>"></i><span class="soo_text_hide"><?php echo $__Context->lang->sky_lang[3] ?></span>
						<?php } ?>
						<?php if($__Context->datas->location2->recent->sky->body == 4){ ?>
							<i class="xi-cloudiness" title="<?php echo $__Context->lang->sky_lang[4] ?>"></i><span class="soo_text_hide"><?php echo $__Context->lang->sky_lang[4] ?></span>
						<?php } ?>
					<?php } ?>
					<?php if($__Context->datas->location2->recent->pty->body == 1){ ?>
						<i class="xi-rain" title="<?php echo $__Context->lang->rain_lang[1] ?>"></i><span class="soo_text_hide"><?php echo $__Context->lang->rain_lang[1] ?></span>
					<?php } ?>
					<?php if($__Context->datas->location2->recent->pty->body == 2){ ?>
						<i class="xi-heavy-snow" title="<?php echo $__Context->lang->rain_lang[2] ?>"></i><span class="soo_text_hide"><?php echo $__Context->lang->rain_lang[2] ?></span>
					<?php } ?>
					<?php if($__Context->datas->location2->recent->pty->body == 3){ ?>
						<i class="xi-snow" title="<?php echo $__Context->lang->rain_lang[3] ?>"></i><span class="soo_text_hide"><?php echo $__Context->lang->rain_lang[3] ?></span>
					<?php } ?>
					</li>
					<li class="soo_temperature text" title="<?php echo $__Context->lang->soo_temperature ?>"><i class="xi-warm"></i> <?php echo $__Context->datas->location2->recent->temp->body ?>°C</li>
					<li class="soo_humidity text" title="<?php echo $__Context->lang->soo_humidity ?>"><i class="xi-humidity"></i> <?php echo $__Context->datas->location2->recent->reh->body ?>%</li>
					<li class="soo_p_rain text" title="<?php echo $__Context->lang->soo_p_rain ?>"><i class="xi-umbrella"></i> <?php echo $__Context->datas->location2->recent->pop->body ?>%</li>
				</ul>
			</a>
		</li>
	</ol>
	<address><?php echo $__Context->lang->soo_copyright ?>: <a href="http://www.kma.go.kr" onclick="window.open(this.href);return false"><?php echo $__Context->lang->soo_kma ?></a></address>
</div>