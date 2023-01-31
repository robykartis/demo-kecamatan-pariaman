<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="content-header bg-primary">
        <!-- Logo -->

        <img height="50px" src="{{ asset('vendor/logosiap.png') }}" srcset="{{ asset('vendor/logosiap.png') }}"
            alt="" />

        <!-- END Logo -->

        <!-- Options -->
        <div>
            <!-- Close Sidebar, Visible only on mobile screens -->
            <a class="d-lg-none text-white ms-2" data-toggle="layout" data-action="sidebar_close"
                href="javascript:void(0)">
                <i class="fa fa-times-circle"></i>
            </a>
            <!-- END Close Sidebar -->
        </div>
        <!-- END Options -->
    </div>
    <!-- END Side Header -->

    <!-- Sidebar Scrolling -->
    <div class="js-sidebar-scroll">
        <!-- User Info -->

        <!-- END User Info -->

        <!-- Side Navigation -->
        <div class="content-side content-side-full">
            <ul class="nav-main">
                <li class="nav-main-item">
                    <a class="nav-main-link {{ \Request::route()->getName() == 'kec.utara' ? 'active' : '' }}"
                        href="{{ route('kec.utara') }}">
                        <i class="nav-main-link-icon fa fa-compass"></i>
                        <span class="nav-main-link-name">Home</span>
                    </a>
                </li>

                <li class="nav-main-heading">More</li>

                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                        aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-folder-open"></i>
                        <span class="nav-main-link-name">Rumah Data</span>
                    </a>
                    <ul class="nav-main-submenu">

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'lahan.utara' ? 'active' : '' }}"
                                href="{{ route('lahan.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Lahan</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'jalan.utara' ? 'active' : '' }}"
                                href="{{ route('jalan.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Akses Jalan</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'bangunan.utara' ? 'active' : '' }}"
                                href="{{ route('bangunan.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Bangunan</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'saranaumum.utara' ? 'active' : '' }}"
                                href="{{ route('saranaumum.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Sarana Umum</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'wirausaha.utara' ? 'active' : '' }}"
                                href="{{ route('wirausaha.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Wirausaha</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'rmhisi.utara' ? 'active' : '' }}"
                                href="{{ route('rmhisi.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Rumah Tinggal Isi</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'rmhkosong.utara' ? 'active' : '' }}"
                                href="{{ route('rmhkosong.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Rumah Tinggal Kosong</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'sptpbb.utara' ? 'active' : '' }}"
                                href="{{ route('sptpbb.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">SPPT PBB</span>
                            </a>
                        </li>



                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'kependudukan.utara' ? 'active' : '' }}"
                                href="{{ route('kependudukan.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Kependudukan</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'umur.utara' ? 'active' : '' }}"
                                href="{{ route('umur.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Umur</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'meninggal.utara' ? 'active' : '' }}"
                                href="{{ route('meninggal.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Meninggal</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'kesehatan.utara' ? 'active' : '' }}"
                                href="{{ route('kesehatan.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Kesehatan</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'pendidikan.utara' ? 'active' : '' }}"
                                href="{{ route('pendidikan.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Pendidikan</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'beapendidikan.utara' ? 'active' : '' }}"
                                href="{{ route('beapendidikan.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Beasiswa Pendidikan</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'bantuansosial.utara' ? 'active' : '' }}"
                                href="{{ route('bantuansosial.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Bantuan Sosial</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'pkk.utara' ? 'active' : '' }}"
                                href="{{ route('pkk.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Dasawisma PKK</span>
                            </a>
                        </li>



                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'posyandu.utara' ? 'active' : '' }}"
                                href="{{ route('posyandu.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Posyandu</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                        aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-folder-open"></i>
                        <span class="nav-main-link-name">Data Statistik</span>
                    </a>
                    <ul class="nav-main-submenu">

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'stklahan.utara' ? 'active' : '' }}"
                                href="{{ route('stklahan.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Penggunaan Lahan</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'stkjalan.utara' ? 'active' : '' }}"
                                href="{{ route('stkjalan.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Akses Jalan</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'stkbangunan.utara' ? 'active' : '' }}"
                                href="{{ route('stkbangunan.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Bangunan</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'stkwirausaha.utara' ? 'active' : '' }}"
                                href="{{ route('stkwirausaha.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Wirausaha</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'stkkependudukan.utara' ? 'active' : '' }}"
                                href="{{ route('stkkependudukan.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Kependudukan</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'stkpendidikan.utara' ? 'active' : '' }}"
                                href="{{ route('stkpendidikan.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Pendidikan</span>
                            </a>
                        </li>



                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'stkbantuansosial.utara' ? 'active' : '' }}"
                                href="{{ route('stkbantuansosial.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Bantuan Sosial</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link {{ \Request::route()->getName() == 'desa.utara' ? 'active' : '' }}"
                        href="{{ route('desa.utara') }}">
                        <i class="nav-main-link-icon fa fa-file-lines"></i>
                        <span class="nav-main-link-name">Desa</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END Side Navigation -->
    </div>
    <!-- END Sidebar Scrolling -->
</nav>
<!-- END Sidebar -->

<!-- Header -->
<header id="page-header">
    <!-- Header Content -->
    <div class="content-header">
        <!-- Left Section -->
        <div class="d-flex align-items-center">
            <!-- Logo -->
            <img height="50px" src="{{ asset('vendor/logosiap.png') }}"
                srcset="{{ asset('vendor/logosiap.png') }}" alt="" />
            <!-- END Logo -->

            <!-- Menu -->
            <ul class="nav-main nav-main-horizontal nav-main-hover d-none d-lg-block ms-3">
                <li class="nav-main-item">
                    <a class="nav-main-link {{ \Request::route()->getName() == 'kec.utara' ? 'active' : '' }}"
                        href="{{ route('kec.utara') }}">
                        <i class="nav-main-link-icon fa fa-compass"></i>
                        <span class="nav-main-link-name">Home</span>
                    </a>
                </li>
                <li class="nav-main-heading">More</li>





                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                        aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-folder-open"></i>
                        <span class="nav-main-link-name">Rumah Data</span>
                    </a>
                    <ul class="nav-main-submenu">

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'lahan.utara' ? 'active' : '' }}"
                                href="{{ route('lahan.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Lahan</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'jalan.utara' ? 'active' : '' }}"
                                href="{{ route('jalan.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Akses Jalan</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'bangunan.utara' ? 'active' : '' }}"
                                href="{{ route('bangunan.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Bangunan</span>
                            </a>
                        </li>


                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'saranaumum.utara' ? 'active' : '' }}"
                                href="{{ route('saranaumum.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Sarana Umum</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'wirausaha.utara' ? 'active' : '' }}"
                                href="{{ route('wirausaha.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Wirausaha</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'rmhisi.utara' ? 'active' : '' }}"
                                href="{{ route('rmhisi.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Rumah Tinggal Isi</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'rmhkosong.utara' ? 'active' : '' }}"
                                href="{{ route('rmhkosong.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Rumah Tinggal Kosong</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'sptpbb.utara' ? 'active' : '' }}"
                                href="{{ route('sptpbb.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">SPPT PBB</span>
                            </a>
                        </li>



                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'kependudukan.utara' ? 'active' : '' }}"
                                href="{{ route('kependudukan.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Kependudukan</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'umur.utara' ? 'active' : '' }}"
                                href="{{ route('umur.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Umur</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'meninggal.utara' ? 'active' : '' }}"
                                href="{{ route('meninggal.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Meninggal</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'kesehatan.utara' ? 'active' : '' }}"
                                href="{{ route('kesehatan.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Kesehatan</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'pendidikan.utara' ? 'active' : '' }}"
                                href="{{ route('pendidikan.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Pendidikan</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'beapendidikan.utara' ? 'active' : '' }}"
                                href="{{ route('beapendidikan.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Beasiswa Pendidikan</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'bantuansosial.utara' ? 'active' : '' }}"
                                href="{{ route('bantuansosial.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Bantuan Sosial</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'pkk.utara' ? 'active' : '' }}"
                                href="{{ route('pkk.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Dasawisma PKK</span>
                            </a>
                        </li>



                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'posyandu.utara' ? 'active' : '' }}"
                                href="{{ route('posyandu.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Posyandu</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                        aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-folder-open"></i>
                        <span class="nav-main-link-name">Statistik</span>
                    </a>
                    <ul class="nav-main-submenu">

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'stklahan.utara' ? 'active' : '' }}"
                                href="{{ route('stklahan.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Penggunaan Lahan</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'stkjalan.utara' ? 'active' : '' }}"
                                href="{{ route('stkjalan.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Akses Jalan</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'stkbangunan.utara' ? 'active' : '' }}"
                                href="{{ route('stkbangunan.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Bangunan</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'stkwirausaha.utara' ? 'active' : '' }}"
                                href="{{ route('stkwirausaha.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Wirausaha</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'stkkependudukan.utara' ? 'active' : '' }}"
                                href="{{ route('stkkependudukan.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Kependudukan</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'stkpendidikan.utara' ? 'active' : '' }}"
                                href="{{ route('stkpendidikan.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Pendidikan</span>
                            </a>
                        </li>



                        <li class="nav-main-item">
                            <a class="nav-main-link {{ \Request::route()->getName() == 'stkbantuansosial.utara' ? 'active' : '' }}"
                                href="{{ route('stkbantuansosial.utara') }}">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Bantuan Sosial</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link {{ \Request::route()->getName() == 'desa.utara' ? 'active' : '' }}"
                        href="{{ route('desa.utara') }}">
                        <i class="nav-main-link-icon fa fa-file-lines"></i>
                        <span class="nav-main-link-name">Desa / Kelurahan</span>
                    </a>
                </li>
            </ul>
            <!-- END Menu -->
        </div>
        <!-- END Left Section -->



        <!-- Right Section -->
        <div>

            <!-- Notifications Dropdown -->


            {{-- <div class="d-inline-block">

                <a href="{{ route('adkec.utara') }}" type="button" class="btn btn-alt-secondary"
                    id="page-header-notifications-dropdown">
                    Dashboard
                </a>

            </div> --}}

            <!-- END Notifications Dropdown -->

            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-alt-secondary d-lg-none" data-toggle="layout"
                data-action="sidebar_toggle">
                <i class="fa fa-fw fa-bars"></i>
            </button>
            <!-- END Toggle Sidebar -->
        </div>
        <!-- END Right Section -->
    </div>
    <!-- END Header Content -->

    <!-- Header Search -->
    <div id="page-header-search" class="overlay-header bg-primary">
        <div class="content-header">
            <form class="w-100" action="be_pages_generic_search.html" method="POST">
                <div class="input-group">
                    <button type="button" class="btn btn-primary" data-toggle="layout"
                        data-action="header_search_off">
                        <i class="fa fa-fw fa-times-circle"></i>
                    </button>
                    <input type="text" class="form-control border-0" placeholder="Search your company.."
                        id="page-header-search-input" name="page-header-search-input">
                </div>
            </form>
        </div>
    </div>
    <!-- END Header Search -->

    <!-- Header Loader -->
    <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
    <div id="page-header-loader" class="overlay-header bg-primary-darker">
        <div class="content-header">
            <div class="w-100 text-center">
                <i class="fa fa-fw fa-2x fa-sun fa-spin text-white"></i>
            </div>
        </div>
    </div>
    <!-- END Header Loader -->
</header>
<!-- END Header -->
