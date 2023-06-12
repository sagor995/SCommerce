<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('backend/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">sCommerce</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{route('admin.dashboard')}}" class="">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>

        <li class="menu-label">Product Management</li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Brand</div>
            </a>
            <ul>
                <li> <a href="{{route('brand.create')}}"><i class="bx bx-right-arrow-alt"></i>Add New Brand</a>
                </li>
                <li> <a href="{{route('brand.manage')}}"><i class="bx bx-right-arrow-alt"></i>Manage All Brand</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Category</div>
            </a>
            <ul>
                <li> <a href="{{route('category.create')}}"><i class="bx bx-right-arrow-alt"></i>Add New Category</a>
                </li>
                <li> <a href="{{route('category.manage')}}"><i class="bx bx-right-arrow-alt"></i>Manage All Category</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Product</div>
            </a>
            <ul>
                <li> <a href="{{route('product.create')}}"><i class="bx bx-right-arrow-alt"></i>Add New Product</a>
                </li>
                <li> <a href="{{route('product.manage')}}"><i class="bx bx-right-arrow-alt"></i>Manage All Product</a>
                </li>
            </ul>
        </li>



        <li class="menu-label">Order Management</li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-cart-alt"></i>
                </div>
                <div class="menu-title">Order</div>
            </a>
            <ul>
                <li> <a href="app-chat-box.html"><i class="bx bx-right-arrow-alt"></i>Manage All Order</a>
                </li>
            </ul>
        </li>

        <li class="menu-label">Customer Management</li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-group"></i>
                </div>
                <div class="menu-title">Customer</div>
            </a>
            <ul>
                <li> <a href="app-emailbox.html"><i class="bx bx-right-arrow-alt"></i>Add New Customer</a>
                </li>
                <li> <a href="app-chat-box.html"><i class="bx bx-right-arrow-alt"></i>Manage All Customer</a>
                </li>
            </ul>
        </li>

        <li class="menu-label">Location Management</li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="lni lni-map-marker"></i>
                </div>
                <div class="menu-title">Division</div>
            </a>
            <ul>
                <li> <a href="{{route('division.create')}}"><i class="bx bx-right-arrow-alt"></i>Add New Division</a>
                </li>
                <li> <a href="{{route('division.manage')}}"><i class="bx bx-right-arrow-alt"></i>Manage All Division</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="lni lni-map-marker"></i>
                </div>
                <div class="menu-title">District</div>
            </a>
            <ul>
                <li> <a href="{{route('district.create')}}"><i class="bx bx-right-arrow-alt"></i>Add New District</a>
                </li>
                <li> <a href="{{route('district.manage')}}"><i class="bx bx-right-arrow-alt"></i>Manage All District</a>
                </li>
            </ul>
        </li>

        <li class="menu-label">Platform Settings</li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-wrench"></i>
                </div>
                <div class="menu-title">Settings</div>
            </a>
            <ul>
                <li> <a href="app-chat-box.html"><i class="bx bx-right-arrow-alt"></i>Settings One</a>
                </li>
                <li> <a href="app-chat-box.html"><i class="bx bx-right-arrow-alt"></i>Settings Two</a>
                </li>
                <li> <a href="app-chat-box.html"><i class="bx bx-right-arrow-alt"></i>Settings Three</a>
                </li>

            </ul>
        </li>
    </ul>
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->