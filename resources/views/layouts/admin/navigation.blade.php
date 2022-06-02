<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark sticky-top">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="#">ACE STRATEGY</a>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
      <li class="nav-item dropdown">
        <a
          class="nav-link dropdown-toggle"
          id="navbarDropdown"
          href="#"
          role="button"
          data-bs-toggle="dropdown"
          aria-expanded="false"
          ><i class="fas fa-user fa-fw"></i
        ></a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdown"
        >
            <li>
                <form action="{{route('logout')}}" method="POST" >
                    @csrf
                    <button class="dropdown-item">Logout</button>
              </form>
            </li>
        </ul>
      </li>
    </ul>
  </nav>