<div class="main-sidebar">
    <!-- Inner sidebar -->
    <div class="sidebar">
        <!-- user panel (Optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img alt="User Image" class="img-circle" src="/administrator.png">
                </img>
            </div>
            <div class="pull-left info">
                <p>
                    Admin
                </p>
                <a href="#">
                    <i class="fa fa-circle text-success">
                    </i>
                    Online
                </a>
            </div>
        </div>
        <!-- /.user-panel -->
        <!-- Search Form (Optional) -->
        <form action="#" class="sidebar-form" method="get">
            <div class="input-group">
                <input class="form-control" name="q" placeholder="Search..." type="text">
                    <span class="input-group-btn">
                        <button class="btn btn-flat" id="search-btn" name="search" type="submit">
                            <i class="fa fa-search">
                            </i>
                        </button>
                    </span>
                </input>
            </div>
        </form>
        <!-- /.sidebar-form -->
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">
                MAIN NAVIGATION
            </li>
            <li>
                <a href="{{ route('admin.index') }}">
                    <i class="fa fa-dashboard">
                    </i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ route('admin.category.index') }}">
                    <i class="fa fa-tasks">
                    </i>
                    Category
                </a>
            </li>
            <li>
                <a href="{{ route('admin.product.index') }}">
                    <i class="fa fa-cube">
                    </i>
                    Product
                </a>
            </li>
              <li>
                <a href="{{ route('admin.stock.index') }}">
                    <i class="fa fa-database">
                    </i>
                    Stock
                </a>
            </li>
            <li>
                <a href="{{ route('admin.order.index') }}">
                    <i class="fa fa-cart-arrow-down">
                    </i>
                    Order
                </a>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</div>
<!-- /.main-sidebar -->
