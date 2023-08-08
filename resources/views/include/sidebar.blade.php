
    <ul class="sidebar-nav mt-5" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link active" href="{{url('/admin-panel/dashboard')}}" class="{{ activeMenu('/admin-panel/dashboard')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <!--User management-->
        <li class="nav-item">
            <a class="nav-link collapsed mt-3" data-bs-target="#icons-user" data-toggle="tab" data-bs-toggle="collapse" href="#">
                <i class="bi bi-person"></i><span>User Management</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-user" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{url('admin-panel/user/add-user')}}" class="{{ activeMenu('admin-panel/user/add-user')}}">
                        <i class="bi bi-circle"></i><span>Add User</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('admin-panel/user/view-user')}}" class="{{ activeMenu('admin-panel/user/view-user')}}">
                        <i class="bi bi-circle"></i><span>View User</span>
                    </a>
                </li>

            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed mt-3" data-bs-target="#components-menu" data-toggle="tab" data-bs-toggle="collapse" href="#">
                <i class="bi bi-list"></i><span>Menu</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-menu" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{url('admin-panel/menu/mainmenu')}}" style="{{ request()->is('menu/mainmenu') ?  'color: #F9A82D;' : '' }}" class="{{ activeMenu('admin-panel/menu/mainmenu')}}">
                        <i class="bi bi-circle"></i><span>Add Menu</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('admin-panel/menu/viewmainmenu')}}" style="{{ request()->is('menu/viewmainmenu') ?  'color: #F9A82D;' : '' }}" class="{{ activeMenu('admin-panel/menu/viewmainmenu')}}">
                        <i class="bi bi-circle"></i><span>View Menu</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('admin-panel/menu/submenu')}}" class="{{ activeMenu('admin-panel/menu/submenu')}}">
                        <i class="bi bi-circle"></i><span>Add Sub-Menu</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('admin-panel/menu/viewsubmenu')}}" class="{{ activeMenu('admin-panel/menu/viewsubmenu')}}">
                        <i class="bi bi-circle"></i><span>View Sub-Menu</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Components Main menu -->
        <li class="nav-item">
            <a class="nav-link collapsed mt-3" data-bs-target="#components-page" data-toggle="tab" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Pages</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-page" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{url('admin-panel/Page/add-page')}}"  style="{{ request()->is('page/addpage') ?  'color: #F9A82D;' : '' }}" class="{{ activeMenu('admin-panel/Page/add-page')}}">
                        <i class="bi bi-circle"></i><span>Add Page</span>
                    </a>
                </li>
                <li>
                    <a href="components-accordion.html">
                        <i class="bi bi-circle"></i><span>View Page</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Components Page -->



        <li class="nav-item">
            <a class="nav-link collapsed mt-3" data-bs-target="#forms-gallery" data-toggle="tab" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Gallery</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-gallery" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{url('admin-panel/gallery/view-category')}}" class="{{ activeMenu('admin-panel/gallery/view-category')}}">
                        <i class="bi bi-circle"></i><span>Category</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('admin-panel/gallery/add-images')}}" class="{{ activeMenu('admin-panel/gallery/add-images')}}">
                        <i class="bi bi-circle"></i><span>Add Image</span>
                    </a>
                </li>
                <li>
                    <a href="forms-layouts.html">
                        <i class="bi bi-circle"></i><span>View Image</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Forms Nav -->
        <!--start menu -->


        <li class="nav-item">
            <a class="nav-link collapsed mt-3" data-bs-target="#tables-directory" data-toggle="tab" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Officers Directory</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-directory" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('create-category')}}">
                        <i class="bi bi-circle"></i><span>Add Directory</span>
                    </a>
                </li>
                <li>
                    <a href="tables-data.html">
                        <i class="bi bi-circle"></i><span>View Directory</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed mt-3" data-bs-target="#charts-notice" data-toggle="tab" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i><span>Notices/Circulars</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-notice" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="charts-chartjs.html">
                        <i class="bi bi-circle"></i><span>Add Notice</span>
                    </a>
                </li>
                <li>
                    <a href="charts-apexcharts.html">
                        <i class="bi bi-circle"></i><span>Add Circular</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Charts Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed mt-3" data-bs-target="#icons-holiday" data-toggle="tab" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Holiday List</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-holiday" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="icons-bootstrap.html">
                        <i class="bi bi-circle"></i><span>Add Holiday List</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Icons Nav -->

    </ul>


