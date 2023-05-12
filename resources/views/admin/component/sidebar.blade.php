<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link " href="{{route("admin.dashboard")}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-heading">Management</li>
      <li class="nav-item">
        <a class="nav-link collapsed" style="color:{{ request()->route()->getName() === 'product.index'? '#4154f1': '' }}" href="{{route("product.index")}}">
          <i class="ri-grid-fill"></i><span>Product</span></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" style="color:{{ request()->route()->getName() === 'blog.index'? '#4154f1': '' }}" href="{{route("blog.index")}}">
          <i class="bi bi-menu-button-wide"></i><span>Blog</span></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" style="color:{{ request()->route()->getName() === 'order.index'? '#4154f1': '' }}" href="{{route("order.index")}}">
          <i class="ri-shopping-cart-fill"></i><span>Order</span></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" style="color:{{ request()->route()->getName() === 'user.index'? '#4154f1': '' }}" href="{{route("user.index")}}">
          <i class="ri-account-circle-fill"></i><span>User</span></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" style="color:{{ request()->route()->getName() === 'shop.index'? '#4154f1': '' }}" href="{{route("shop.index")}}">
          <i class="bi bi-shop"></i><span>Shop</span></i>
        </a>
      </li>
      <li class="nav-heading">My Account</li>
      <li class="nav-item">
        <a class="nav-link collapsed" style="color:{{ request()->route()->getName() === 'shop.index'? '#4154f1': '' }}" href="{{route("shop.index")}}">
          <i class="bi bi-shop"></i><span>Message</span></i>
        </a>
        <a class="nav-link collapsed" style="color:{{ request()->route()->getName() === 'shop.index'? '#4154f1': '' }}" href="{{route("shop.index")}}">
          <i class="bi bi-shop"></i><span>Notification</span></i>
        </a>
        <a class="nav-link collapsed" style="color:{{ request()->route()->getName() === 'shop.index'? '#4154f1': '' }}" href="{{route("shop.index")}}">
          <i class="bi bi-shop"></i><span>My Account</span></i>
        </a>
      </li>
      <!-- End Components Nav -->
    </ul>

  </aside><!-- End Sidebar-->