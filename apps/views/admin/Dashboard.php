<!-- WRAPPER -->
<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script> -->
<script src="<?= BASE_URL . '/admin'; ?>/vendor/chartjs/chart.js"></script>
<div id="wrapper">
	<!-- LEFT SIDE BAR -->
	<?= $this->view('templateadmin/sidebar') ?>
	<!-- END LEFT SIDE BAR -->
	<!-- MAIN -->
	<div class="main">
		<!-- MAIN CONTENT -->
		<div class="main-content">
			<div class="container-fluid">
				<!-- OVERVIEW -->
				<div class="panel panel-headline">
					<div class="panel-heading">
						<h3 class="panel-title">Weekly Overview</h3>
						<?php date_default_timezone_set('Asia/Jakarta'); ?>
						<p class="panel-subtitle">Day : <?= date('Y-m-d H:i:s', time()); ?></p>
					</div>
					<div class="panel-body">
						<div class="row">
							<!-- Total Visit -->
							<div class="col-md-3">
								<div class="metric">
									<span class="icon"><i class="fa fa-eye"></i></span>
									<p>
										<span class="number">10019</span>
										<span class="title">Visits Artikel</span>
									</p>
								</div>
							</div>
							<!-- end total visit -->
							<!-- Total Resource -->
							<div class="col-md-3">
								<div class="metric">
									<span class="icon"><i class="fa fa-file"></i></span>
									<p>
										<span class="number">1200</span>
										<span class="title">Resource Artikel</span>
									</p>
								</div>
							</div>
							<!-- end total Resource -->
						</div>
					</div>
				</div>
				<!-- END OVERVIEW -->

				<!-- TASKS Artikel line -->
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Statistik Artikel Line</h3>
						<div class="right">
							<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
							<!-- <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button> -->
						</div>
					</div>
					<div class="panel-body">
						<canvas id="myChart" width="400" height="150"></canvas>
					</div>
				</div>
				<!-- END TASKS Artikel Line -->

				<!-- TASKS Artikel bar -->
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">Statistik Artikel Bar<h3>
								<div class="right">
									<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
									<!-- <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button> -->
								</div>
					</div>
					<div class="panel-body">
						<canvas id="myChartBar" width="400" height="150"></canvas>
					</div>
				</div>
				<!-- END TASKS Artikel bar -->


			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->


		<script>
		// passing data php array ke json javascript
		// var data = <?php echo json_encode($data['artikel']); ?>;

		// array labels kosong  
		var labels = []
		data.forEach(label => {
			labels.push(label['judul_content'].substr(0, 10) + '...');
		});

		// array values	 kosong  
		var values = [];
		data.forEach(value => {
			values.push(value['visit_views']);
		});

		// alert(data[0]['id']);
		console.log(labels);
		console.log(values);

		// line bar 
		var ctx = document.getElementById('myChart').getContext('2d');
		var myLineChart = new Chart(ctx, {
			// The type of chart we want to create
			type: 'line',

			// The data for our dataset
			data: {
				labels: labels,
				datasets: [{
					label: 'Total Visit Views',
					backgroundColor: 'rgb(255, 99, 132)',
					borderColor: 'rgb(255, 99, 132)',
					data: values
				}]
			},
			// Configuration options go here
			options: {}
		});
		// end line bar

		// line bar 
		var ctx2 = document.getElementById('myChartBar').getContext('2d');
		var myBarChart = new Chart(ctx2, {
			// The type of chart we want to create
			type: 'bar',

			// The data for our dataset
			data: {
				labels: labels,
				datasets: [{
					label: 'Total Visit Views',
					backgroundColor: 'lightblue',
					borderColor: 'rgb(255, 99, 132)',
					data: values
				}]
			},
			// Configuration options go here
			options: {}
		});
		// end line bar
		</script>