<nav class="navbar navbar-expand-lg navbar-light navbar-custom p-3 mb-3">
  <div class="container-fluid p-0">

    <!-- MOBILE MENU TOGGLE -->
    
        <button class="btn btn-outline-secondary " id="toggleSidebar">
        ☰
    </button>
    

    <!-- Search -->
    

    <!-- Right Icons -->
    <ul class="navbar-nav ms-auto align-items-center">
      <li class="nav-item dropdown me-3">
         <span>Phone :</span> <a href="tel:+919789320532" class="phone-number">+919789320532</a>
      </li>
      <li class="nav-item dropdown me-3">
        <span>Email :</span><a href="mailto:pvmautomation@gmail.com" class="phone-number">pvmautomation@gmail.com</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle fw-semibold" data-bs-toggle="dropdown" href="#">
          <img src="{{ asset('assets/img/new-images/logo.webp') }}" class="rounded-circle me-1" width="32">

          Logout
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li><a class="dropdown-item" href="#">Change Password</a></li>
          <li><form method="POST" action="#">
              @csrf
              <button type="submit" class="dropdown-item text-danger">Logout</button>
            </form>
        </li>
        </ul>
      </li>
    </ul>

  </div>
</nav>
