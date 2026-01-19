<style>
 #sidebar {
    min-height: 100vh;
    width: 260px;
    background: linear-gradient(180deg, #ffffff 0%, #f3f6fb 100%);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    color: #1f2937;
    box-shadow: 10px 0 35px rgba(0, 0, 0, 0.12);
    border-right: 1px solid rgba(0,0,0,0.05);
}

/* ================= HEADER ================= */
.sidebar-header {
    position: relative;
    padding-bottom: 18px;
}

.sidebar-logo {
    width: 130px;
}

.sidebar-header::after {
    content: '';
    display: block;
    width: 70%;
    height: 1px;
    background: linear-gradient(to right, transparent, #d1d5db, transparent);
    margin: 18px auto 0;
}

/* Toggle */
.sidebar-toggle {
    position: absolute;
    top: 0;
    right: 0;
    background: #f1f5f9;
    color: #374151;
    border-radius: 8px;
    padding: 6px 8px;
    border: none;
    transition: 0.3s;
}

.sidebar-toggle:hover {
    background: #e5e7eb;
}

/* ================= SECTION TITLE ================= */
.section-block small {
    font-size: 11px;
    letter-spacing: 2px;
    font-weight: 700;
    color: #9ca3af;
}

/* ================= NAV LINKS ================= */
.nav-link {
    color: #374151;
    padding: 14px 18px;
    border-radius: 14px;
    display: flex;
    align-items: center;
    gap: 12px;
    transition: all 0.35s ease;
    font-weight: 600;
}

.nav-link span:first-child {
    font-size: 20px;
}

/* Hover */
.nav-link:hover {
    background: linear-gradient(135deg, #e53731, #ff6b63);
    color: #ffffff;
    transform: translateX(6px);
}

/* Active */
.nav-link.active {
    background: linear-gradient(135deg, #e53731, #ff6b63);
    color: #ffffff;
    box-shadow: 0 10px 25px rgb(255, 255, 255);
}

/* ================= MOBILE CLOSE ================= */
#closeSidebar {
    background: #f3f4f6;
    border: none;
    border-radius: 8px;
    color: #374151;
}

/* ================= COLLAPSED MODE ================= */
.sidebar.collapsed {
    width: 80px;
}

.sidebar.collapsed .link-text,
.sidebar.collapsed .section-block small {
    display: none;
}

.sidebar.collapsed .sidebar-logo {
    width: 45px;
}
</style>
<div id="sidebar" class="sidebar p-3">

    <!-- Logo -->
    <div class="sidebar-header text-center mb-4">
        <img class="sidebar-logo mb-2"
             src="{{ asset('assets/images/new-images/logo.png') }}" alt="PVM">

        <button id="sidebarToggle" class="sidebar-toggle">
            <i class="bx bx-menu"></i>
        </button>
    </div>

    <button class="btn d-lg-none mb-3" id="closeSidebar" style="float:right;">✖</button>

    <!-- MENU -->
    <div class="mb-4 section-block">
        <small>MENU</small>
        <ul class="nav flex-column mt-3">
            <li class="nav-item mb-2">
                <a href="{{ route('admin.dashboard') }}"
                   class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    🏠 <span class="link-text">Dashboard</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- COMPONENTS -->
    <div class="section-block">
        <small>COMPONENTS</small>
        <ul class="nav flex-column mt-3">
            <li class="nav-item mb-2">
                <a href="{{ route('admin.categories') }}" class="nav-link">
                    📂 <span class="link-text">Categories</span>
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="{{ route('admin.products') }}" class="nav-link">
                    📦 <span class="link-text">Products</span>
                </a>
            </li>
        </ul>
    </div>

</div>

