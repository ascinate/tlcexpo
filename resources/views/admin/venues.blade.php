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
                    <h4 class="card-title">Venue List</h4>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Venue Name </th>
                          <th> Address </th>
                          <th> City </th>
                          <th> Phone </th>
                          <th> Email </th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($venues as $venue)
                        <tr>
                            <td>{{ $venue->address }}</td>
                            <td>{{ $venue->address_line_1.', '.$venue->address_line_2 }}</td>
                            <td>{{ $venue->city }}</td>
                            <td>{{ $venue->phone }}</td>
                            <td>{{ $venue->email }}</td>
                            <td>
                                <a href="{{ URL::to('admin/editvenue/'.$venue->id) }}" style="color: #333; text-decoration: none;">
                                    <i class="mdi mdi-border-color" style="font-size: 20px;"></i>
                                </a>
                                <a href="{{ 'deletevenue/'.$venue->id }}" style="color: #333;">
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
