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
					<div class="col-md-12">
						<!-- TASKS -->
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Halaman List Artikel</h3>
								<div class="right">
									<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
									<!-- <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button> -->
								</div>
							</div>
							<div class="panel-body">
								<!-- menggunakan datatable -->
								<table id="table_id" class="table table-striped table-dark">
									<thead>
										<tr>
											<th scope="col">No</th>
											<th scope="col">Judul</th>
											<th scope="col">Status</th>
											<th scope="col">Penulis</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $i = 1; ?>
										<?php foreach ($data['listNews'] as $row) : ?>
										<tr>
											<th scope="row"><?= $i++ ?></th>
											<td><?= $row['judul']; ?></td>
											<td>
												<?php if ($row['status'] == 1) : ?>
												Publish
												<?php else : ?>
												Unpublish
												<?php endif; ?>
											</td>
											<td><?= $row['penulis']; ?></td>
											<td>
												<div class="btn-group" role="group" aria-label="Basic example">

													<?php if ($row['status'] == 1) : ?>
													<a href="<?= BASEURL ?>Listnews/unpulishArtikel/<?= $row['urlid']; ?>" <button type="button"
														class="btn btn-primary">unPublish</button>
													</a>
													<?php else : ?>
													<a href="<?= BASEURL ?>Listnews/publishArtikel/<?= $row['urlid']; ?>" <button type="button"
														class="btn btn-info">Publish</button>
													</a>
													<?php endif; ?>

													<a href="<?= BASEURL ?>News/detail/<?= $row['urlid']; ?>" target="_blank">
														<button type="button" class="btn btn-warning">Preview</button>
													</a>
													<a href="<?= BASEURL . 'EditNews/' . $row['urlid']; ?>">
														<button type="button" class="btn btn-success">Edit</button>
													</a>
													<?php if ($_SESSION['login'] == true & $_SESSION['level'] == '0') : ?>
													<a href="<?= BASEURL . 'Listnews/DeleteArtikel/' . $row['uniqid']; ?>">
														<button type="button" class="btn btn-danger">Delete</button>
													</a>
													<?php endif; ?>
												</div>
											</td>
										</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
								<!-- END DATA TABLE -->
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