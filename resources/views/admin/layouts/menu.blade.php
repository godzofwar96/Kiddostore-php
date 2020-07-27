<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-baby"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Kiddo Store
        </div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="admin/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Trang chủ</span>
        </a>
    </li>
    <!-- Divider -->
    @if(Auth::user()->role ==1 ||Auth::user()->role == 2 )
        <hr class="sidebar-divider">
        <!-- Heading -->
        <div class="sidebar-heading">
           Danh mục
        </div>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#category" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Category</span>
            </a>
            <div id="category" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Danh mục sản phẩm</h6>
                    <a class="collapse-item" href="{{ route('category.index') }}">Danh sách</a>
                    <a class="collapse-item" href="{{ route('category.create') }}">Thêm mới</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#producttype" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Product Types</span>
            </a>
            <div id="producttype" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Quản lý loại sản phẩm</h6>
                    <a class="collapse-item" href="{{ route('producttype.index') }}">Danh sách</a>
                    <a class="collapse-item" href="{{ route('producttype.create') }}">Thêm mới</a>
                </div>
            </div>
        </li>
    @endif
    @if(Auth::user()->role ==1 ||Auth::user()->role == 3 )
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#product" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Products</span>
            </a>
            <div id="product" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Quản lý sản phẩm</h6>
                    <a class="collapse-item" href="{{ route('product.index') }}">Danh sách</a>
                    <a class="collapse-item" href="{{ route('product.create') }}">Thêm mới</a>
                </div>
            </div>
        </li>
    @endif
      @if(Auth::user()->role ==1 ||Auth::user()->role == 3 )
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#order" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Orders</span>
            </a>
            <div id="order" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Quản lý đơn hàng</h6>
                    <a class="collapse-item" href="{{ route('order.index') }}">Danh sách</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#orderdetail" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>OrderDetails</span>
            </a>
            <div id="orderdetail" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Quản lý chi tiết đơn hàng</h6>
                    <a class="collapse-item" href="{{ route('orderdetail.index') }}">Danh sách</a>
                </div>
            </div>
        </li>
    @endif
</ul>