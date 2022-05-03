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
                        <a href="{{ route('pimpinan') }}">
                            <i class="icon-Layout-4-blocks"><span class="path1"></span><span
                                    class="path2"></span></i>
                            <span>DASHBOARD</span>

                        </a>
                    </li>
                    <li>
                        <a href="{{ route('anggotaPimpinan.index') }}">
                            <i class="icon-Layout-4-blocks"><span class="path1"></span><span
                                    class="path2"></span></i>
                            <span>LAPORAN ANGGOTA</span>

                        </a>
                    </li>
                    <li>
                        <a href="{{ route('kegiatanPimpinan.index') }}">
                            <i class="icon-Layout-4-blocks"><span class="path1"></span><span
                                    class="path2"></span></i>
                            <span>LAPORAN KEGIATAN</span>

                        </a>
                    </li>
                    <li>
                        <a href="{{ route('keuanganPimpinan.index') }}">
                            <i class="icon-Layout-4-blocks"><span class="path1"></span><span
                                    class="path2"></span></i>
                            <span>LAPORAN KEUANGAN</span>

                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</aside>
