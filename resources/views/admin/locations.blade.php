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
                    <h4 class="card-title">Location List</h4>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Address </th>
                          <th> City </th>
                          <th> State </th>
                          <th> Zipcode </th>
                          <th> Type </th>
                          <th> Timezone </th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($datas as $data)
                        <tr>
                            <td>{{ $data->address_line_1 }}</td>
                            <td>{{ $data->city }}</td>
                            <td>{{ $data->state }}</td>
                            <td>{{ $data->zipcode }}</td>
                            <td>{{ $data->location_type }}</td>
                            <td>{{ $data->timezone }}</td>
                            <td>
                                <!--<a href="{{ URL::to('admin/viewlocation/'.$data->id) }}" style="color: #333; text-decoration: none;">
                                    <i class="mdi mdi-magnify" style="font-size: 20px;"></i>
                                </a>-->
                                <a href="{{ URL::to('admin/editlocation/'.$data->id) }}" style="color: #333; text-decoration: none;">
                                    <i class="mdi mdi-border-color" style="font-size: 20px;"></i>
                                </a>
                                <a href="{{ 'deletelocation/'.$data->id }}" style="color: #333;">
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
