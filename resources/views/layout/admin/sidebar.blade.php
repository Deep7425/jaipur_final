<div class="section-menu-left">
    <div class="box-logo">
        <a href="{{url('/admin')}}" id="site-logo-inner">
            <img class="" id="" style="width:70px; height:60px;" alt="Jaipur Jazbaa Admin" src="{{url('assets/admin/images/logo/jazbaa.jpg')}}"  data-light="{{url('assets/admin/images/logo/jazbaa.jpg')}}" data-dark="{{url('assets/admin/images/logo/jazbaa.jpg')}}">

        </a>
        <div class="button-show-hide">
            <i class="icon-menu-left"></i>
        </div>
    </div>
    <div class="center">
        <div class="center-item">
            <div class="center-heading">Main Home</div>
            <ul class="menu-list">
                <li class="menu-item">
                    <a href="{{url('/admin')}}" class="{{Request::is('admin') ? 'active' : ''}}">
                        <div class="icon"><i class="icon-grid"></i></div>
                        <div class="text">Dashboard</div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="center-item">
            <ul class="menu-list">
                <li class="menu-item has-children">
                    <a href="javascript:void(0);" class="menu-item-button">
                        <div class="icon"><i class="icon-shopping-cart"></i></div>
                        <div class="text">Products</div>
                    </a>
                    <ul class="sub-menu">
                        <li class="sub-menu-item">
                            <a href="{{url('/admin/products/create')}}" class="{{Request::is('admin/products/create') ? 'active' : ''}}">
                                <div class="text">Add Product</div>
                            </a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="{{route('admin.products.index')}}" class="{{Request::is('admin/products') ? 'active' : ''}}">
                                <div class="text">Products</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item has-children">
                    <a href="javascript:void(0);" class="menu-item-button">
                        <div class="icon"><i class="icon-layers"></i></div>
                        <div class="text">Brand</div>
                    </a>
                    <ul class="sub-menu">
                        <li class="sub-menu-item">
                            <a href="{{url('/admin/brands/create')}}" class="{{Request::is('admin/brands/create') ? 'active' : ''}}">
                                <div class="text">New Brand</div>
                            </a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="{{url('/admin/brands')}}" class="{{Request::is('admin/brands') ? 'active' : ''}}">
                                <div class="text">Brands</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item has-children">
                    <a href="javascript:void(0);" class="menu-item-button">
                        <div class="icon"><i class="icon-layers"></i></div>
                        <div class="text">Category</div>
                    </a>
                    <ul class="sub-menu">
                        <li class="sub-menu-item">
                            <a href="{{url('/admin/categories/create')}}" class="{{Request::is('admin/categories/create') ? 'active' : ''}}">
                                <div class="text">New Category</div>
                            </a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="{{url('/admin/categories')}}" class="{{Request::is('admin/categories') ? 'active' : ''}}">
                                <div class="text">Categories</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="menu-item has-children">
                    <a href="javascript:void(0);" class="menu-item-button">
                        <div class="icon"><i class="icon-file-plus"></i></div>
                        <div class="text">Order</div>
                    </a>
                    <ul class="sub-menu">
                        <li class="sub-menu-item">
                            <a href="{{url('/admin/orders')}}" class="{{Request::is('admin/orders') ? 'active' : ''}}">
                                <div class="text">Orders</div>
                            </a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="{{url('/admin/order-tracking')}}" class="{{Request::is('admin/order-tracking') ? 'active' : ''}}">
                                <div class="text">Order tracking</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="{{url('/admin/slider')}}" class="{{Request::is('admin/slider') ? 'active' : ''}}">
                        <div class="icon"><i class="icon-image"></i></div>
                        <div class="text">Slider</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{url('/admin/coupons')}}" class="{{Request::is('admin/coupons') ? 'active' : ''}}">
                        <div class="icon"><i class="icon-grid"></i></div>
                        <div class="text">Coupons</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{url('/admin/users')}}" class="{{Request::is('admin/users') ? 'active' : ''}}">
                        <div class="icon"><i class="icon-user"></i></div>
                        <div class="text">Users</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{url('/admin/settings')}}" class="{{Request::is('admin/settings') ? 'active' : ''}}">
                        <div class="icon"><i class="icon-settings"></i></div>
                        <div class="text">Settings</div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
