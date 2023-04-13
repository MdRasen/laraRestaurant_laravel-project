<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">laraResta</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('admin/dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - About -->
    <li class="nav-item {{ Request::is('admin/view-about') || Request::is('admin/edit-about') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.view-about') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>About</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li
        class="nav-item {{ Request::is('admin/add-service') || Request::is('admin/view-service') || Request::is('admin/edit-service/*') ? 'collapsed active' : 'collapsed' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse1"
            aria-expanded="true" aria-controls="collapse1">
            <i class="fa fa-list"></i>
            <span>Services</span>
        </a>
        <div id="collapse1"
            class="{{ Request::is('admin/add-service') || Request::is('admin/view-service') || Request::is('admin/edit-service/*') ? 'collapse show' : 'collapse' }}"
            aria-labelledby="heading1" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.add-service') }}">Add Service</a>
                <a class="collapse-item" href="{{ route('admin.view-service') }}">View Service</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li
        class="nav-item {{ Request::is('admin/add-menu') || Request::is('admin/view-menu') || Request::is('admin/edit-menu/*') ? 'collapsed active' : 'collapsed' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse2"
            aria-expanded="true" aria-controls="collapse2">
            <i class="fa fa-solid fa-utensils"></i>
            <span>Menus</span>
        </a>
        <div id="collapse2"
            class="{{ Request::is('admin/add-menu') || Request::is('admin/view-menu') || Request::is('admin/edit-menu/*') ? 'collapse show' : 'collapse' }}"
            aria-labelledby="heading2" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.add-menu') }}">Add Menu</a>
                <a class="collapse-item" href="{{ route('admin.view-menu') }}">View Menu</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li
        class="nav-item {{ Request::is('admin/add-reservation') || Request::is('admin/view-reservation') || Request::is('admin/edit-reservation/*') ? 'collapsed active' : 'collapsed' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3"
            aria-expanded="true" aria-controls="collapse3">
            <i class="fa fa-solid fa-bookmark"></i>
            <span>Reservations</span>
        </a>
        <div id="collapse3"
            class="{{ Request::is('admin/add-reservation') || Request::is('admin/view-reservation') || Request::is('admin/edit-reservation/*') ? 'collapse show' : 'collapse' }}"
            aria-labelledby="heading3" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.add-reservation') }}">Add Reservation</a>
                <a class="collapse-item" href="{{ route('admin.view-reservation') }}">View Reservation</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li
        class="nav-item {{ Request::is('admin/add-team') || Request::is('admin/view-team') || Request::is('admin/edit-team/*') ? 'collapsed active' : 'collapsed' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse4"
            aria-expanded="true" aria-controls="collapse4">
            <i class="fa fa-users"></i>
            <span>Teams</span>
        </a>
        <div id="collapse4"
            class="{{ Request::is('admin/add-team') || Request::is('admin/view-team') || Request::is('admin/edit-team/*') ? 'collapse show' : 'collapse' }}"
            aria-labelledby="heading3" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.add-team') }}">Add Team</a>
                <a class="collapse-item" href="{{ route('admin.view-team') }}">View Team</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li
        class="nav-item {{ Request::is('admin/add-testimonial') || Request::is('admin/view-testimonial') || Request::is('admin/edit-testimonial/*') ? 'collapsed active' : 'collapsed' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse5"
            aria-expanded="true" aria-controls="collapse5">
            <i class="fa fa-star"></i>
            <span>Testimonials</span>
        </a>
        <div id="collapse5"
            class="{{ Request::is('admin/add-testimonial') || Request::is('admin/view-testimonial') || Request::is('admin/edit-testimonial/*') ? 'collapse show' : 'collapse' }}"
            aria-labelledby="heading5" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.add-testimonial') }}">Add Testimonial</a>
                <a class="collapse-item" href="{{ route('admin.view-testimonial') }}">View Testimonial</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Contact -->
    <li class="nav-item {{ Request::is('admin/view-contact') || Request::is('admin/edit-contact') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.view-contact') }}">
            <i class="fas fa-fw fa-info"></i>
            <span>Contact</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
