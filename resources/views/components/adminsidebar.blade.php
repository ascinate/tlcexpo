<div class="container-fluid page-body-wrapper">
    <!-- partial:../../partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item nav-profile">
          <a href="#" class="nav-link">
            <div class="nav-profile-image">
              <img src="{{ asset('assets/images/faces/face1.jpg') }}" alt="profile">
              <span class="login-status online"></span>
              <!--change to offline or busy as needed-->
            </div>
            <div class="nav-profile-text d-flex flex-column">
              <span class="font-weight-bold mb-2">Auction</span>
              <span class="text-secondary text-small">Administrator</span>
            </div>
            <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL::to('admin/dashboard') }}">
            <span class="menu-title">Dashboard</span>
            <i class="mdi mdi-home menu-icon"></i>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-title">Manage Customers</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-account menu-icon"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/addcustomer') }}">Add Customer</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/customers') }}">Customer List</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic6" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-title">Manage Tradeshows</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-account-multiple-plus menu-icon"></i>
          </a>

          <div class="collapse" id="ui-basic6">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/addtradeshow') }}">Add Tradeshow</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/tradeshows') }}">Tradeshow List</a></li>
            </ul>
          </div>

        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-title">Manage Categories</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-arrange-send-to-back menu-icon"></i>
          </a>

          <div class="collapse" id="ui-basic2">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/addcategory') }}">Add Category</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/categories') }}">Category List</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic9" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-title">Manage Auctions</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-database menu-icon"></i>
          </a>

          <div class="collapse" id="ui-basic9">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/addauction') }}">Add Auction</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/auctions') }}">Manage Auctions</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-title">Manage Items</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-database menu-icon"></i>
          </a>

          <div class="collapse" id="ui-basic3">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/additem') }}">Add Item</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/items') }}">Item List</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-title">Manage Bids</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-crown menu-icon"></i>
          </a>

          <div class="collapse" id="ui-basic4">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/addbid') }}">Add Bid</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/bids') }}">Bid List</a></li>
            </ul>
          </div>

        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic7" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-title">Manage Orders</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-basket-fill menu-icon"></i>
          </a>

          <div class="collapse" id="ui-basic7">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/orders') }}">Orders</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic8" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-title">Manage Payments</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-cash-usd menu-icon"></i>
          </a>

          <div class="collapse" id="ui-basic8">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/payments') }}">Payments History</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic5" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-title">Manage Blog</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-box-shadow menu-icon"></i>
          </a>

          <div class="collapse" id="ui-basic5">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/addpost') }}">Add Post</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/posts') }}">Post List</a></li>
            </ul>
          </div>

        </li>

      </ul>
    </nav>
