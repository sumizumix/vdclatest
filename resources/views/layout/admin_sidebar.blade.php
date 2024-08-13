<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="{{ route('dashboard') }}" class="text-nowrap logo-img">
                <img src="{{ asset('/assets/images/logos/favicon.png') }}" width="150" alt="" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"
                        href="{{ route('admin.dashboard') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->routeIs('/') ? 'active' : '' }}" href="{{ url('/') }}"
                        aria-expanded="false">
                        <span>
                            <i class="ti ti-world"></i>
                        </span>
                        <span class="hide-menu">Go To HomePage</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">GENERAL SETTINGS</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->routeIs('admin.auth.about.index') ? 'active' : '' }}"
                        href="{{ route('admin.auth.about.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-file-info"></i>
                        </span>
                        <span class="hide-menu">About Us</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->routeIs(['admin.auth.location.index', 'admin.auth.location.create', 'admin.location.edit']) ? 'active' : '' }}"
                        href="{{ route('admin.auth.location.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-location"></i>
                        </span>
                        <span class="hide-menu">Locations</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->routeIs(['admin.auth.award.index','admin.auth.award.create', 'admin.award.edit']) ? 'active' : '' }}"
                        href="{{ route('admin.auth.award.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-award"></i>
                        </span>
                        <span class="hide-menu">Awards</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->routeIs(['admin.auth.hospital.index', 'admin.auth.hospital.create', 'admin.hospital.edit']) ? 'active' : '' }}"
                        href="{{ route('admin.auth.hospital.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-building-hospital"></i>
                        </span>
                        <span class="hide-menu">Hospital</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->routeIs(['admin.auth.service.index', 'admin.auth.service.create', 'admin.service.edit']) ? 'active' : '' }}"
                        href="{{ route('admin.auth.service.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-flask"></i>
                        </span>
                        <span class="hide-menu">Services</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->routeIs(['admin.auth.testimonial.index', 'admin.auth.testimonial.create', 'admin.testimonial.edit']) ? 'active' : '' }}"
                        href="{{ route('admin.auth.testimonial.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-quote"></i>
                        </span>
                        <span class="hide-menu">Testimonials</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->routeIs(['admin.auth.department.index','admin.auth.department.create', 'admin.department.edit']) ? 'active' : '' }}"
                        href="{{ route('admin.auth.department.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-vector-bezier"></i> </span>
                        <span class="hide-menu">Department</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->routeIs(['admin.auth.team.index', 'admin.auth.team.create', 'admin.team.edit']) ? 'active' : '' }}"
                        href="{{ route('admin.auth.team.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-users"></i>
                        </span>
                        <span class="hide-menu">Members</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->routeIs(['admin.auth.test.index', 'admin.auth.test.create', 'admin.test.edit']) ? 'active' : '' }}"
                        href="{{ route('admin.auth.test.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-test-pipe"></i> </span>
                        <span class="hide-menu">Add Tests</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->routeIs(['admin.auth.doctor.index', 'admin.auth.doctor.create', 'admin.doctor.edit']) ? 'active' : '' }}"
                        href="{{ route('admin.auth.doctor.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-stethoscope"></i> </span>
                        <span class="hide-menu">Add Doctors</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->routeIs(['admin.auth.center.index', 'admin.auth.center.create', 'admin.center.edit']) ? 'active' : '' }}"
                        href="{{ route('admin.auth.center.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-building-hospital"></i> </span>
                        <span class="hide-menu">Center</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Facilities</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->routeIs(['admin.product.index', 'admin.auth.product.create', 'admin.product.edit']) ? 'active' : '' }}"
                        href="{{ route('admin.product.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-package"></i>
                        </span>
                        <span class="hide-menu">Packages</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->routeIs(['admin.auth.report.index','admin.auth.report.create', 'admin.report.edit','admin.auth.report.search']) ? 'active' : '' }}"
                        href="{{ route('admin.auth.report.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-report-analytics"></i>
                        </span>
                        <span class="hide-menu">Upload Result</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->routeIs('admin.auth.viewprescription.index') ? 'active' : '' }}"
                        href="{{ route('admin.auth.viewprescription.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-file-description"></i> </span>
                        <span class="hide-menu">View Prescription</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->routeIs(['admin.feedback.index']) ? 'active' : '' }}"
                        href="{{ route('admin.feedback.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-message-2"></i>
                        </span>
                        <span class="hide-menu">Feedback</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->routeIs(['admin.contact.index']) ? 'active' : '' }}"
                        href="{{ route('admin.contact.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-message-2"></i>
                           
                        </span>
                        <span class="hide-menu">User Contact</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->routeIs('admin.auth.appointement.index') ? 'active' : '' }}"
                        href="{{ route('admin.auth.appointement.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-test-pipe-2"></i>
                        </span>
                        <span class="hide-menu">Home Sample Collection </span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->routeIs('admin.auth.ctscan.index') ? 'active' : '' }}"
                        href="{{ route('admin.auth.ctscan.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-scan"></i>
                        </span>
                        <span class="hide-menu">CT Scan Bookings</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->routeIs('admin.auth.booking.cartindex') ? 'active' : '' }}"
                        href="{{ route('admin.auth.booking.cartindex') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-shopping-cart"></i> </span>
                        <span class="hide-menu">View cart Bookings</span>
                    </a>
                </li>
                <!-- <li class="sidebar-item">
            <a class="sidebar-link {{ request()->routeIs('admin.auth.testbooking.index') ? 'active' : '' }}" href="{{ route('admin.auth.testbooking.index') }}" aria-expanded="false">
                <span>
                <i class="fa-solid fa-vial-circle-check"></i>                </span>
                <span class="hide-menu">View  Test Bookings</span>
            </a>
        </li> -->

            </ul>
        </nav>

        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
