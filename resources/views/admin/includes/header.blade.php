



<!-- Dashboard -->
<div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
    <!-- Vertical Navbar -->
    <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg" id="navbarVertical">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="{{route('admin.dashboard')}}">
                <h3 class="text-success"><span class="text-info">Auramans </span>Fashion</h3> 
            </a>
            <!-- User menu (mobile) -->
            <div class="navbar-user d-lg-none">
                <!-- Dropdown -->
                <div class="dropdown">
                    <!-- Toggle -->
                    <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar-parent-child">
                            <img alt="Image Placeholder" src="https://img.icons8.com/bubbles/100/000000/user.png" class="avatar avatar- rounded-circle">
                            <span class="avatar-child avatar-badge bg-success"></span>
                        </div>
                    </a>
                    <!-- Menu -->
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarAvatar">
                        <a href="#" class="dropdown-item">Profile</a>
                        <a href="#" class="dropdown-item">Settings</a>
                        <a href="#" class="dropdown-item">Billing</a>
                        <hr class="dropdown-divider">
                        <a href="/logout" onclick="return confirm('Are you sure you want to logout?')" class="dropdown-item">Logout</a>
                    </div>
                </div>
            </div>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidebarCollapse">
                <!-- Navigation -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.dashboardHome')}}">
                            <i class="bi bi-house-door"></i> Dashboard
                        </a>
                    </li>

                    {{-- product --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.product.productHome')}}">
                            <i class="bi bi-box"></i> Products
                        </a>
                    </li>

                    {{-- add product --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.product.add')}}">
                            <i class="bi bi-plus"></i> Add Product
                        </a>
                    </li>

                    {{-- order --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.order.orderHome')}}">
                            <i class="bi bi-cart"></i> Orders
                        </a>
                    </li>

                    {{-- message --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.message.messageHome')}}">
                            <i class="bi bi-mailbox"></i> Messages
                        </a>
                    </li>

                    {{-- profile --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.profile')}}">
                            <i class="bi bi-person"></i> Profile
                        </a>
                    </li>


                    {{-- settings --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.settings')}}">
                            <i class="bi bi-gear"></i> Settings
                        </a>
                    </li>


                </ul>

            </div>
        </div>
    </nav>