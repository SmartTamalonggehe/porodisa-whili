
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">	
	  	<div class="multinav">
		  <div class="multinav-scroll" style="height: 100%;">	
			  <!-- sidebar menu-->
			  <ul class="sidebar-menu" data-widget="tree">	
				<li class="header">Dashboard & Apps</li>
				<li>
				  <a href="{{route('pimpinan')}}">
					<i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
					<span>DASHBOARD</span>
					
				  </a>
				</li>				
				<li>
				  <a href="{{route('anggotaPimpinan.index')}}">
					<i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
					<span>LAPORAN ANGGOTA</span>
					
				  </a>
				</li>				
				<li>
				  <a href="{{route('kegiatanPimpinan.index')}}">
					<i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
					<span>LAPORAN KEGIATAN</span>
					
				  </a>
				</li>				
				<li>
				  <a href="{{route('keuanganPimpinan.index')}}">
					<i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
					<span>LAPORAN KEUANGAN</span>
					
				  </a>
				</li>				
			  </ul>
		  </div>
		</div>
    </section>
	<div class="sidebar-footer">
		<a href="javascript:void(0)" class="link" data-bs-toggle="tooltip" title="Settings"><span class="icon-Settings-2"></span></a>
		<a href="mailbox.html" class="link" data-bs-toggle="tooltip" title="Email"><span class="icon-Mail"></span></a>
		<a href="javascript:void(0)" class="link" data-bs-toggle="tooltip" title="Logout"><span class="icon-Lock-overturning"><span class="path1"></span><span class="path2"></span></span></a>
	</div>
  </aside>