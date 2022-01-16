<!-- Right Sidebar -->
<div class="right-bar">
	<div data-simplebar class="h-100">

		<!-- Nav tabs -->
		<ul class="nav nav-tabs nav-bordered nav-justified" role="tablist">
			<li class="nav-item">
				<a class="nav-link py-2 active" data-bs-toggle="tab" href="#settings-tab" role="tab">
					<i class="mdi mdi-cog-outline d-block font-22 my-1"></i>
				</a>
			</li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content pt-0">
			<div class="tab-pane active" id="settings-tab" role="tabpanel">
				<h6 class="fw-medium px-3 m-0 py-2 font-13 text-uppercase bg-light">
					<span class="d-block py-1">Theme Settings</span>
				</h6>

				<div class="p-3">
					<div class="alert alert-warning" role="alert">
						<strong>Customize </strong> the overall color scheme, sidebar menu, etc.
					</div>

					<h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Color Scheme</h6>
					<div class="form-check form-switch mb-1">
						<input type="checkbox" class="form-check-input" name="color-scheme-mode" value="light" id="light-mode-check" checked />
						<label class="form-check-label" for="light-mode-check">Light Mode</label>
					</div>

					<div class="form-check form-switch mb-1">
						<input type="checkbox" class="form-check-input" name="color-scheme-mode" value="dark" id="dark-mode-check" />
						<label class="form-check-label" for="dark-mode-check">Dark Mode</label>
					</div>

					<!-- Width -->
					<h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Width</h6>
					<div class="form-check form-switch mb-1">
						<input type="checkbox" class="form-check-input" name="width" value="fluid" id="fluid-check" checked />
						<label class="form-check-label" for="fluid-check">Fluid</label>
					</div>
					<div class="form-check form-switch mb-1">
						<input type="checkbox" class="form-check-input" name="width" value="boxed" id="boxed-check" />
						<label class="form-check-label" for="boxed-check">Boxed</label>
					</div>

					<!-- Menu positions -->
					<h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Menus (Leftsidebar and Topbar) Positon</h6>

					<div class="form-check form-switch mb-1">
						<input type="checkbox" class="form-check-input" name="menus-position" value="fixed" id="fixed-check" checked />
						<label class="form-check-label" for="fixed-check">Fixed</label>
					</div>

					<div class="form-check form-switch mb-1">
						<input type="checkbox" class="form-check-input" name="menus-position" value="scrollable" id="scrollable-check" />
						<label class="form-check-label" for="scrollable-check">Scrollable</label>
					</div>

					<!-- Left Sidebar-->
					<h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Color</h6>

					<div class="form-check form-switch mb-1">
						<input type="checkbox" class="form-check-input" name="leftsidebar-color" value="light" id="light-check" />
						<label class="form-check-label" for="light-check">Light</label>
					</div>

					<div class="form-check form-switch mb-1">
						<input type="checkbox" class="form-check-input" name="leftsidebar-color" value="dark" id="dark-check" checked />
						<label class="form-check-label" for="dark-check">Dark</label>
					</div>

					<div class="form-check form-switch mb-1">
						<input type="checkbox" class="form-check-input" name="leftsidebar-color" value="brand" id="brand-check" />
						<label class="form-check-label" for="brand-check">Brand</label>
					</div>

					<div class="form-check form-switch mb-3">
						<input type="checkbox" class="form-check-input" name="leftsidebar-color" value="gradient" id="gradient-check" />
						<label class="form-check-label" for="gradient-check">Gradient</label>
					</div>

					<!-- size -->
					<h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Size</h6>

					<div class="form-check form-switch mb-1">
						<input type="checkbox" class="form-check-input" name="leftsidebar-size" value="default" id="default-size-check" checked />
						<label class="form-check-label" for="default-size-check">Default</label>
					</div>

					<div class="form-check form-switch mb-1">
						<input type="checkbox" class="form-check-input" name="leftsidebar-size" value="condensed" id="condensed-check" />
						<label class="form-check-label" for="condensed-check">Condensed <small>(Extra Small size)</small></label>
					</div>

					<div class="form-check form-switch mb-1">
						<input type="checkbox" class="form-check-input" name="leftsidebar-size" value="compact" id="compact-check" />
						<label class="form-check-label" for="compact-check">Compact <small>(Small size)</small></label>
					</div>

					<!-- User info -->
					<h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Sidebar User Info</h6>

					<div class="form-check form-switch mb-1">
						<input type="checkbox" class="form-check-input" name="leftsidebar-user" value="fixed" id="sidebaruser-check" />
						<label class="form-check-label" for="sidebaruser-check">Enable</label>
					</div>


					<!-- Topbar -->
					<h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Topbar</h6>

					<div class="form-check form-switch mb-1">
						<input type="checkbox" class="form-check-input" name="topbar-color" value="dark" id="darktopbar-check" checked />
						<label class="form-check-label" for="darktopbar-check">Dark</label>
					</div>

					<div class="form-check form-switch mb-1">
						<input type="checkbox" class="form-check-input" name="topbar-color" value="light" id="lighttopbar-check" />
						<label class="form-check-label" for="lighttopbar-check">Light</label>
					</div>


					<div class="d-grid mt-4">
						<button class="btn btn-primary" id="resetBtn">Reset to Default</button>
					</div>

				</div>

			</div>
		</div>

	</div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- Vendor js -->
<script src="<?= base_url('assets_admin/') ?>js/vendor.min.js"></script>

<!-- third party js -->
<script src="<?= base_url('assets_admin/') ?>libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets_admin/') ?>libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="<?= base_url('assets_admin/') ?>libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets_admin/') ?>libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
<script src="<?= base_url('assets_admin/') ?>libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets_admin/') ?>libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
<script src="<?= base_url('assets_admin/') ?>libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets_admin/') ?>libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?= base_url('assets_admin/') ?>libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets_admin/') ?>libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="<?= base_url('assets_admin/') ?>libs/datatables.net-select/js/dataTables.select.min.js"></script>
<script src="<?= base_url('assets_admin/') ?>libs/pdfmake/build/pdfmake.min.js"></script>
<script src="<?= base_url('assets_admin/') ?>libs/pdfmake/build/vfs_fonts.js"></script>
<!-- third party js ends -->

<!-- Datatables init -->
<script src="<?= base_url('assets_admin/') ?>js/pages/datatables.init.js"></script>

<!-- Chart JS -->
<script src="<?= base_url('assets_admin/') ?>libs/chart.js/Chart.bundle.min.js"></script>

<script src="<?= base_url('assets_admin/') ?>libs/moment/min/moment.min.js"></script>
<script src="<?= base_url('assets_admin/') ?>libs/jquery.scrollto/jquery.scrollTo.min.js"></script>

<!-- Chat app -->
<script src="<?= base_url('assets_admin/') ?>js/pages/jquery.chat.js"></script>

<!-- Todo app -->
<script src="<?= base_url('assets_admin/') ?>js/pages/jquery.todo.js"></script>

<!-- Dashboard init JS -->
<script src="<?= base_url('assets_admin/') ?>js/pages/dashboard-3.init.js"></script>

<!-- Plugins js -->
<script src="<?= base_url('assets_admin/') ?>libs/morris.js06/morris.min.js"></script>
<script src="<?= base_url('assets_admin/') ?>libs/raphael/raphael.min.js"></script>

<!-- Dashboard init-->
<script src="<?= base_url('assets_admin/') ?>js/pages/dashboard-4.init.js"></script>

<!-- App js-->
<script src="<?= base_url('assets_admin/') ?>js/app.min.js"></script>

</body>

</html>