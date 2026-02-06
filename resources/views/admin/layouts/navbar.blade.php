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

      <li>
        <a href="#"
          class="dropdown-item"
          onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      </li>
    </ul>

  </div>
</nav>
