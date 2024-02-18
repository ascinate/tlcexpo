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
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Quote List</h4>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Name </th>
                          <th> Email </th>
                          <th> Phone </th>
                          <th> Shipment </th>
                          <th>Origin</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($quotes as $quote)
                        <tr>
                            <td>{{ $quote->customer_contact_name }}</td>
                            <td>{{ $quote->email }}</td>
                            <td>{{ $quote->phone }}</td>
                            <td>{{ $quote->shipment_type }}</td>
                            <td>{{ $quote->origin_address_line_1 }}</td>
                            <td>
                                <a href="{{ URL::to('admin/viewrequestquote/'.$quote->id) }}" style="color: #333; text-decoration: none;">
                                    <i class="mdi mdi-magnify" style="font-size: 20px;"></i>
                                </a>
                                <a href="{{ URL::to('admin/editrequestquote/'.$quote->id) }}" style="color: #333; text-decoration: none;">
                                    <i class="mdi mdi-border-color" style="font-size: 20px;"></i>
                                </a>
                                <a href="{{ 'deletequote/'.$quote->id }}" style="color: #333;">
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

            </div>

        </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
<x-adminfooter/>
