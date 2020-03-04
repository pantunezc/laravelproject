<!-- Top Bar Start -->
<div class="topbar   bg-cmsbase ">
    <nav class="topbar-main ">
        <div class="topbar-left ">
            <a href="{{route('home')}}" class="logo-custom p-0">
                    <img src="{{asset('assets_theme/images/digital.png')}}" alt="{{ config('app.name', 'CMSBase') }}"  >
            </a>
        </div>
                    <ul class="navigation-menu"  id="navigation">
                        <li class="menu-item"><a href="{{route('home')}}"><i class="dripicons-home"></i>  </a></li>

                        <li class="has-submenu">
                            <a href="{{route('canals.index')}}">
                                <i class="dripicons-document"></i>
                                <span>Canal</span>
                            </a>
                            <ul class="submenu">
                                <li class="text-muted  text-center">- Canal -</li>
                            </ul><!--end submenu-->
                        </li><!--end has-submenu-->

                        <li class="has-submenu">
                            <a href="{{route('programes.index')}}">
                                <i class="dripicons-document"></i>
                                <span>Programa</span>
                            </a>
                            <ul class="submenu">
                                <li class="text-muted  text-center">- Programa -</li>                                
                            </ul><!--end submenu-->
                        </li><!--end has-submenu-->


                        <li class="has-submenu float-right">  <a href="#">
                            <i class="dripicons-user"></i> {{ Auth::user()->name }} </a>
                            <ul class="submenu">
                                    <li><a href="#"><i class="dripicons-gear"></i> Tus datos</a></li>
                                    <li><a  href="{{ route('logout') }}"><i class="dripicons-exit text-muted mr-2"></i> Cerrar sesión</a></li>
                            </ul><!--end submenu-->
                        </li><!--end has-submenu-->

                        


                    </ul><!-- End navigation menu -->

        <ul class="list-unstyled topbar-nav float-right mb-0">


            <li class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle nav-link" id="mobileToggle">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </li> <!--end menu item-->


        </ul><!--end topbar-nav-->




    </nav>

    <!-- end navbar-->

</div>
<!-- Top Bar End -->
