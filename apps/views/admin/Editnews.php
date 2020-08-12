<!-- WRAPPER -->
<div id="wrapper">
	<!-- LEFT SIDE BAR -->
	<?php echo $this->view('templateadmin/sidebar', $_SESSION);
	?>
	<!-- END LEFT SIDE BAR -->
	<!-- MAIN -->
	<div class="main">
		<!-- MAIN CONTENT -->
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md">
						<!-- TASKS -->
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Halaman Edit</h3>
								<div class="right">
									<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
									<!-- <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button> -->
								</div>
							</div>
							<div class="panel-body">
								<form action="<?php BASEURL; ?>edit" method="POST" enctype="multipart/form-data">
									<input type="hidden" class="form-control" id="judul" name="id" value="<?= $data['News']['id']; ?>">
									<input type="hidden" class="form-control" id="judul" name="uniqid" value="<?= $data['News']['uniqid']; ?>">
									<div class="form-group mb-5">
										<div class="col-md">
											<label for="judul">Judul</label>

											<input type="text" class="form-control" id="judul" name="judul" value="<?= $data['News']['judul']; ?>">
										</div>
									</div>
									<div class="form-group  mb-5">
										<label for="penulis">Penulis</label>
										<input type="text" class="form-control" id="penulis" name="penulis" value="<?= $data['News']['penulis']; ?>">
									</div>
									<!-- <span>
										<label for="">Status : </label>
									</span> -->
									<div class="form-group  mb-5">
										<!-- <div class="form-check">
											<input class="form-check-input" type="radio" name="status" id="publish"
												value="1" checked>
											<label class="form-check-label" for="publish">
												Publish
											</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="radio" name="status" id="unpublish"
												value="0">
											<label class="form-check-label" for="unpublish">
												Unpublish
											</label>
										</div> -->
									</div>
									<div class="form-group  mb-5">
										<div class="row">
											<div class="col-md-6">
												<div class="custom-file mb-3">
													<label class="custom-file-label" for="cover">File Gambar
														Cover
														:
													</label>
													<input type="file" class="custom-file-input" id="cover" name="cover">
												</div>
											</div>
											<div class="col-md-6">
												<div class="custom-file mb-3">
													<label class="custom-file-label" for="gambar">File Gambar
														Artikel :
													</label>
													<input type="file" class="custom-file-input" id="gambar" name="gambar">
												</div>
											</div>
										</div>
									</div>
									<div class="form-group mb-5">
										<label for="">Content</label>
										<textarea class="form-control" id="content" name="content" rows="3"><?= $data['News']['artikel']; ?></textarea>
									</div>
									<button type="submit" class="btn btn-primary">Save</button>
								</form>
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
	<script>
		CKEDITOR.replace('content', {
			// Define the toolbar groups as it is a more accessible solution.
			toolbarGroups: [{
					"name": "basicstyles",
					"groups": ["basicstyles"]
				},
				{
					"name": "links",
					"groups": ["links"]
				},
				{
					"name": "paragraph",
					"groups": ["list", "blocks"]
				},
				// {
				// 	"name": "document",
				// 	"groups": ["mode"]
				// },
				{
					"name": "styles",
					"groups": ["styles"]
				},
				// {
				// 	"name": "about",
				// 	"groups": ["about"]
				// }
			],
			// Remove the redundant buttons from toolbar groups defined above.
			removeButtons: 'Underline,Strike,Subscript,Superscript,Anchor,Styles,Specialchar'
		});
	</script>