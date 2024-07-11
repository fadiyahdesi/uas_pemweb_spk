<div id="sidebar-nav" class="sidebar" style="background-color: #070707;">
	<div class="sidebar-scroll">
		<nav>
			<ul class="nav">
				@if (auth()->user()->role=='Admin')
				<li><a href="/admin"><i class="fa fa-user"></i> <span>Menu Utama</span></a></li>
				@endif
				
				@if (auth()->user()->role=='Admin')
				<li>
					<a href="#subPages1" data-toggle="collapse" class="collapsed"><i class="fa fa-address-book icon"></i><span>Admin</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
					<div id="subPages1" class="collapse ">
						<ul class="nav">
							<li><a href="/admin/user"><i class="lnr lnr-user" style="color: yellow;"></i> <span>User</span></a></li>
							<li><a href="/admin/rumah"><i class="lnr lnr-map-marker" style="color: yellow;"></i> <span>Optic</span></a></li>
							<li><a href="/admin/kriteria"><i class="fa fa-random" style="color: yellow;"></i> <span>Kriteria</span></a></li>
							<li><a href="/admin/sub"><i class="fa fa-tag icon" style="color: yellow;"></i> <span>Sub Kriteria</span></a></li>
						</ul>
					</div>
				</li>
				@endif
				<li><a href="/ahp/bobot"><i class="fa fa-calculator icon"></i>AHP</a></li>
				@if (auth()->user()->role=='Admin')
				@endif
			</ul>
		</nav>
	</div>
</div>