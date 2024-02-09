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
                          <th> # </th>
                          <th> Legal Name </th>
                          <th> Type </th>
                          <th> Name </th>
                          <th> Position </th>
                          <th> DBA </th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($datas as $data)
                        <tr>
                            <td><img src="../uploads/{{ $data->logo }}" width="50" height="50"></td>
                            <td>{{ $data->legeal_name }}</td>
                            <td>{{ $data->entity_type }}</td>
                            <td>{{ $data->firstname.' '.$data->lastname }}</td>
                            <td>{{ $data->position }}</td>
                            <td>{{ $data->dba }}</td>
                            <td>
                                <a href="{{ URL::to('admin/viewentity/'.$data->id) }}" style="color: #333; text-decoration: none;">
                                    <i class="mdi mdi-magnify" style="font-size: 20px;"></i>
                                </a>
                                <a href="{{ URL::to('admin/editentity/'.$data->id) }}" style="color: #333; text-decoration: none;">
                                    <i class="mdi mdi-border-color" style="font-size: 20px;"></i>
                                </a>
                                <a href="{{ 'deleteentity/'.$data->id }}" style="color: #333;">
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
