<!--  BEGIN SIDEBAR  -->
<div class="sidebar-wrapper sidebar-theme">

	<nav id="sidebar">
		<div class="shadow-bottom"></div>

		<ul class="list-unstyled menu-categories" id="accordionExample">

			<li class="menu">
				<a href="<?= base_url('dokter') ?>" aria-expanded="false" class="dropdown-toggle">
					<div class="">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
							<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
							<polyline points="9 22 9 12 15 12 15 22"></polyline>
						</svg>
						<span>Dashboard</span></span>
					</div>
				</a>
			</li>

			<li class="menu">
				<a href="<?= base_url('dokter/jadwal') ?>" aria-expanded="false" class="dropdown-toggle">
					<div class="">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
							<rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
							<line x1="16" y1="2" x2="16" y2="6"></line>
							<line x1="8" y1="2" x2="8" y2="6"></line>
							<line x1="3" y1="10" x2="21" y2="10"></line>
						</svg>
						<span>Jadwal</span></span>
					</div>
				</a>
			</li>

			<li class="menu">
				<a href="<?= base_url('dokter/jadwal/konsultasi') ?>" aria-expanded="false" class="dropdown-toggle">
					<div class="">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square">
							<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
						</svg>
						<span>Konsultasi</span></span>
					</div>
				</a>
			</li>

			<li class="menu">
				<a href="<?= base_url('dokter/diagnosa') ?>" aria-expanded="false" class="dropdown-toggle">
					<div class="">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
							<circle cx="11" cy="11" r="8"></circle>
							<line x1="21" y1="21" x2="16.65" y2="16.65"></line>
						</svg>
						<span>Rekam Medis</span></span>
					</div>
				</a>
			</li>

		</ul>

	</nav>

</div>
<!--  END SIDEBAR  -->