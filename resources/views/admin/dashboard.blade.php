<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

            <div class="page-header">
                <h3 class="page-title">
                  <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                  </span> Dashboard
                </h3>
              </div>

            <div class="row">
                <div class="col-md-3 stretch-card grid-margin">
                  <div class="card bg-gradient-danger card-img-holder text-white">
                    <div class="card-body">
                      <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                      <h4 class="font-weight-normal mb-3">Total Customers <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                      </h4>
                      <h2 class="mb-5">
                            {{ count($customers) }}
                      </h2>
                    </div>
                  </div>
                </div>

                <div class="col-md-3 stretch-card grid-margin">
                  <div class="card bg-gradient-success card-img-holder text-white">
                    <div class="card-body">
                      <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                      <h4 class="font-weight-normal mb-3">Admin Commission <i class="mdi mdi-dollar mdi-24px float-right"></i>
                      </h4>
                      <h2 class="mb-5">

                      </h2>
                    </div>
                  </div>
                </div>

                <div class="col-md-3 stretch-card grid-margin">
                  <div class="card bg-gradient-success card-img-holder text-white">
                    <div class="card-body">
                      <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                      <h4 class="font-weight-normal mb-3">Total Transactions<i class="mdi mdi-dollar mdi-24px float-right"></i>
                      </h4>
                      <h2 class="mb-5">

                      </h2>
                    </div>
                  </div>
                </div>

                <div class="col-md-3 stretch-card grid-margin">
                  <div class="card bg-gradient-info card-img-holder text-white">
                    <div class="card-body">
                      <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                      <h4 class="font-weight-normal mb-3">Total Properties <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                      </h4>
                      <h2 class="mb-5">


                      </h2>
                    </div>
                  </div>
                </div>

              </div>

            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Latest Customers</h4>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Name </th>
                          <th> Email </th>
                          <th> Phone </th>
                          <th> City </th>
                          <th>Country</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $customer->customer_name }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td>{{ $customer->city }}</td>
                            <td>{{ $customer->country }}</td>
                            <td>
                                <a href="{{ URL::to('editcustomer/'.$customer->id) }}" style="color: #333; text-decoration: none;">
                                    <i class="mdi mdi-border-color" style="font-size: 20px;"></i>
                                </a>
                                <a href="{{ 'deletecustomer/'.$customer->id }}" style="color: #333;">
                                    <i class="mdi mdi-delete" style="font-size: 20px;"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Latest Items</h4>
                    </p>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Title </th>
                          <th> Photo </th>
                          <th> Category </th>
                          <th> Seller </th>
                          <th>Start Price</th>
                          <th>End Date</th>
                          <th>Pickup</th>
                        </tr>
                      </thead>

                      <tbody>


                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


            </div>

        </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
<x-adminfooter/>
