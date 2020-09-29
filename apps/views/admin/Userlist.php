<?php
// var_dump($_SESSION['login']);

// if ($_SESSION['login'] == TRUE) {
// 	echo "Sedang login";
// } else {
// 	echo "Sedang OFF";
// }
// die;

?>

<!-- WRAPPER -->
<div id="wrapper">
	<!-- LEFT SIDE BAR -->
	<?= $this->view('templateadmin/sidebar'); ?>
	<!-- END LEFT SIDE BAR -->
	<!-- MAIN -->
	<div class="main">
		<!-- MAIN CONTENT -->
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<!-- TASKS -->
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Halaman User List</h3>
								<div class="right">
									<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
									<!-- <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button> -->
								</div>
							</div>
							<div class="panel-body">
								<table id="table_id" class="table">
									<thead class="thead-dark">
										<tr>
											<th scope="col">No</th>
											<th scope="col">Nama</th>
											<th scope="col">Status</th>
											<th scope="col">Username</th>
											<th scope="col">Deskripsi</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>

									</tbody>
								</table>
							</div>
						</div>
						<!-- END TASKS -->
					</div>
				</div>
			</div>
		</div>
		<!-- END MAIN CONTENT -->
	</div>
	<!-- END MAIN -->