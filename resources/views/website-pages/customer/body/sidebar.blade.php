<aside class="main-sidebar sidebar-dark-lightblue elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('customer.dashboard') }}" class="brand-link">
        <img src="../assets/dist/img/woodify-fav.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-dark">WOODIFY</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @php
                    $id = Auth::user()->id;
                    $profileData = App\Models\User::find($id);
                @endphp

                <img class="img-circle elevation-2" style="width: 35px;height: 35px;"
                    src="{{ !empty($profileData->photo) ? url('upload/customer_images/' . $profileData->photo) : url('upload/no_image.png') }}"
                    alt="Profile Picture">
            </div>
            <div class="info">
                <a href="{{ route('customer.profile') }}" class="d-block"><span style="font-size: medium">
                        {{ Auth::user()->name }}</span></a>
            </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
                <li class="nav-header mb-2">MAIN</li>

                <li class="nav-item">
                    <a href="{{ route('customer.dashboard') }}" class="nav-link {{ Route::is('customer.dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-home"></i>
                        <p>
                            Overview
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('cart')}}" class="nav-link ">
                        <i class="nav-icon fa fa-shopping-cart"></i>
                        <p>
                            My Cart
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('past.orders') }}"
                        class="nav-link {{ Route::is('past.orders') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-shopping-basket"></i>
                        <p>
                            All Orders
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('my.inquires') }}"
                        class="nav-link {{ Route::is('my.inquires') ? 'active' : '' }}">
                        <i class="nav-icon far fa-comment-alt"></i>
                        <p>
                            My Inquires
                        </p>
                    </a>
                </li>




                <li class="nav-header mt-3 mb-2">ACTIONS</li>
                <li class="nav-item">
                    <a href="{{ route('customer.profile') }}" class="nav-link">
                        <i class="nav-icon fa fa-user-circle"></i>
                        <p>
                            Profile
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('customer.logout') }}" class="nav-link">
                        <i class="nav-icon fa fa-power-off"></i>
                        <p>
                            Log Out
                        </p>
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
