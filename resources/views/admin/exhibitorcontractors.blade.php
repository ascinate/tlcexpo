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
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                      <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ URL::to('admin/addexhibitorcontractor') }}" class="btn btn-gradient-success btn-fw">
                            Add Exhibitor Contractors
                        </a>
                      </li>
                    </ul>
                  </nav>
              </div>

            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Exhibitor Contractors List</h4>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Contractor Name </th>
                          <th> Address </th>
                          <th> Phone </th>
                          <th> Website </th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($datas as $data)
                        <tr>
                            <td>{{ $data->contractor_name }}</td>
                            <td>{{ $data->address_line_1.', '.$data->address_line_2 }}</td>
                            <td>{{ $data->phone }}</td>
                            <td>{{ $data->website }}</td>
                            <td>
                                <a href="{{ URL::to('admin/viewexhibitcontractor/'.$data->id) }}" style="color: #333; text-decoration: none;">
                                    <i class="mdi mdi-magnify" style="font-size: 20px;"></i>
                                </a>
                                <a href="{{ URL::to('admin/editexhibitcontractor/'.$data->id) }}" style="color: #333; text-decoration: none;">
                                    <i class="mdi mdi-border-color" style="font-size: 20px;"></i>
                                </a>
                                <a href="{{ 'deleteexhibitorcontractor/'.$data->id }}" style="color: #333;">
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
