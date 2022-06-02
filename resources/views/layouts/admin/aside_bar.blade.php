<aside
class="col-12 col-md-2 col-xl-2 p-0 bg-dark flex-shrink-1"
id="side-nav"
>
<nav
  class="
    navbar navbar-expand-md navbar-dark
    bd-dark
    flex-md-column flex-row
    py-2
    sticky-top
  "
  id="sidebar"
>
  <button
    type="button"
    class="navbar-toggler border-0 order-1"
    data-bs-toggle="collapse"
    data-bs-target="#nav"
    aria-controls="nav"
    aria-expanded="false"
    aria-label="Toggle Navigation"
  >
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse prder-last" id="nav">
    <ul class="navbar-nav flex-column w-100 navbar-text">
      <li class="nav-item admin-dashboard-title mt-3">
        <a href="{{route('admin.dashboard')}}" class="nav-link active"
          ><i class="fas fa-tachometer-alt me-2"></i>Admin Dashboard</a
        >
      </li>
      <li class="nav-item plain-text-navbar mt-4 mb-2">
        <p>Edit Pages and Content</p>
      </li>
      <li class="nav-item">
        <a href="{{ route('admin.buyers')}}" class="nav-link active"
          ><i class="fas fa-book nav-courses  me-2"></i>All Contract Buyers</a
        >
      </li>
      <li class="nav-item">
        <a href="{{route('admin.hero-section')}}" class="nav-link active"
          ><i class="fas fa-book nav-courses  me-2"></i>Edit Hero Section</a
        >
      </li>
      
    </ul>
  </div>
</nav>
</aside>