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
                    <h4 class="card-title">Tradeshow List</h4>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Show Name </th>
                          <th> Start Date </th>
                          <th> Stop Date </th>
                          <th> Management </th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($trades as $trade)
                        <tr>
                            <td>{{ $trade->show_name }}</td>
                            <td>{{ $trade->start_publishing }}</td>
                            <td>{{ $trade->stop_publishing }}</td>
                            <td>{{ $trade->show_management }}</td>
                            <td>
                                <a href="{{ URL::to('admin/edittradeshow/'.$trade->id) }}" style="color: #333; text-decoration: none;">
                                    <i class="mdi mdi-border-color" style="font-size: 20px;"></i>
                                </a>
                                <a href="{{ 'admin/deletetradeshow/'.$trade->id }}" style="color: #333;">
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
