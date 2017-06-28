<?php if(!defined("__XE__"))exit;
if(version_compare(__XE_VERSION__, '1.8.0', '<')){ ?>
	<link rel="stylesheet" href="//cdn.jsdelivr.net/xeicon/1.0.4/xeicon.min.css" />
<?php }else{ ?>
	<!--#Meta:common/xeicon/xeicon.min.css--><?php $__tmp=array('common/xeicon/xeicon.min.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php } ?>
<!--#Meta:widgets/soo_kma_rss/skins/default/css/css.css--><?php $__tmp=array('widgets/soo_kma_rss/skins/default/css/css.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:widgets/soo_kma_rss/skins/default/js/Chart.js-1.0.2/Chart.js--><?php $__tmp=array('widgets/soo_kma_rss/skins/default/js/Chart.js-1.0.2/Chart.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:widgets/soo_kma_rss/skins/default/js/js.js--><?php $__tmp=array('widgets/soo_kma_rss/skins/default/js/js.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<section>
	<h1 class="soo_weather"><i class="xi-sunset"></i> <?php echo $__Context->location ?> <?php echo $__Context->lang->soo_tomorrow ?>(<?php echo intval(date('m',$__Context->datas->pubtime)) ?>/<?php echo intval(date('d',$__Context->datas->pubtime))+1 ?>) <?php echo $__Context->lang->soo_weather ?> <a href="<?php echo $__Context->datas->link ?>" onclick="window.open(this.href);return false"><?php echo $__Context->lang->detail_view ?></a></h1>
	<?php $__Context->time_arr = array(6,9,12,15,18,21,24) ?>
	<div class="soo_weather">
		<ol class="soo_weather">
			<?php if($__Context->time_arr&&count($__Context->time_arr))foreach($__Context->time_arr as $__Context->key=>$__Context->time){ ?><li>
				<span class="soo_time"><i class="xi-time"></i> <time datetime="<?php echo date('Y-m-d\TH:i\+09:00',strtotime (date('Y-m-d',$__Context->datas->pubtime + 86400) . $__Context->time .':00' )) ?>"><?php echo $__Context->time ?>:00</time></span>
				<span class="soo_weather_icon">
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
				</span>
			</li><?php } ?>
		</ol>
	</div>
	<h2 class="soo_weather"><i class="xi-umbrella"></i> <?php echo $__Context->lang->soo_p_rain ?></h2>
	<canvas id="soo_p_rain" class="soo_graph"></canvas>
	<script>
	var p_rain_data = {
		labels: [<?php if($__Context->time_arr&&count($__Context->time_arr))foreach($__Context->time_arr as $__Context->key=>$__Context->time){ ?>"<?php echo $__Context->time ?>:00",<?php } ?>],
		datasets: [
			{
				label: "<?php echo $__Context->lang->soo_p_rain ?>",
				fillColor: "rgba(187,222,251,0.2)",
				strokeColor: "rgba(68,138,255,1)",
				pointColor: "rgba(33,150,243,1)",
				pointStrokeColor: "#fff",
				pointHighlightFill: "#fff",
				pointHighlightStroke: "rgba(220,220,220,1)",
				data: [<?php if($__Context->time_arr&&count($__Context->time_arr))foreach($__Context->time_arr as $__Context->key=>$__Context->time){ ?>"<?php echo $__Context->datas->tomorrow[$__Context->time]->pop->body ?>",<?php } ?>]
			}
		]
	};
	var p_rain_option = {
		scaleOverride: true,
		scaleSteps: 5,
		scaleStepWidth: Math.ceil(100 / 5),
		scaleStartValue: 0,
		// String - Template string for single tooltips
		tooltipTemplate: "<%= value %>%",
		///Boolean - Whether grid lines are shown across the chart
		scaleShowGridLines : true,
		//String - Colour of the grid lines
		scaleGridLineColor : "rgba(0,0,0,.05)",
		//Number - Width of the grid lines
		scaleGridLineWidth : 1,
		//Boolean - Whether to show horizontal lines (except X axis)
		scaleShowHorizontalLines: true,
		//Boolean - Whether to show vertical lines (except Y axis)
		scaleShowVerticalLines: true,
		//Boolean - Whether the line is curved between points
		bezierCurve : true,
		//Number - Tension of the bezier curve between points
		bezierCurveTension : 0.4,
		//Boolean - Whether to show a dot for each point
		pointDot : true,
		//Number - Radius of each point dot in pixels
		pointDotRadius : 4,
		//Number - Pixel width of point dot stroke
		pointDotStrokeWidth : 1,
		//Number - amount extra to add to the radius to cater for hit detection outside the drawn point
		pointHitDetectionRadius : 20,
		//Boolean - Whether to show a stroke for datasets
		datasetStroke : true,
		//Number - Pixel width of dataset stroke
		datasetStrokeWidth : 2,
		//Boolean - Whether to fill the dataset with a colour
		datasetFill : true,
		//String - A legend template
		legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"
	};
	</script>
	<h2 class="soo_weather"><i class="xi-warm"></i> <?php echo $__Context->lang->soo_temperature ?></h2>
	<canvas id="soo_temperature" class="soo_graph"></canvas>
	<script>
	var temperature_data = {
		labels: [<?php if($__Context->time_arr&&count($__Context->time_arr))foreach($__Context->time_arr as $__Context->key=>$__Context->time){ ?>"<?php echo $__Context->time ?>:00",<?php } ?>],
		datasets: [
			{
				label: "<?php echo $__Context->lang->soo_temperature ?>",
				fillColor: "rgba(256,235,238,0.2)",
				strokeColor: "rgba(244,67,54,1)",
				pointColor: "rgba(255,23,68,1)",
				pointStrokeColor: "#fff",
				pointHighlightFill: "#fff",
				pointHighlightStroke: "rgba(220,220,220,1)",
				data: [<?php if($__Context->time_arr&&count($__Context->time_arr))foreach($__Context->time_arr as $__Context->key=>$__Context->time){ ?>"<?php echo $__Context->datas->tomorrow[$__Context->time]->temp->body ?>",<?php } ?>]
			}
		]
	};
	var temperature_option = {
		// String - Template string for single tooltips
		tooltipTemplate: "<%= value %>°C",
		///Boolean - Whether grid lines are shown across the chart
		scaleShowGridLines : true,
		//String - Colour of the grid lines
		scaleGridLineColor : "rgba(0,0,0,.05)",
		//Number - Width of the grid lines
		scaleGridLineWidth : 1,
		//Boolean - Whether to show horizontal lines (except X axis)
		scaleShowHorizontalLines: true,
		//Boolean - Whether to show vertical lines (except Y axis)
		scaleShowVerticalLines: true,
		//Boolean - Whether the line is curved between points
		bezierCurve : true,
		//Number - Tension of the bezier curve between points
		bezierCurveTension : 0.4,
		//Boolean - Whether to show a dot for each point
		pointDot : true,
		//Number - Radius of each point dot in pixels
		pointDotRadius : 4,
		//Number - Pixel width of point dot stroke
		pointDotStrokeWidth : 1,
		//Number - amount extra to add to the radius to cater for hit detection outside the drawn point
		pointHitDetectionRadius : 20,
		//Boolean - Whether to show a stroke for datasets
		datasetStroke : true,
		//Number - Pixel width of dataset stroke
		datasetStrokeWidth : 2,
		//Boolean - Whether to fill the dataset with a colour
		datasetFill : true,
		//String - A legend template
		legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"
	};
	</script>
	<h2 class="soo_weather"><i class="xi-humidity"></i> <?php echo $__Context->lang->soo_humidity ?></h2>
	<canvas id="soo_humidity" class="soo_graph"></canvas>
	<script>
	var humidity_data = {
		labels: [<?php if($__Context->time_arr&&count($__Context->time_arr))foreach($__Context->time_arr as $__Context->key=>$__Context->time){ ?>"<?php echo $__Context->time ?>:00",<?php } ?>],
		datasets: [
			{
				label: "<?php echo $__Context->lang->soo_humidity ?>",
				fillColor: "rgba(197,202,233,0.2)",
				strokeColor: "rgba(83,109,254,1)",
				pointColor: "rgba(63,81,181,1)",
				pointStrokeColor: "#fff",
				pointHighlightFill: "#fff",
				pointHighlightStroke: "rgba(220,220,220,1)",
				data: [<?php if($__Context->time_arr&&count($__Context->time_arr))foreach($__Context->time_arr as $__Context->key=>$__Context->time){ ?>"<?php echo $__Context->datas->tomorrow[$__Context->time]->reh->body ?>",<?php } ?>]
			},
		]
	};
	var humidity_option = {
		scaleOverride: true,
		scaleSteps: 5,
		scaleStepWidth: Math.ceil(100 / 5),
		scaleStartValue: 0,
		// String - Template string for single tooltips
		tooltipTemplate: "<%= value %>%",
		///Boolean - Whether grid lines are shown across the chart
		scaleShowGridLines : true,
		//String - Colour of the grid lines
		scaleGridLineColor : "rgba(0,0,0,.05)",
		//Number - Width of the grid lines
		scaleGridLineWidth : 1,
		//Boolean - Whether to show horizontal lines (except X axis)
		scaleShowHorizontalLines: true,
		//Boolean - Whether to show vertical lines (except Y axis)
		scaleShowVerticalLines: true,
		//Boolean - Whether the line is curved between points
		bezierCurve : true,
		//Number - Tension of the bezier curve between points
		bezierCurveTension : 0.4,
		//Boolean - Whether to show a dot for each point
		pointDot : true,
		//Number - Radius of each point dot in pixels
		pointDotRadius : 4,
		//Number - Pixel width of point dot stroke
		pointDotStrokeWidth : 1,
		//Number - amount extra to add to the radius to cater for hit detection outside the drawn point
		pointHitDetectionRadius : 20,
		//Boolean - Whether to show a stroke for datasets
		datasetStroke : true,
		//Number - Pixel width of dataset stroke
		datasetStrokeWidth : 2,
		//Boolean - Whether to fill the dataset with a colour
		datasetFill : true,
		//String - A legend template
		legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"
	};
	</script>
	<footer class="soo_weather_footer"><?php echo $__Context->lang->soo_pubtime ?>: <time datetime="<?php echo date('Y-m-d\TH:i\+09:00',$__Context->datas->pubtime) ?>"><?php echo date('m/d H:i',$__Context->datas->pubtime) ?></time>, <address><?php echo $__Context->lang->soo_copyright ?> &copy; <a href="http://www.kma.go.kr" onclick="window.open(this.href);return false"><?php echo $__Context->lang->soo_kma ?></a></address></footer>
</section>