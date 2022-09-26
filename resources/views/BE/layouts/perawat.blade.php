

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="assets/images/logo/logo.png" alt="User" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item  ">
                            <a href="{{ route('auth.register') }}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Halaman Utama</span>
                            </a>
                        </li>            


                        <li class="sidebar-item  ">
                            <a href="{{ route('petugas.rawat_inap_perawat') }}" class='sidebar-link'>
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Pemeriksaan</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Surat Pengantar</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Laporan</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>LogOut</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
               @yield('content')
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        
                    </div>
                    <div class="float-end">
                        
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{asset ('mazer-main/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset ('mazer-main/dist/assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset ('mazer-main/dist/assets/js/main.js')}}"></script>
</body>

</html>