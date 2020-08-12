<!-- WRAPPER -->
<div id="wrapper">
	<!-- LEFT SIDE BAR -->
	<?= $this->view('templateadmin/sidebar', $_SESSION); ?>
	<!-- END LEFT SIDE BAR -->
	<!-- MAIN -->
	<div class="main">
		<!-- MAIN CONTENT -->
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4">
						<!-- TASKS -->
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">My Tasks</h3>
								<div class="right">
									<button type="button" class="btn-toggle-collapse"><i
											class="lnr lnr-chevron-up"></i></button>
									<!-- <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button> -->
								</div>
							</div>
							<div class="panel-body">
								<ul class="list-unstyled task-list">
									<li>
										<p>Updating Users Settings <span class="label-percent">23%</span></p>
										<div class="progress progress-xs">
											<div class="progress-bar progress-bar-danger" role="progressbar"
												aria-valuenow="23" aria-valuemin="0" aria-valuemax="100"
												style="width:23%">
												<span class="sr-only">23% Complete</span>
											</div>
										</div>
									</li>
									<li>
										<p>Load &amp; Stress Test <span class="label-percent">80%</span></p>
										<div class="progress progress-xs">
											<div class="progress-bar progress-bar-success" role="progressbar"
												aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
												style="width: 80%">
												<span class="sr-only">80% Complete</span>
											</div>
										</div>
									</li>
									<li>
										<p>Data Duplication Check <span class="label-percent">100%</span></p>
										<div class="progress progress-xs">
											<div class="progress-bar progress-bar-success" role="progressbar"
												aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
												style="width: 100%">
												<span class="sr-only">Success</span>
											</div>
										</div>
									</li>
									<li>
										<p>Server Check <span class="label-percent">45%</span></p>
										<div class="progress progress-xs">
											<div class="progress-bar progress-bar-warning" role="progressbar"
												aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"
												style="width: 45%">
												<span class="sr-only">45% Complete</span>
											</div>
										</div>
									</li>
									<li>
										<p>Mobile App Development <span class="label-percent">10%</span></p>
										<div class="progress progress-xs">
											<div class="progress-bar progress-bar-danger" role="progressbar"
												aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"
												style="width: 10%">
												<span class="sr-only">10% Complete</span>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<!-- END TASKS -->
					</div>
					<div class="col-md-4">
						<!-- VISIT CHART -->
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Website Visits</h3>
								<div class="right">
									<button type="button" class="btn-toggle-collapse"><i
											class="lnr lnr-chevron-up"></i></button>
									<!-- <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button> -->
								</div>
							</div>
							<div class="panel-body">
								<div id="visits-chart" class="ct-chart"></div>
							</div>
						</div>
						<!-- END VISIT CHART -->
					</div>
					<div class="col-md-4">
						<!-- REALTIME CHART -->
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">System Load</h3>
								<div class="right">
									<button type="button" class="btn-toggle-collapse"><i
											class="lnr lnr-chevron-up"></i></button>
									<!-- <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button> -->
								</div>
							</div>
							<div class="panel-body">
								<div id="system-load" class="easy-pie-chart" data-percent="70">
									<span class="percent">70</span>
								</div>
								<h4>CPU Load</h4>
								<ul class="list-unstyled list-justify">
									<li>High: <span>95%</span></li>
									<li>Average: <span>87%</span></li>
									<li>Low: <span>20%</span></li>
									<li>Threads: <span>996</span></li>
									<li>Processes: <span>259</span></li>
								</ul>
							</div>
						</div>
						<!-- END REALTIME CHART -->
					</div>
				</div>
			</div>
		</div>
		<!-- END MAIN CONTENT -->
	</div>
	<!-- END MAIN -->