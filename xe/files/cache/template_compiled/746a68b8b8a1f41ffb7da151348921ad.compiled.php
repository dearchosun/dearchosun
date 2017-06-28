<?php if(!defined("__XE__"))exit;
$__Context->time_arr = array(3,6,9,12,15,18,21,24) ?>
<div class="soo_weather_mini">
	<ol class="soo_weather_mini">
		<?php if($__Context->time_arr&&count($__Context->time_arr))foreach($__Context->time_arr as $__Context->key=>$__Context->time){ ?>
		<?php if(isset($__Context->datas->today[$__Context->time])){ ?><li style="soo_weather_today">
			<ul>
				<li class="soo_time text"><i class="xi-time"></i> <time datetime="<?php echo date('Y-m-d\TH:i\+09:00',strtotime (date('Y-m-d',$__Context->datas->pubtime) . $__Context->time .':00' )) ?>"><?php echo $__Context->time ?>:00</time></li>
				<li class="soo_weather_mini_icon">
				<?php if($__Context->datas->today[$__Context->time]->pty->body == 0){ ?>
					<?php if($__Context->datas->today[$__Context->time]->sky->body == 1){ ?>
						<?php if($__Context->time < 20 && $__Context->time >= 6){ ?><i class="xi-sun" title="<?php echo $__Context->lang->sky_lang[1] ?>"></i><?php };
if($__Context->time >= 20 || $__Context->time < 6){ ?><i class="xi-night" title="<?php echo $__Context->lang->sky_lang[1] ?>"></i><?php } ?><span class="soo_text_hide"><?php echo $__Context->lang->sky_lang[1] ?></span>
					<?php } ?>
					<?php if($__Context->datas->today[$__Context->time]->sky->body == 2){ ?>
						<?php if($__Context->time < 20 && $__Context->time >= 6){ ?><i class="xi-partly-cloudy" title="<?php echo $__Context->lang->sky_lang[2] ?>"></i><?php };
if($__Context->time >= 20 || $__Context->time < 6){ ?><i class="xi-cloudy-night" title="<?php echo $__Context->lang->sky_lang[2] ?>"></i><?php } ?><span class="soo_text_hide"><?php echo $__Context->lang->sky_lang[2] ?></span>
					<?php } ?>
					<?php if($__Context->datas->today[$__Context->time]->sky->body == 3){ ?>
						<i class="xi-cloudy" title="<?php echo $__Context->lang->sky_lang[3] ?>"></i><span class="soo_text_hide"><?php echo $__Context->lang->sky_lang[3] ?></span>
					<?php } ?>
					<?php if($__Context->datas->today[$__Context->time]->sky->body == 4){ ?>
						<i class="xi-cloudiness" title="<?php echo $__Context->lang->sky_lang[4] ?>"></i><span class="soo_text_hide"><?php echo $__Context->lang->sky_lang[4] ?></span>
					<?php } ?>
				<?php } ?>
				<?php if($__Context->datas->today[$__Context->time]->pty->body == 1){ ?>
					<i class="xi-rain" title="<?php echo $__Context->lang->rain_lang[1] ?>"></i><span class="soo_text_hide"><?php echo $__Context->lang->rain_lang[1] ?></span>
				<?php } ?>
				<?php if($__Context->datas->today[$__Context->time]->pty->body == 2){ ?>
					<i class="xi-heavy-snow" title="<?php echo $__Context->lang->rain_lang[2] ?>"></i><span class="soo_text_hide"><?php echo $__Context->lang->rain_lang[2] ?></span>
				<?php } ?>
				<?php if($__Context->datas->today[$__Context->time]->pty->body == 3){ ?>
					<i class="xi-snow" title="<?php echo $__Context->lang->rain_lang[3] ?>"></i><span class="soo_text_hide"><?php echo $__Context->lang->rain_lang[3] ?></span>
				<?php } ?>
				</li>
				<li class="soo_temperature text" title="<?php echo $__Context->lang->soo_temperature ?>"><i class="xi-warm"></i> <?php echo $__Context->datas->today[$__Context->time]->temp->body ?>°C</li>
				<li class="soo_humidity text" title="<?php echo $__Context->lang->soo_humidity ?>"><i class="xi-humidity"></i> <?php echo $__Context->datas->today[$__Context->time]->reh->body ?>%</li>
				<li class="soo_p_rain text"<?php if($__Context->datas->today[$__Context->time]->pty->body != 1 && $__Context->datas->today[$__Context->time]->pty->body != 2 && $__Context->datas->today[$__Context->time]->pty->body != 3){ ?> title="<?php echo $__Context->lang->soo_p_rain ?>"<?php };
if($__Context->datas->today[$__Context->time]->pty->body == 2 || $__Context->datas->today[$__Context->time]->pty->body == 3){ ?> title="<?php echo $__Context->lang->soo_s06 ?>"<?php };
if($__Context->datas->today[$__Context->time]->pty->body == 1){ ?> title="<?php echo $__Context->lang->soo_r06 ?>"<?php } ?>><i class="xi-umbrella"></i> <?php if($__Context->datas->today[$__Context->time]->pty->body == 1){;
echo intval(round($__Context->datas->today[$__Context->time]->r06->body,0)) ?>mm<?php };
if($__Context->datas->today[$__Context->time]->pty->body == 2 || $__Context->datas->today[$__Context->time]->pty->body == 3){;
echo intval(round($__Context->datas->today[$__Context->time]->s06->body,0)) ?>mm<?php };
if($__Context->datas->today[$__Context->time]->pty->body != 1 && $__Context->datas->today[$__Context->time]->pty->body != 2 && $__Context->datas->today[$__Context->time]->pty->body != 3){;
echo $__Context->datas->today[$__Context->time]->pop->body ?>%<?php } ?></li>
			</ul>
		</li><?php } ?>
		<?php } ?>
		<?php if($__Context->time_arr&&count($__Context->time_arr))foreach($__Context->time_arr as $__Context->key=>$__Context->time){ ?>
		<?php if(isset($__Context->datas->tomorrow[$__Context->time])){ ?><li>
			<ul>
				<li class="soo_time text"><i class="xi-time"></i> <time datetime="<?php echo date('Y-m-d\TH:i\+09:00',strtotime (date('Y-m-d',$__Context->datas->pubtime + 86400) . $__Context->time .':00' )) ?>"><?php echo $__Context->time ?>:00</time></li>
				<li class="soo_weather_mini_icon">
				<?php if($__Context->datas->tomorrow[$__Context->time]->pty->body == 0){ ?>
					<?php if($__Context->datas->tomorrow[$__Context->time]->sky->body == 1){ ?>
						<?php if($__Context->time < 20 && $__Context->time >= 6){ ?><i class="xi-sun" title="<?php echo $__Context->lang->sky_lang[1] ?>"></i><?php };
if($__Context->time >= 20 || $__Context->time < 6){ ?><i class="xi-night" title="<?php echo $__Context->lang->sky_lang[1] ?>"></i><?php } ?><span class="soo_text_hide"><?php echo $__Context->lang->sky_lang[1] ?></span>
					<?php } ?>
					<?php if($__Context->datas->tomorrow[$__Context->time]->sky->body == 2){ ?>
						<?php if($__Context->time < 20 && $__Context->time >= 6){ ?><i class="xi-partly-cloudy" title="<?php echo $__Context->lang->sky_lang[2] ?>"></i><?php };
if($__Context->time >= 20 || $__Context->time < 6){ ?><i class="xi-cloudy-night" title="<?php echo $__Context->lang->sky_lang[2] ?>"></i><?php } ?><span class="soo_text_hide"><?php echo $__Context->lang->sky_lang[2] ?></span>
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
				<li class="soo_p_rain text"<?php if($__Context->datas->tomorrow[$__Context->time]->pty->body != 1 && $__Context->datas->tomorrow[$__Context->time]->pty->body != 2 && $__Context->datas->tomorrow[$__Context->time]->pty->body != 3){ ?> title="<?php echo $__Context->lang->soo_p_rain ?>"<?php };
if($__Context->datas->tomorrow[$__Context->time]->pty->body == 2 || $__Context->datas->tomorrow[$__Context->time]->pty->body == 3){ ?> title="<?php echo $__Context->lang->soo_s06 ?>"<?php };
if($__Context->datas->tomorrow[$__Context->time]->pty->body == 1){ ?> title="<?php echo $__Context->lang->soo_r06 ?>"<?php } ?>><i class="xi-umbrella"></i> <?php if($__Context->datas->tomorrow[$__Context->time]->pty->body == 1){;
echo intval(round($__Context->datas->tomorrow[$__Context->time]->r06->body,0)) ?>mm<?php };
if($__Context->datas->tomorrow[$__Context->time]->pty->body == 2 || $__Context->datas->tomorrow[$__Context->time]->pty->body == 3){;
echo intval(round($__Context->datas->tomorrow[$__Context->time]->s06->body,0)) ?>mm<?php };
if($__Context->datas->tomorrow[$__Context->time]->pty->body != 1 && $__Context->datas->tomorrow[$__Context->time]->pty->body != 2 && $__Context->datas->tomorrow[$__Context->time]->pty->body != 3){;
echo $__Context->datas->tomorrow[$__Context->time]->pop->body ?>%<?php } ?></li>
			</ul>
		</li><?php } ?>
		<?php } ?>
		<?php if($__Context->time_arr&&count($__Context->time_arr))foreach($__Context->time_arr as $__Context->key=>$__Context->time){ ?>
		<?php if(isset($__Context->datas->after_tomorrow[$__Context->time])){ ?><li>
			<ul>
				<li class="soo_time text"><i class="xi-time"></i> <time datetime="<?php echo date('Y-m-d\TH:i\+09:00',strtotime (date('Y-m-d',$__Context->datas->pubtime + 172800) . $__Context->time .':00' )) ?>"><?php echo $__Context->time ?>:00</time></li>
				<li class="soo_weather_mini_icon">
				<?php if($__Context->datas->after_tomorrow[$__Context->time]->pty->body == 0){ ?>
					<?php if($__Context->datas->after_tomorrow[$__Context->time]->sky->body == 1){ ?>
						<?php if($__Context->time < 20 && $__Context->time >= 6){ ?><i class="xi-sun" title="<?php echo $__Context->lang->sky_lang[1] ?>"></i><?php };
if($__Context->time >= 20 || $__Context->time < 6){ ?><i class="xi-night" title="<?php echo $__Context->lang->sky_lang[1] ?>"></i><?php } ?><span class="soo_text_hide"><?php echo $__Context->lang->sky_lang[1] ?></span>
					<?php } ?>
					<?php if($__Context->datas->after_tomorrow[$__Context->time]->sky->body == 2){ ?>
						<?php if($__Context->time < 20 && $__Context->time >= 6){ ?><i class="xi-partly-cloudy" title="<?php echo $__Context->lang->sky_lang[2] ?>"></i><?php };
if($__Context->time >= 20 || $__Context->time < 6){ ?><i class="xi-cloudy-night" title="<?php echo $__Context->lang->sky_lang[2] ?>"></i><?php } ?><span class="soo_text_hide"><?php echo $__Context->lang->sky_lang[2] ?></span>
					<?php } ?>
					<?php if($__Context->datas->after_tomorrow[$__Context->time]->sky->body == 3){ ?>
						<i class="xi-cloudy" title="<?php echo $__Context->lang->sky_lang[3] ?>"></i><span class="soo_text_hide"><?php echo $__Context->lang->sky_lang[3] ?></span>
					<?php } ?>
					<?php if($__Context->datas->after_tomorrow[$__Context->time]->sky->body == 4){ ?>
						<i class="xi-cloudiness" title="<?php echo $__Context->lang->sky_lang[4] ?>"></i><span class="soo_text_hide"><?php echo $__Context->lang->sky_lang[4] ?></span>
					<?php } ?>
				<?php } ?>
				<?php if($__Context->datas->after_tomorrow[$__Context->time]->pty->body == 1){ ?>
					<i class="xi-rain" title="<?php echo $__Context->lang->rain_lang[1] ?>"></i><span class="soo_text_hide"><?php echo $__Context->lang->rain_lang[1] ?></span>
				<?php } ?>
				<?php if($__Context->datas->after_tomorrow[$__Context->time]->pty->body == 2){ ?>
					<i class="xi-heavy-snow" title="<?php echo $__Context->lang->rain_lang[2] ?>"></i><span class="soo_text_hide"><?php echo $__Context->lang->rain_lang[2] ?></span>
				<?php } ?>
				<?php if($__Context->datas->after_tomorrow[$__Context->time]->pty->body == 3){ ?>
					<i class="xi-snow" title="<?php echo $__Context->lang->rain_lang[3] ?>"></i><span class="soo_text_hide"><?php echo $__Context->lang->rain_lang[3] ?></span>
				<?php } ?>
				</li>
				<li class="soo_temperature text" title="<?php echo $__Context->lang->soo_temperature ?>"><i class="xi-warm"></i> <?php echo $__Context->datas->after_tomorrow[$__Context->time]->temp->body ?>°C</li>
				<li class="soo_humidity text" title="<?php echo $__Context->lang->soo_humidity ?>"><i class="xi-humidity"></i> <?php echo $__Context->datas->after_tomorrow[$__Context->time]->reh->body ?>%</li>
				<li class="soo_p_rain text"<?php if($__Context->datas->after_tomorrow[$__Context->time]->pty->body != 1 && $__Context->datas->after_tomorrow[$__Context->time]->pty->body != 2 && $__Context->datas->after_tomorrow[$__Context->time]->pty->body != 3){ ?> title="<?php echo $__Context->lang->soo_p_rain ?>"<?php };
if($__Context->datas->after_tomorrow[$__Context->time]->pty->body == 2 || $__Context->datas->after_tomorrow[$__Context->time]->pty->body == 3){ ?> title="<?php echo $__Context->lang->soo_s06 ?>"<?php };
if($__Context->datas->after_tomorrow[$__Context->time]->pty->body == 1){ ?> title="<?php echo $__Context->lang->soo_r06 ?>"<?php } ?>><i class="xi-umbrella"></i> <?php if($__Context->datas->after_tomorrow[$__Context->time]->pty->body == 1){;
echo intval(round($__Context->datas->after_tomorrow[$__Context->time]->r06->body,0)) ?>mm<?php };
if($__Context->datas->after_tomorrow[$__Context->time]->pty->body == 2 || $__Context->datas->after_tomorrow[$__Context->time]->pty->body == 3){;
echo intval(round($__Context->datas->after_tomorrow[$__Context->time]->s06->body,0)) ?>mm<?php };
if($__Context->datas->after_tomorrow[$__Context->time]->pty->body != 1 && $__Context->datas->after_tomorrow[$__Context->time]->pty->body != 2 && $__Context->datas->after_tomorrow[$__Context->time]->pty->body != 3){;
echo $__Context->datas->after_tomorrow[$__Context->time]->pop->body ?>%<?php } ?></li>
			</ul>
		</li><?php } ?>
		<?php } ?>
	</ol>
</div>