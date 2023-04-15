          <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.php">Inventory</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.php">In</a>
          </div>
          <ul class="sidebar-menu">
            
            <li class="menu-header">Dashboard</li>
            <li class="dropdown {{ request()->routeIs('home') ? 'active':'' }}">
              <a href="{{ route('home') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>

            {{-- suppliers --}}
            <li class="dropdown {{ request()->is('suppliers/*') || request()->is('suppliers') ? 'active':'' }}">
              <a href="#" class="nav-link has-dropdown">
                <i class="fas fa-user"></i><span>Suppliers</span>
              </a>
              <ul class="dropdown-menu">
                <li class="{{ request()->routeIs('supplier.create') ? 'active':'' }}"><a class="nav-link" href="{{ route('supplier.create') }}">Add Supplier</a></li>
                <li class="{{ request()->routeIs('supplier.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('supplier.index') }}">All Suppliers</a></li>
              </ul>
            </li>

            {{-- customer --}}
            <li class="dropdown {{ request()->is('customers/*') || request()->is('customers') ? 'active':'' }}">
              <a href="#" class="nav-link has-dropdown">
                <i class="far fa-user"></i><span>Customer</span>
              </a>
              <ul class="dropdown-menu">
                <li class="{{ request()->routeIs('customer.create') ? 'active':'' }}"><a class="nav-link" href="{{ route('customer.create') }}">Add customer</a></li>
                <li class="{{ request()->routeIs('customer.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('customer.index') }}">All customer</a></li>
              </ul>
            </li>

            {{-- Category --}}
            <li class="dropdown {{ request()->is('category/*') || request()->is('category') ? 'active':'' }}">
              <a href="#" class="nav-link has-dropdown">
                <i class="fas fa-list"></i><span>Category</span>
              </a>
              <ul class="dropdown-menu">
                <li class="{{ request()->routeIs('category.create') ? 'active':'' }}"><a class="nav-link" href="{{ route('category.create') }}">Add Category</a></li>
                <li class="{{ request()->routeIs('category.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('category.index') }}">All Category</a></li>
              </ul>
            </li>

            {{-- Product --}}
            <li class="dropdown {{ request()->is('product/*') || request()->is('product') ? 'active':'' }}">
              <a href="#" class="nav-link has-dropdown">
                <i class="fas fa-shopping-cart"></i><span>Product</span>
              </a>
              <ul class="dropdown-menu">
                <li class="{{ request()->routeIs('product.create') ? 'active':'' }}"><a class="nav-link" href="{{ route('product.create') }}">Add product</a></li>
                <li class="{{ request()->routeIs('product.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('product.index') }}">All product</a></li>
              </ul>
            </li>

            {{-- Unit --}}
            <li class="dropdown {{ request()->is('unit/*') || request()->is('unit') ? 'active':'' }}">
              <a href="#" class="nav-link has-dropdown">
                <i class="fas fa-balance-scale"></i><span>Unit</span>
              </a>
              <ul class="dropdown-menu">
                <li class="{{ request()->routeIs('unit.create') ? 'active':'' }}"><a class="nav-link" href="{{ route('unit.create') }}">Add unit</a></li>
                <li class="{{ request()->routeIs('unit.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('unit.index') }}">All unit</a></li>
              </ul>
            </li>

            {{-- Purchase --}}
            <li class="dropdown {{ request()->is('purchase/*') || request()->is('purchase') ? 'active':'' }}">
              <a href="#" class="nav-link has-dropdown">
                <i class="fas fa-money-bill"></i><span>Purchase</span>
              </a>
              <ul class="dropdown-menu">
                <li class="{{ request()->routeIs('purchase.create') ? 'active':'' }}"><a class="nav-link" href="{{ route('purchase.create') }}">New purchase</a></li>
                <li class="{{ request()->routeIs('purchase.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('purchase.index') }}">Purchase list</a></li>
              </ul>
            </li>

            {{-- Invoice --}}
            <li class="dropdown {{ request()->is('invoice/*') || request()->is('invoice') ? 'active':'' }}">
              <a href="#" class="nav-link has-dropdown">
                <i class="fas fa-file"></i><span>Invoice</span>
              </a>
              <ul class="dropdown-menu">
                <li class="{{ request()->routeIs('invoice.create') ? 'active':'' }}"><a class="nav-link" href="{{ route('invoice.create') }}">New Invoice</a></li>
                <li class="{{ request()->routeIs('invoice.index') ? 'active':'' }}"><a class="nav-link" href="{{ route('invoice.index') }}">Invoice list</a></li>
              </ul>
            </li>
            
            {{-- Log Out --}}
            <li class="menu-header">Log Out</li>
            <li  class="dropdown">
              <a href="{{ route('logout') }}" class="has-icon nav-link text-danger" 
              onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="fas fa-sign-out-alt"></i> <span>Logout</span>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </a>
            </li>
          </ul>
        </aside>
      </div>