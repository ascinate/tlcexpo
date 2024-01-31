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
                      <h4 class="font-weight-normal mb-3">Tradeshows <i class="mdi mdi-dollar mdi-24px float-right"></i>
                      </h4>
                      <h2 class="mb-5">
                            {{ count($trades) }}
                      </h2>
                    </div>
                  </div>
                </div>

                <div class="col-md-3 stretch-card grid-margin">
                  <div class="card bg-gradient-success card-img-holder text-white">
                    <div class="card-body">
                      <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                      <h4 class="font-weight-normal mb-3">Total Events<i class="mdi mdi-dollar mdi-24px float-right"></i>
                      </h4>
                      <h2 class="mb-5">
                        {{ count($events) }}
                      </h2>
                    </div>
                  </div>
                </div>

                <div class="col-md-3 stretch-card grid-margin">
                  <div class="card bg-gradient-info card-img-holder text-white">
                    <div class="card-body">
                      <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                      <h4 class="font-weight-normal mb-3">Shipments <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                      </h4>
                      <h2 class="mb-5">0 </h2>
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
                    <h4 class="card-title">Latest Tradeshows</h4>
                    </p>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> Show Name </th>
                          <th> Publish Date </th>
                          <th> End Date </th>
                          <th>Show Management</th>
                        </tr>
                      </thead>

                      <tbody>
                        @php
                        $i =1;
                        foreach ($trades as $trade)
                        {
                            @endphp
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $trade->show_name }}</td>
                            <td>
                                @php
                                    $ex = explode("-", $trade->start_publishing);
                                    $dt = mktime(12,0,0, $ex[1],$ex[2],$ex[0]);
                                    echo date('F j, Y', $dt);
                                @endphp
                            </td>
                            <td>
                                @php
                                    $ex = explode("-", $trade->stop_publishing);
                                    $dt = mktime(12,0,0, $ex[1],$ex[2],$ex[0]);
                                    echo date('F j, Y', $dt);
                                @endphp
                            </td>
                            <td>
                                @php
                                    $data = \DB::table('managecontractors')->where('id', $trade->show_management)->get();
                                    echo $data[0]->contractor_name;
                                @endphp
                           </td>
                        </tr>
                        @php
                         $i++;
                             }
                        @endphp

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
