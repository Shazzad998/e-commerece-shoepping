<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="{{ route('home') }}">Stisla</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ route('home') }}">St</a>
      </div>
      <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
          <li class="active"><a class="nav-link" href=""><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
          {{-- <li class="nav-item dropdown active">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="index-0.html">General Dashboard</a></li>
              <li class="active"><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
            </ul>
          </li> --}}

          <li class=""><a class="nav-link" href="{{ route('admin.categories.index') }}"><i class="fas fa-fire"></i> <span>Categories</span></a></li>

          <li class=""><a class="nav-link" href="{{ route('admin.products.index') }}"><i class="fas fa-fire"></i> <span>Products</span></a></li>

          <li class=""><a class="nav-link" href="{{ route('admin.brands.index') }}"><i class="fas fa-fire"></i> <span>Brands</span></a></li>

          <li class=""><a class="nav-link" href="{{ route('admin.coupons.index') }}"><i class="fas fa-fire"></i> <span>Coupons</span></a></li>
          <li class=""><a class="nav-link" href="{{ route('admin.orders.index') }}"><i class="fas fa-fire"></i> <span>Orders</span></a></li>


          <li class="menu-header">System Management</li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>System Management</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{ route('admin.sale.edit') }}">Sales</a></li>
            </ul>
          </li>

          <li class="menu-header">User Management</li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>User Management</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="">User</a></li>
              <li><a class="nav-link" href="#">Role</a></li>
              <li><a class="nav-link" href="#">Permission</a></li>
            </ul>
          </li>


          <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank Page</span></a></li>
    </aside>
  </div>