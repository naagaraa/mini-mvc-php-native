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
					<div class="col-md">
						<!-- TASKS -->
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Halaman Add User</h3>
								<div class="right">
									<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
									<!-- <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button> -->
								</div>
							</div>
							<div class="panel-body">
								<form action="<?php BASEURL; ?>Register/registerUser" method="POST" enctype="multipart/form-data">
									<div class="form-group mb-5">
										<div class="col-md">
											<label for="judul"><span style="color: red;">*</span>Nama</label>
											<input required type="text" class="form-control" id="nama" name="nama" placeholder="Nama User">
										</div>
									</div>
									<div class="form-group  mb-5">
										<label for="username"><span style="color: red;">*</span>Username</label>
										<input required type="text" class="form-control" id="username" name="username"
											placeholder="username User">
									</div>
									<div class="form-group  mb-5">
										<label for="username"><span style="color: red;">*</span>Password</label>
										<input required type="text" class="form-control" id="password" name="password"
											placeholder="Password User" pattern=".{0}|.{8,}" title="Either 0 OR (8 chars minimum)">
									</div>
									<span>
										<label for="">Level : </label>
									</span>
									<div class="form-group  mb-5">
										<div class="form-check">
											
											<!-- <div>
												<input class="form-check-input" type="radio" id="superadmin" name="level" value="0">
												<label class="form-check-label" for="superadmin">Super Admin</label>
											</div> -->

											<div>
												<input class="form-check-input" type="radio" id="admin" name="level" value="1" checked>
												<label class="form-check-label" for="admin">Admin</label>
											</div>

											<div>
												<input class="form-check-input" type="radio" id="user" name="level" value="2">
												<label class="form-check-label" for="user">user</label>
											</div>
										</div>
									</div>
									<div class="form-group mb-5">
										<div class="custom-file mb-3">
											<label class="custom-file-label" for="cover"><span style="color: red;">*</span>Foto
												User
												:
											</label>
											<input required type="file" class="custom-file-input" id="foto" name="foto" required="">
										</div>
									</div>
									<div class="form-group mb-5">
										<label for="">Deskripsi User</label>
										<textarea class="form-control" id="content" name="deskripsi" rows="3"></textarea>
									</div>
									<button type="submit" class="btn btn-primary">Register</button>
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