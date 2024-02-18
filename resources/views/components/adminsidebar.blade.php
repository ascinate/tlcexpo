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
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-title">Website Content</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-arrange-send-to-back menu-icon"></i>
          </a>

          <div class="collapse" id="ui-basic3">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/edithome') }}">Home Page</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/whytlc') }}">Why Tlc Expo</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/testimonials') }}">Testimonials</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic12" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Manage Quotes</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-account menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic12">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/addrequestquote') }}">Add Quotes</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/quotes') }}">Quote List</a></li>
              </ul>
            </div>
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
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Manage Entities</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-account menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic1">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/addentity') }}">Add Entity</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/entities') }}">Entity List</a></li>
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
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/tradeshows') }}">Tradeshow List</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/events') }}">Event List</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic11" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-title">Manage Locations</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-account-multiple-plus menu-icon"></i>
          </a>

          <div class="collapse" id="ui-basic11">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/addlocation') }}">Add Location</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/locations') }}">Location List</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic7" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-title">Manage Venue</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-account-multiple-plus menu-icon"></i>
          </a>

          <div class="collapse" id="ui-basic7">
            <ul class="nav flex-column sub-menu">
              <!--<li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/addvenue') }}">Add Venue</a></li>-->
              <!--<li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/venues') }}">Venue List</a></li>-->
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/addvenueentity') }}">Add Venue</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/tradevenues') }}">Venue List</a></li>
            </ul>
          </div>

        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic8" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-title">Manage Contractors</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-account-multiple-plus menu-icon"></i>
          </a>

          <div class="collapse" id="ui-basic8">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/exhibitorcontractors') }}">Exhibit Contractors</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('admin/managementcontractors') }}">Show Contractors</a></li>
            </ul>
          </div>

        </li>

      </ul>
    </nav>
