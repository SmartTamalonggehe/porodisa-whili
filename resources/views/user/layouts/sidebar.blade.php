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
                        <a href="{{ route('anggota') }}">
                            <i class="icon-Layout-4-blocks"><span class="path1"></span><span
                                    class="path2"></span></i>
                            <span>DASHBOARD</span>
                            <span class="pull-right-container"></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('anggotaUser.index') }}">
                            <i class="cc LBC"><span class="path1"></span><span
                                    class="path2"></span></i>
                            <span>ANGGOTA</span>
                            <span class="pull-right-container"></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pengurusUser.index') }}">
                            <i class="cc SNRG-alt"><span class="path1"></span><span
                                    class="path2"></span></i>
                            <span>PENGURUS</span>
                            <span class="pull-right-container"></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('kegiatanUser.index') }}">
                            <i class="cc XRP-alt"><span class="path1"></span><span
                                    class="path2"></span></i>
                            <span>KEGIATAN</span>
                            <span class="pull-right-container"></span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </section>
</aside>
