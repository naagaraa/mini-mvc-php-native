<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
		<nav>
			<ul class="nav">
				<li>
					<a href="<?= URL . 'dashboard'; ?>">
						<!-- <i class="lnr lnr-home"></i> -->
						<span>Dashboard</span>
					</a>
				</li>
				<li>
					<a href="<?= URL . 'chard'; ?>" class="">
						<!-- <i class="lnr lnr-chart-bars"></i> -->
						<span>Charts</span>
					</a>
				</li>
				<li>
					<a href="<?= URL . 'list-artikel'; ?>" class="">
						<!-- <i class="lnr lnr-code"></i> -->
						<span>List Article</span>
					</a>
				</li>
				<li><a href="<?= URL . 'tambah-artikel'; ?>" class="">
						<!-- <i class="lnr lnr-code"></i> -->
						<span>Tambah Article</span>
					</a>
				</li>
				<li>
					<a href="<?= URL . 'contact-us'; ?>" class="">
						<!-- <i class="lnr lnr-code"> -->
						</i> <span>Contact Us</span>
					</a>
				</li>

				<!-- akses super admin -->
				<?php //if ($_SESSION['level'] === '0') : 
				?>
				<?php
				echo "<li>
							<a href=" . "'" . URL . "tambah-user'" . "class=''>
								</i> <span>Tambah User</span>
							</a>
						</li>
						<li>
						<a href=" . "'" . URL . "user-list'" . "class=''>
								</i> <span>User List</span>
							</a>
						</li>
						<li>
						<a href=" . "'" . URL . "track-akses'" . "class=''>
								</i> <span>Track Akses</span>
							</a>
						</li>
						<li>
						<a href=" . "'" . URL . "visit-page'" . "class=''>
								</i> <span>Visit Page</span>
							</a>
						</li>"; ?>
				<?php //elseif ($_SESSION['level'] === '1') : 
				?>
				<?php echo ""; ?>
				<?php //endif; 
				?>
				<!--  end akses super admin -->


			</ul>
		</nav>
	</div>
</div>
<!-- END LEFT SIDEBAR -->